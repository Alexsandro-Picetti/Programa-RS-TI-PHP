<?php

class Categorias {
    public $nome;
    public $categoria;
    public $cor;
    public $preco;
    public $descricao;
    public function getCategorias():array {
        $sqlQuery = "SELECT * FROM categorias";
    
        try {
            return Database::query($sqlQuery);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}