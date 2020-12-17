<?php
    namespace App\Controllers;

    use App\Request;
    use App\Controller;
    use App\Session;

    final class IndexController extends Controller{
        public function __construct(Request $request,Session $session){
            parent::__construct($request,$session);
        }

        public function index(){
            $db=$this->getDB();
            //$data = $db->selectAll('users');
            //uso de funciones declaradas en el modelo 
            //y definidas en la clase abstracta
            //$stmt=$this->query($db,"SELECT * FROM users",null);
            //$result=$this->row_extract();
            $dataview=['title'=>'Todo'];
            $this->render($dataview);
        }

    }