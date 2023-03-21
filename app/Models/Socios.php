<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Socios
// INSERÇÃO DE SÓCIO
// DB::insert("INSERT INTO socios values (0, ?, ?, ?, NOW(), NOW())", ['Gabriel', '333', 'email3@email.com']);

// UPDATE SÓCIO
// DB::update("UPDATE socios SET nome = ? WHERE id = ?", ['Luís Pedro', 2]);

// DELETE SÓCIO
// DB::delete("DELETE FROM socios WHERE id = ?", [3]);

// LEITURA DOS SÓCIOS DA BASE DE DADOS
// $resultado = DB::select("SELECT COUNT(*) Total FROM socios");
// $resultado = DB::select("SELECT * FROM socios");

{
    public function getSocios()
    {
        return DB::select("SELECT * FROM socios");
    }

    public function deleteAll()
    {
        return DB::delete("DELETE FROM socios");
    }
}
