<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\Service;

class ProdutoController extends Controller{  

    public function buscar ($q)
    {
        $lista =  Service::getLike("produto", "descricao", $q, true);

        echo json_encode($lista);
    }
}