<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\ItemService;
use app\models\service\pedidoService;
use app\util\UtilService;

class PedidoController extends Controller{

    private $tabela = "pedido";
    private $campo = "id_pedido";

    public function __construct()
   {
      $this->usuario = UtilService::getUsuario();
      if(!$this->usuario){
         $this->redirect(URL_BASE ."login");
         exit;
        
      }
      
   }
   
    public function index(){
       $dados["lista"] = Service::lista($this->tabela);
       $dados["view"]  = "pedido/Index";
       $this->load("template", $dados);
    }
    
    public function create(){
        $id_cliente = $this->usuario->id_cliente;
        $pedido = pedidoService::getPedidoNaoFinalizado($this->usuario->id_cliente);
        if(!$pedido){
            $id_pedido = Service::inserir(["id_cliente" => $id_cliente, "data" => hoje(), "hora"=>agora()], "pedido");
            $pedido = PedidoService::getPedido($id_pedido);
        }
        $dados["pedido"] = $pedido;
        $dados["itens"] = ItemService::listaPorPedido($pedido->id_pedido);
        $dados["view"] = "pedido/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id)
    {
        $pedido = Service::get($this->tabela, $this->campo, $id);
        if(!$pedido){
            $this->redirect(URL_BASE. "pedido");
        }
        $dados ["pedido"] = $pedido;
        $dados["view"]      = "pedido/Create";
        $this->load("template", $dados);
    }
    
    public function salvar()
    {
        $pedido = new \stdClass();
        $pedido->id_pedido = $_POST["id_pedido"];
        $pedido->pedido = $_POST["pedido"];
        $pedido->endereco = $_POST["endereco"];
        $pedido->complemento = $_POST["complemento"];
        $pedido->numero = $_POST["numero"];
        $pedido->bairro = $_POST["bairro"];
        $pedido->cidade = $_POST["cidade"];
        $pedido->uf = $_POST["uf"];
        $pedido->cep = $_POST["cep"];
        $pedido->celular = $_POST["celular"];
        $pedido->cpf = $_POST["cpf"];
        $pedido->sexo = $_POST["sexo"];
        $pedido->email = $_POST["email"];
        $pedido->senha = $_POST["senha"];
        $pedido->data_cadastro = date("Y-m-d");

        Flash::setForm($pedido);

        if(pedidoService::salvar($pedido, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."pedido");
        }else{
            if(!isset($pedido->id_pedido)){
                $this->redirect(URL_BASE."pedido/create");
            }else{
                $this->redirect(URL_BASE."pedido/edit/".$pedido->id_pedido);
            }

        }

    }
    
    public function excluir($id)
    {
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."pedido");
    }

    public function filtro ()
    {
        $campo = $_GET["campo"];
        $valor = $_GET["valor"];

        $dados["lista"] = Service::getLike($this->tabela, $campo, $valor, true);
        $dados["view"] = "pedido/index";
        $this->load("template", $dados);
    }
}

