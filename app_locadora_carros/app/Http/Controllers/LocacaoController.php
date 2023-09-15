<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use App\Http\Requests\StoreLocacaoRequest;
use App\Http\Requests\UpdateLocacaoRequest;

class LocacaoController extends Controller
{
    protected $locacao;

    public function __construct(Locacao $locacao){

        $this->locacao = $locacao;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locacao = $this->locacao->all();
        return $locacao;

    //  return Locacao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocacaoRequest $request)
    {
        $locacao = Locacao::create($request->all());
        return $locacao;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function show(Locacao $locacao)
    {
        return $locacao;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocacaoRequest  $request
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocacaoRequest $request, Locacao $locacao)
    {
        $locacao->update($request->all());
        return $locacao;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locacao $locacao)
    {
        $locacao->delete();
    }
}
