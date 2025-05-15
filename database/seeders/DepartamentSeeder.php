<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primero creamos los departamentos
        $departamentos = [
            ['id' => 1, 'name' => 'Amazonas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Antioquia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Arauca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Atlántico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'Bolívar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'name' => 'Boyacá', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'name' => 'Caldas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'name' => 'Caquetá', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'name' => 'Casanare', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'name' => 'Cauca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 11, 'name' => 'Cesar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 12, 'name' => 'Chocó', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 13, 'name' => 'Córdoba', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 14, 'name' => 'Cundinamarca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 15, 'name' => 'Guainía', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 16, 'name' => 'Guaviare', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 17, 'name' => 'Huila', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 18, 'name' => 'La Guajira', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 19, 'name' => 'Magdalena', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 20, 'name' => 'Meta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 21, 'name' => 'Nariño', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 22, 'name' => 'Norte de Santander', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 23, 'name' => 'Putumayo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 24, 'name' => 'Quindío', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 25, 'name' => 'Risaralda', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 26, 'name' => 'San Andrés y Providencia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 27, 'name' => 'Santander', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 28, 'name' => 'Sucre', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 29, 'name' => 'Tolima', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 30, 'name' => 'Valle del Cauca', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 31, 'name' => 'Vaupés', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 32, 'name' => 'Vichada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 33, 'name' => 'Bogotá D.C.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('departaments')->insert($departamentos);

        // Ahora creamos las ciudades asociadas a sus departamentos
        $ciudades = [
            // Amazonas
            ['name' => 'Leticia', 'departament_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Puerto Nariño', 'departament_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Antioquia
            ['name' => 'Medellín', 'departament_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bello', 'departament_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Envigado', 'departament_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Itagüí', 'departament_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rionegro', 'departament_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Arauca
            ['name' => 'Arauca', 'departament_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Saravena', 'departament_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Atlántico
            ['name' => 'Barranquilla', 'departament_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Soledad', 'departament_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Malambo', 'departament_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Bolívar
            ['name' => 'Cartagena', 'departament_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Magangué', 'departament_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Boyacá
            ['name' => 'Tunja', 'departament_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Duitama', 'departament_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sogamoso', 'departament_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Caldas
            ['name' => 'Manizales', 'departament_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'La Dorada', 'departament_id' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Caquetá
            ['name' => 'Florencia', 'departament_id' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Casanare
            ['name' => 'Yopal', 'departament_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Cauca
            ['name' => 'Popayán', 'departament_id' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Cesar
            ['name' => 'Valledupar', 'departament_id' => 11, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Chocó
            ['name' => 'Quibdó', 'departament_id' => 12, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Córdoba
            ['name' => 'Montería', 'departament_id' => 13, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Cundinamarca
            ['name' => 'Zipaquirá', 'departament_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Facatativá', 'departament_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Chía', 'departament_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Girardot', 'departament_id' => 14, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Guainía
            ['name' => 'Inírida', 'departament_id' => 15, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Guaviare
            ['name' => 'San José del Guaviare', 'departament_id' => 16, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Huila
            ['name' => 'Neiva', 'departament_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pitalito', 'departament_id' => 17, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // La Guajira
            ['name' => 'Riohacha', 'departament_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Maicao', 'departament_id' => 18, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Magdalena
            ['name' => 'Santa Marta', 'departament_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ciénaga', 'departament_id' => 19, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Meta
            ['name' => 'Villavicencio', 'departament_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Acacías', 'departament_id' => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Nariño
            ['name' => 'Pasto', 'departament_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ipiales', 'departament_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tumaco', 'departament_id' => 21, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Norte de Santander
            ['name' => 'Cúcuta', 'departament_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ocaña', 'departament_id' => 22, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Putumayo
            ['name' => 'Mocoa', 'departament_id' => 23, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Quindío
            ['name' => 'Armenia', 'departament_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Calarcá', 'departament_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Risaralda
            ['name' => 'Pereira', 'departament_id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dosquebradas', 'departament_id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Santa Rosa de Cabal', 'departament_id' => 25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // San Andrés y Providencia
            ['name' => 'San Andrés', 'departament_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Providencia', 'departament_id' => 26, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Santander
            ['name' => 'Bucaramanga', 'departament_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Floridablanca', 'departament_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Girón', 'departament_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Piedecuesta', 'departament_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Barrancabermeja', 'departament_id' => 27, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Sucre
            ['name' => 'Sincelejo', 'departament_id' => 28, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Tolima
            ['name' => 'Ibagué', 'departament_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Espinal', 'departament_id' => 29, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Valle del Cauca
            ['name' => 'Cali', 'departament_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Buenaventura', 'departament_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Palmira', 'departament_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tuluá', 'departament_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cartago', 'departament_id' => 30, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Vaupés
            ['name' => 'Mitú', 'departament_id' => 31, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Vichada
            ['name' => 'Puerto Carreño', 'departament_id' => 32, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Bogotá D.C.
            ['name' => 'Bogotá', 'departament_id' => 33, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('cities')->insert($ciudades);
    }
}
