<?php

namespace App\Http\Controllers;

use App\Models\Aspirante;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $areas = [
            'cientifica' => [1, 21, 36, 38, 51, 70, 78, 93, 96, 107],
            'coordinacion_visiomotriz' => [2, 13, 35, 44, 56, 65, 74, 88, 101, 114],
            'numerica' => [3, 15, 25, 43, 55, 66, 73, 89, 100, 112],
            'verbal' => [4, 16, 27, 41, 53, 68, 80, 91, 98, 110],
            'persuasiva' => [5, 20, 34, 46, 50, 71, 77, 85, 104, 117],
            'mecanica' => [6, 19, 29, 40, 58, 63, 76, 86, 103, 116],
            'social' => [7, 14, 33, 37, 52, 69, 79, 92, 97, 108],
            'directiva' => [8, 18, 30, 39, 57, 64, 75, 87, 102, 115],
            'organizacion' => [9, 17, 26, 42, 54, 67, 81, 90, 99, 111],
            'musical' => [10, 31, 47, 60, 72, 83, 105, 109, 113, 118],
            'plastico' => [11, 23, 24, 32, 49, 61, 82, 94, 106, 120],
            'espacial' => [12, 22, 28, 45, 48, 59, 62, 84, 95, 119],
        ];

        $cientifica = 0;
        $coordinacion_visiomotriz = 0;
        $numerica = 0;
        $verbal = 0;
        $persuasiva = 0;
        $mecanica = 0;
        $social = 0;
        $directiva = 0;
        $organizacion = 0;
        $musical = 0;
        $plastico = 0;
        $espacial = 0;

        foreach ($request->data as $key => $value) {
            if(in_array($key, $areas['cientifica'])){
                $cientifica += $value;
            } else if(in_array($key, $areas['coordinacion_visiomotriz'])){
                $coordinacion_visiomotriz += $value;
            }  else if(in_array($key, $areas['numerica'])){
                $numerica += $value;
            } else if(in_array($key, $areas['verbal'])){
                $verbal += $value;
            } else if(in_array($key, $areas['persuasiva'])) {
                $persuasiva += $value;
            } else if(in_array($key, $areas['mecanica'])) {
                $mecanica += $value;
            } else if(in_array($key, $areas['social'])) {
                $social += $value;
            } else if(in_array($key, $areas['directiva'])) {
                $directiva += $value;
            } else if(in_array($key, $areas['organizacion'])) {
                $organizacion += $value;
            } else if(in_array($key, $areas['musical'])) {
                $musical += $value;
            } else if(in_array($key, $areas['plastico'])) {
                $plastico += $value;
            } else if(in_array($key, $areas['espacial'])) {
                $espacial += $value;
            }
        }

        $results = [
            $cientifica,
            $coordinacion_visiomotriz,
            $numerica,
            $verbal,
            $persuasiva,
            $mecanica,
            $social,
            $directiva,
            $organizacion,
            $musical,
            $plastico,
            $espacial
        ];

        $aspirante = Aspirante::create([
            'name' => $request->person['name'] . " " . $request->person['lastname'],
            'email' => $request->person['email'],
            'age' => $request->person['age'],
            'control_number' => $request->person['control_number'],
            
            'current_career' => $request->person['current_career'],
            'requested_career' => $request->person['requested_career'],
            'semester' => $request->person['semester'],
            'results' => json_encode($results),
        ]);

        $array = [
          'aspirante' => $aspirante,
          'results' => $results
        ];

        return response()->json($array, 200);
    }
}
