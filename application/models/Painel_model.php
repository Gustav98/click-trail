<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Painel_model extends CI_MODEL {
    
	function __construct() {
    	parent::__construct();
	}
	
	public function getUsuario($id){
	    // Pega as informações do Usuário
	    $usuario = $this->db->get_where('TB_Usuarios', array('cd_Usuario' => $id))->row();
	   
	    return $usuario;
	}
	
	public function cadastrar($dados){
        // Insere os dados na TB_Usuarios
        $query = $this->db->query("INSERT INTO TB_Usuarios 
        							VALUES ('','".$dados['nome']."','".$dados['sbnome']."','".$dados['email']."','".$dados['senha1']."',1)");
        							
        // Retorna falha ou sucesso
        if($query){
            $this->session->set_flashdata('sucesCadastro','Cadastrado com Sucesso!');
        }
        else{
            $this->session->set_flashdata('falhaCadastro','Falha ao Cadastrar Usuário.');
        }
    }
    
    // Cadastra o site no banco de dados.
    public function cadastrarSite($site, $idUsuario){
        
        // Insere os dados na TB_Sites
        $query = $this->db->query("INSERT INTO TB_Sites 
        							VALUES ('','".$site['dominio']."','".$idUsuario."')");
        							
        // Retorna falha ou sucesso
        if($query){
            $this->session->set_flashdata('sucesCadastro','Cadastrado com Sucesso!');
        }
        else{
            $this->session->set_flashdata('falhaCadastro','Falha ao Cadastrar Site.');
        }
        
    }
    
    public function getSites($id){
        // Retorna todos os sites do usuário logado pelo seu ID.
        $sites = $this->db->get_where('TB_Sites', array('cd_Usuario' => $id))->result();
        
        return $sites;
    }
    
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ID.
        $site = $this->db->get_where('TB_Sites', array('cd_Site' => $id))->row();
       
        return $site;
	}
    
}

