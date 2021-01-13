<?php
namespace app\controllers;
use app\core\Controller;
use app\util\UtilService;

class HomeController extends Controller{  
    
   public function __construct()
   {
      $this->usuario = UtilService::getUsuario();
      if(!$this->usuario){
         $this->redirect(URL_BASE ."login");
         exit;
      }
   }
   
   public function index(){       
       $dados["view"]       = "home";
	   $this->load("template", $dados);
   } 

   
}
