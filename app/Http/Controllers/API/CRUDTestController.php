<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRUDTestController extends Controller
{
    public function list(Request $request) {
        $fCodigo = $request->input('codigo', 0);
        $fNome = $request->input('nome', '');
        $fSituacao = $request->input('situacao', '');
        $pagina = $request->query('page');
        $qtdTotal = \App\Models\Cadastro::qtdTotalCadastros($fCodigo, $fNome, $fSituacao);
        $page = $request->input('pagina', $pagina);
        $limit = $request->input('limite', 5);
        $total_pages = (int) ceil( $qtdTotal / $limit );
        if ( $page <= 1 ) $page = 1;
        else if ( $page > $total_pages ) $page = $total_pages;

        $start = ($page - 1) * $limit;
        $list = \App\Models\Cadastro::listarCadastros($start, $limit, $fCodigo, $fNome, $fSituacao);

        /*$resultado = response()->json([
            'page' => $page,
            'limit' => $limit,
            'total_entries' => $qtdTotal,
            'total_pages' => $total_pages,
            'message' => 'Dados obtidos com sucesso!', 
            'data' => $list
        ]);*/

        $resultado = [
            'page' => $page,
            'limit' => $limit,
            'total_entries' => $qtdTotal,
            'total_pages' => $total_pages,
            'message' => 'Dados obtidos com sucesso!', 
            'data' => $list
        ];
       
       return view('inicial',compact('resultado'));
    }

    public function add(Request $request) {
        $idUsuario = 1;
        $nome = $request->input('nome');
        
        if ( empty($nome) )
            return response("Parâmetros Inválidos!", 401);
        
        $id = \App\Models\Cadastro::adicionarCadastro($nome, $idUsuario);
        if ( !$id ) return response("Erro salvando dados no banco!", 500);

        return response()->json([
            'id' => $id,
            'message' => 'Dados salvos com sucesso!'
        ]);
    }
}
