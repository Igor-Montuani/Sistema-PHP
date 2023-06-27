<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutosModel;

class Produtos extends BaseController
{
    public function listar()
    {
        $produto_model = new ProdutosModel();

        $produtos = $produto_model
                            ->findAll();

        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('produtos/listar', $data);
        echo View('templates/footer');
    }
}
