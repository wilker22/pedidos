<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\ClienteDao;
use app\models\dao\ItemDao;
use app\models\dao\PedidoDao;
use app\models\validacao\ItemValidacao;
use app\models\validacao\PedidoValidacao;
use app\util\UtilService;

class ItemService
{
    public static function listaPorPedido($id_pedido)
    {
        $dao = new ItemDao();
        return $dao->listaPorPedido($id_pedido);
    }


    public static function salvar($item, $campo, $tabela)
    {
        $validacao = ItemValidacao::salvar($item);

        return Service::salvar($item, $campo, $validacao->listaErros(), $tabela);
    }

    
}