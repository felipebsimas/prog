<?php

class Usuario{

    protected $nomeUsuario;
    
    public function setUsuario($nome){
        $this -> nomeUsuario = $nome; 
    }
    public function getUsuario(){
        return $this -> nomeUsuario;    
    }

}

interface Autor{

    public function setAutorPrivilegios($arrayAutor);

    public function getAutorPrivilegios();

}   

interface Editor{

    public function setPrivilegiosEditor($arrayEditor);

    public function getPrivilegiosEditor();
}

class AutorEditor extends Usuario implements Autor, Editor{
    
    public function setAutorPrivilegios($arrayAutor){
        $this -> arrayAutor = $arrayPrivilegiosAutor;
    }
    public function getAutorPrivilegios(){
        return $this -> $arrayPrivilegiosAutor;
    }

    public function setEditorPrivilegios($arrayEditor){
        $this -> arrayEditor = $arrayPrivilegiosEditor;
    }
    public function getEditorPrivilegios(){
        return $this -> $arrayPrivilegiosEditor;
    }
        
}

    $usuario1 = new AutorEditor("Mefistófeles");
    $arrayPrivilegiosAutor = array('Escrever textos', 'Acrescentar pontuação');
    $arrayPrivilegiosEditor = array('Editar Texto', 'Editar Pontuação');
