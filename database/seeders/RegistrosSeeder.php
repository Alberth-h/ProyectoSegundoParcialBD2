<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RegistrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registros')->insert([
            'codigo' => 'XSK3E09RFIOFC',
            'descripcion' => 'Esta es una pelota chila',
            'cantidad' => '1',
            'precio' => '83.5',

        ]);
    }
}
