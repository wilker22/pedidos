<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\ClienteDao;
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
    
}