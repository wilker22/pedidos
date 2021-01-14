<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\ClienteDao;
use app\models\dao\PedidoDao;
use app\models\validacao\PedidoValidacao;
use app\util\UtilService;

class PedidoService
{
   
    public static function getPedidoNaoFinalizado($id_cliente)
    {
        $dao = new PedidoDao();
        return $dao->getPedidoNaoFinalizado($id_cliente);
    }

    public static function getPedido($id_pedido)
    {
        $dao = new PedidoDao();
        return $dao->getPedido($id_pedido);
    }
    
}