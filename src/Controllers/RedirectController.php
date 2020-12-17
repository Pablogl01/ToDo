<?php

    namespace App\Controllers;

    use App\Request;
    use App\Controller;
    use App\Model;
    use App\View;
    use App\Session;

    final class RedirectController extends Controller implements Model,View{

        public function __construct(Request $request,Session $session){
            parent::__construct($request,$session);
        }
    
        function task(){
            $db=$this->getDB();
            $dataview=['title'=>'Listas'];
            $this->render($dataview,"task");
        }

        function editI(){
            $it = filter_input(INPUT_POST,"idIT");
            //setcookie("idIT",$it);
            $_SESSION["p"]=$it;
            $db=$this->getDB();
            $dataview=['title'=>'editLista'];
            $this->render($dataview,"editLista");
        }

        function verItems(){
            //etcookie("tab","");
            //die;
            $tab = filter_input(INPUT_POST,"id");
            $_SESSION["tab2"]=$tab;
            $db=$this->getDB();
            $dataview=['title'=>'verItems'];
            $this->render($dataview,"verItems");
        }
        function home(){
            
            $dataview=['title'=>'login_s'];
            $this->render($dataview,"login_s");
        }
    
    }

