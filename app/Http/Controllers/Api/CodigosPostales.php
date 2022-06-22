<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodigosPostales extends Controller
{
    public function obtener(Request $request, $zip_code)
    {
        $oValidator = app('validator')->make(
            array_merge($request->all(), ['zip_code' => $zip_code]),
            [
                'zip_code' => 'required|string|size:5'
            ]
        );

        if ($oValidator->fails()) {
            return "Código Postal no válido!";
        }

        $codigo = \App\Models\CodigosPostales::where("d_codigo", $zip_code)->get();

        if (empty($codigo)) {
            return "Código Postal no encontrado!";
        }

        $cont = 0;
        $locality = "";
        $federal = [];
        $settlements = [];
        $municipality = [];
        if (!empty($codigo)) {
            foreach ($codigo as $k => $v) {
                $cont++;

                $locality = $v->D_mnpio;
                $federal = [
                    'key' => $cont,
                    'name' => $v->d_estado,
                    'code' => ($v->c_CP) ? $v->c_CP : null
                ];

                $settlements[] = [
                    "key" => $cont,
                    "name" => $v->d_asenta,
                    "zone_type" => $v->d_zona,
                    "settlement_type" => [
                        "name" => $v->d_tipo_asenta
                    ]
                ];

                $municipality = [
                    "key" => $v->c_mnpio,
                    "name" => $v->d_ciudad
                ];
            }
        }


        $resp = [
            'zip_code' => $zip_code,
            'locality' => $locality,
            'federal_entity' => $federal,
            'settlements' => $settlements,
            'municipality' => $municipality
        ];

        return response()->json($resp, 200);
    }
}