<?php
class Controller{
    public function modal($modal){
        require_once '../app/Models/'.$model.'.php';
        return new $modal;
    }

    public function view($view, $dados =[]){
        $arquivos = ('../app/Views/'.$view.'.php');
        if(file_exists($arquivos)){
            require_once $arquivos;
        }else{
            die('o arquivo de view nao existe puto ');
        }
    }

}