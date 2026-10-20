<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index() //A função index() é controlado pela view e lista todas as informações da tabela 
    //de categorias

    {

        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
        //
    }

    //controlado via View
    public function create()

    //create é uma função responsável por criar novos itens na view

    {

        return view('categorias.categoria.create');
        
    }

    
    public function show(Categoria $categorias) //controlado via view
    {
        //A função show exibe os detalhes/informações do item ou objeto referenciado pelo id

        return view('categorias.categoria.show', compact('categorias'));


    }

   
    public function edit(Categoria $categorias) //controlado via view
    {
        //O método edit atua em uma página responsável pela edição de um item/objeto (atua como uma espécie de
        //formulário )

        return view('categorias.categoria.edit', compact('categorias'));

    }

    private function validarCriterioDeAutencticacao(Request $request) {

        return $request::validate([

            'nome' => ['required', 'string', 'max:100'],
            'descricao' => ['required', 'string', 'max:1000']

        ], [

            'nome.required' => 'Informe o nome da categoria',
            'nome.string' => 'Informe a descrição da categoria',
            'nome.max' => 'O nome deve ter no máximo 100 caracteres',
            'descricao.string' => 'A descrição deve ser um texto',
            'descricao.max' => 'A descricao deve ter no máximo 1000 caracteres'

        ]);

    }

    public function store(Request $request)
    {

        Categorias::create($this->validarCriterioDeAutencticacao($request));

        return redirect()->route('categorias.index')
            ->with('Sucesso!', 'Categoria cadastrada com sucesso');

        // Armazena as informações do formulário do CREATE

    }

    public function update(Request $request, Categoria $categorias) //Atualiza os registros/informações do 
    //objeto repassado via id pelo método edit
    {

        $categorias->update($this->validarCriterioDeAutencticacao($request));

        return redirect()->route('categorias.index')
            ->with('Sucesso', 'Categoria atualizada com sucesso');
     
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Categoria $categorias, Request $request)
    {

        $categorias->delete();

        return redirect()->route('categorias.index')
            ->with('Sucesso!', 'Categoria removida com sucesso');

        //remove todas os dados do objeto repassado via id pelos métodos edit e update

    }



    public function form(Request $request, Categoria $categorias)
    {

        $categorias->form();

        return redirect()->route('categorias.index')
            ->with('Sucesso', 'Criado Formulário de categorias');

    }

}

?>