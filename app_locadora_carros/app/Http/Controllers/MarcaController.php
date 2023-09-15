<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;

class MarcaController extends Controller
{
    protected $marca;

    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $marcas = $this->marca->all();
        return $marcas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarcaRequest $request)
    {

        $imagem = $request->file('imagem');
        // $imagem->store('imagens/x/y/z','local');
        $imagem_urn = $imagem->store('imagens','public');

        $marca = $this->marca->create([
            'nome' => $request->nome,
            'imagem' => $imagem_urn
        ]);

        return response()->json(['status' => 'criado com sucesso'], 201);
        return $marca;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = $this->marca->find($id);
        if($marca === null) {
            return response()->json(['erro' => 'Recurso pesquisado não existe'], 404);
        }
        return response()->json($marca , 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarcaRequest  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarcaRequest $request,$id)
    {
        $marca = $this->marca->find($id);
        if($marca === null) {
            return response()->json(['erro' => 'Impossivel realizar a atualização. O recurso solicitado não atualizado'], 404);
        }

        if($request->file('imagem')) {
            Storage::disk('public')->delete($marca->imagem);
        }

        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagem','public');

        $marca->update([
            'nome' => $request->nome,
            'imagem' => $imagem_urn
        ]);

        // $marca->update($request->all());

        return response()->json($marca , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = $this->marca->find($id);
        if($marca === null){
             return response()->json(['erro' => 'Impossivel realizar a exclusão. O recurso solicitado não atualizado'], 404);
        }
        Storage::disk('public')->delete($marca->imagem);

        $marca->delete();

        return response()->json(['msg' => 'O registro foi apagado'], 200);
    }
}
