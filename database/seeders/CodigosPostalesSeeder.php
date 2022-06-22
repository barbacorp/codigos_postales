<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CodigosPostalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvData = fopen(base_path('database/csv/CPdescarga.txt'), 'r');
        $transRow = true;
        $count = 0;
        $registros = [];
        while (($data = fgetcsv($csvData, 1000, '|')) !== false) {
            if (!$transRow) {
                $d_codigo = (string)trim($data['0']);
                $d_asenta = (string)utf8_encode(trim($data['1']));
                $d_tipo_asenta = (string)trim($data['2']);
                $d_mnpio = (string)utf8_encode(trim($data['3']));
                $d_estado = (string)utf8_encode(trim($data['4']));
                $d_ciudad = (string)utf8_encode(trim($data['5']));
                $d_CP = (string)trim($data['6']);
                $c_estado = (string)trim($data['7']);
                $c_oficina = (string)trim($data['8']);
                $c_CP = (string)trim($data['9']);
                $c_tipo_asenta = (string)trim($data['10']);
                $c_mnpio = (string)trim($data['11']);
                $id_asenta_cpcons = (string)trim($data['12']);
                $d_zona = (string)utf8_encode(trim($data['13']));
                $c_cve_ciudad = (string)trim($data['14']);

                $d_zona = strtoupper($d_zona);
                $d_asenta = strtoupper($d_asenta);
                $d_tipo_asenta = strtoupper($d_tipo_asenta);
                $d_mnpio = strtoupper($d_mnpio);
                $d_estado = strtoupper($d_estado);
                $d_ciudad = strtoupper($d_ciudad);

                $registros[] = [
                    'd_codigo' => "{$d_codigo}",
                    'd_asenta' => "{$d_asenta}",
                    'd_tipo_asenta' => "{$d_tipo_asenta}",
                    'D_mnpio' => "{$d_mnpio}",
                    'd_estado' => "{$d_estado}",
                    'd_ciudad' => "{$d_ciudad}",
                    'd_CP' => "{$d_CP}",
                    'c_estado' => "{$c_estado}",
                    'c_oficina' => "{$c_oficina}",
                    'c_CP' => "{$c_CP}",
                    'c_tipo_asenta' => "{$c_tipo_asenta}",
                    'c_mnpio' => "{$c_mnpio}",
                    'id_asenta_cpcons' => "{$id_asenta_cpcons}",
                    'd_zona' => "{$d_zona}",
                    'c_cve_ciudad' => "{$c_cve_ciudad}"
                ];

                $count++;
                if ($count == 100) {
                    DB::table('codigos_postales')->insert($registros);
                    $registros = [];
                    $count = 0;
                }
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
