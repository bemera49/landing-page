<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Apellido',
            'Cédula',
            'Departamento',
            'Ciudad',
            'Celular',
            'Correo Electrónico',
            'Aceptó Habeas Data',
            'Ganador',
            'Fecha de Registro',
        ];
    }

    /**
     * @param  mixed  $row
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->lastName,
            $row->identification,
            $row->departament,
            $row->city,
            $row->phone,
            $row->email,
            $row->habeasData ? 'Sí' : 'No',
            $row->winner ? 'Sí' : 'No',
            $row->created_at->format('d/m/Y H:i:s'),
        ];
    }
}
