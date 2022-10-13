<?php

class Paginas  extends Controller{

    public function index(){      
        $this->view('paginas/home',['titulo' => 'Pagina inicial1']);
    }

    public function sobre(){
        $dados =[ 'titu' => 'Pagina Sobre'];

        $this->view('paginas/sobre', ['sobre' => 'Pagina inicial1']);
  
    }
}