<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Http\Requests\StoreModeloRequest;
use App\Http\Requests\UpdateModeloRequest;


class ModeloController extends Controller
{
    protected $modelo;

    public function __construct(Modelo $modelo){

        $this->modelo = $modelo;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelo = $this->modelo->all();
        return $modelo;

        // $modelo = modelo::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModeloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeloRequest $request)
    {


        $modelo = $this->modelo->create($request->all());
        return $modelo;

        // $modelo = Modelo::create($request->all());


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $modelo = $this->modelo->find($id);
        return $modelo;

       // return $modelo;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModeloRequest  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModeloRequest $request,$id)
    {
        $modelo = $this->modelo->find($id);

        $modelo->update($request->all());

        // $modelo->update($request->all());
        return $modelo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = $this->modelo->find($id);

        $modelo->delete();
        //$modelo->delete();
        return ['msg' => 'O modelo foi excluido'];
    }
}