<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gatinhosz;
use Illuminate\Support\Facades\Validator;

class GatinhoszController extends Controller
{
    public function index()
    {
        $dadosGatinho = Gatinhosz::all();
        $counting = $dadosGatinho->count();
        return 'Gatinhos: ' . $counting .' - '. $dadosGatinho;
    }

    public function store(Request $request)
    {
        $dadosGatinho = $request -> all();
        $validar = Validator::make($dadosGatinho,[
            'racaGatinho' => 'required',
            'corGatinho' => 'required',
            'nomeDono' => 'required',
            'idadeGatinho' => 'required',
            'pelagem' => 'required'
        ]);

        if($validar->fails()){
            return 'Gatinhos inválidos!'. $validar->error(true). 500;
        }
        
        $registrosGatinhos = Gatinhosz::create($dadosGatinho);

        if($registrosGatinhos){
            return 'Gatinhos cadastrados ' . $registrosGatinhos . 201;
        }
        else{
            return 'Erro ao cadastrar gatinhos.' . 500;
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
