<?php 
    
    require_once APPPATH."models/Serializable.php";
    require_once APPPATH."models/Nameable.php";
    
    class Site_model implements Serializablee, Nameable {
    
        private $id, $nome, $dominio, $usuario;
        
        public function __construct($id, $nome, $dominio, $usuario){
            $this->id = $id;
            $this->nome = $nome;
            $this->dominio = $dominio;
            $this->usuario = $usuario;
        }
        
        // GETS
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getDominio(){
            return $this->dominio;
        }
        
        public function toArray(){
            $aux = array();
            $aux["cd_site"] = $this->id;
            $aux["nm_site"] = $this->nome;
            $aux["ds_dominio"] = $this->dominio;
            $aux["cd_usuario"] = $this->usuario;
            return $aux;
        }
        
        public function getClassName(){
            return "sites";
        }
        
    
    }

