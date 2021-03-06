<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cadastro extends Model
{
    public static function qtdTotalCadastros($codigo=0, $nome='', $situacao='') {
        $whereFilter = 'WHERE 1 = 1';
        if ( $codigo > 0 ) $whereFilter .= " AND codigo_cadastro = {$codigo}";
        if ( !empty($nome) ) $whereFilter .= ' AND nome_cadastro = "' . $nome . '"';
        if ( !empty($situacao) ) $whereFilter .= ' AND situacao = "' . $situacao . '"';

        return DB::select("CALL fc_cadastro_qtd_total(' {$whereFilter}')")[0]->QtdTotal;
    }

    public static function listarCadastros($inicio, $top, $codigo=0, $nome='', $situacao='') {
        return DB::select("CALL sp_cadastro_lista({$codigo}, '{$nome}', '{$situacao}', {$inicio}, {$top})",[]);
    }

    public static function obterCadastro($codigo) {
        $rows = static::listarCadastros(0, 1, $codigo);
        return ( count($rows) <= 0 ) ? null : $rows[0];
    }

    public static function adicionarCadastro($nome, $idUsuario) {
        $row = DB::select("CALL sp_cadastro_inclusao('{$nome}', {$idUsuario})", [])[0];
        $row = (array) $row;
        $keys = array_keys($row);
        return ( is_numeric($row[ $keys[0] ]) ) ? $row[ $keys[0] ] : null;
    }

    public static function alterarCadastro($codigo, $idUsuario, $nome='', $situacao='') {
        $row = DB::select("CALL sp_cadastro_alteracao({$codigo}, '{$nome}', '{$situacao}', {$idUsuario})", []);
        return ( count($row) > 0 ) ? false : true;
    }
}
