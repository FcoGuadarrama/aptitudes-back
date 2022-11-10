<?php

namespace App\Http\Controllers;

use App\Exports\AspirantesExport;
use App\Models\Aspirante;
use App\Http\Requests\StoreAspiranteRequest;
use App\Http\Requests\UpdateAspiranteRequest;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class AspiranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Aspirante::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAspiranteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAspiranteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirante $aspirante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirante $aspirante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAspiranteRequest  $request
     * @param  \App\Models\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAspiranteRequest $request, Aspirante $aspirante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirante  $aspirante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirante $aspirante)
    {
        //
    }

    public function export(){
        return Excel::download(new AspirantesExport, 'aspirantes.xlsx');
    }

    public function generatePDF($id) {
       $results_aspirante = [
           'aspirante' => Aspirante::where('id', $id)->first(),
       ];

       $pdf = PDF::loadView('results', $results_aspirante);

       return $pdf->download('resultados.pdf');
    }
}
