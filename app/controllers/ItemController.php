<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\itemService;
use app\util\UtilService;

class ItemController extends Controller{

    private $tabela = "item";
    private $campo = "id_item";

        
    public function salvar()
    {
        $item = new \stdClass();
        $item->id_item = null;
        $item->id_produto = $_POST["id_produto"];
        $item->id_pedido = $_POST["id_pedido"];
        $item->valor = $_POST["valor"];
        $item->qtde = $_POST["qtde"];
        $item->subtotal = $item->valor * $item->qtde;
        Flash::setForm($item);
        itemService::salvar($item, $this->campo, $this->tabela);
        $lista = itemService::listaPorPedido($item->id_pedido);

        echo json_encode($lista); 
         
    }
    
    public function excluir($id)
    {
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."pedido/create");
    }

    public function filtro ()
    {
        $campo = $_GET["campo"];
        $valor = $_GET["valor"];

        $dados["lista"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "item/index";
        $this->load("template", $dados);
    }
}

