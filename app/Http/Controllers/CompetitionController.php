<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\City;
use App\Models\Departament;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $departaments = Departament::orderBy('name')->get();
        $userCount = User::count();
        $winner = User::where('winner', true)->first();
        $cities = City::orderBy('name')->get();

        return view('index', compact('userCount', 'cities', 'winner'));
    }

    /**
     * get cities' departaments
     */
    public function getDepartament($ciudadId): JsonResponse
    {
        // Obtener el departamento relacionado con la ciudad
        $departament = City::find($ciudadId)?->departament;
        // dd($departament);
        if ($departament) {
            return response()->json([$departament]); // Se devuelve como array
        }

        return response()->json([], 404); // En caso de no encontrarlo
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha|max:100',
            'lastName' => 'required|alpha|max:100',
            'identification' => 'required|numeric|unique:users',
            'departament' => 'required|exists:departaments,id',
            'cities' => 'required|exists:cities,id',
            'phone' => 'required|numeric|digits_between:7,15',
            'email' => 'required|email|unique:users',
            'habeasData' => 'required|accepted',
        ], [
            'name.alpha' => 'El nombre debe contener solo letras',
            'lastName.alpha' => 'El apellido debe contener solo letras',
            'identification.numeric' => 'La cédula debe contener solo números',
            'identification.unique' => 'Esta cédula ya está registrada en el concurso',
            'phone.numeric' => 'El celular debe contener solo números',
            'email.unique' => 'Este correo ya está registrado en el concurso',
            'habeasData.accepted' => 'Debes autorizar el tratamiento de datos personales',
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());

            return redirect()->route('competition.index')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'identification' => $request->identification,
            'departament' => $request->departament,
            'city' => $request->cities,
            'phone' => $request->phone,
            'email' => $request->email,
            'habeasData' => true,
        ]);

        return redirect()->route('competition.index')
            ->with('success', '¡Gracias por participar! Tu registro ha sido exitoso.');
    }

    /**
     * selct a winner aleatories
     */
    public function selectWinner(): RedirectResponse
    {
        $userCount = User::count();

        if ($userCount < 5) {
            return redirect()->route('competition.index')
                ->with('error', 'Se necesitan al menos 5 participantes para seleccionar un ganador.');
        }

        // restart winner if exists
        User::where('winner', true)->update(['winner' => false]);

        // select a weinner
        $winner = User::inRandomOrder()->first();
        $winner->update(['winner' => true]);

        return redirect()->route('competition.index')
            ->with('success', '¡El ganador ha sido seleccionado!');
    }

    /**
     * export user's excel
     */
    public function exportExcel(): BinaryFileResponse
    {
        return Excel::download(new UsersExport, 'participantes_concurso.xlsx');
    }

    /**
     * Display the privacy policy.
     */
    public function privacyPolicy(): View
    {
        return view('competition.privacy');
    }
}
