<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\ClienteDao;
use app\models\dao\PedidoDao;
use app\models\validacao\PedidoValidacao;
use app\util\UtilService;

class PedidoService
{
    public static function salvar($objeto, $campo, $tabela)
    {
        global $config_upload;
		
        $validacao = PedidoValidacao::salvar($objeto);

        if($validacao->qtdeErro() <=0){            
            /// fazendo o upload do arquivo
            if($_FILES["arquivo"]["name"]){
                $objeto->foto = UtilService::upload("arquivo", $config_upload);
                if(!$objeto->foto){
                  return false;  
                }
            }
        }     
        return Service::salvar($objeto, $campo, $validacao->listaErros(), $tabela);
    }

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