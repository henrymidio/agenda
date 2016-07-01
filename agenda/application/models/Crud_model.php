<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	
	public function get_contatos()
	{
		return $this->db->get('contatos');
	}

        public function get_compromissos()
	{
		return $this->db->order_by('id', 'DESC')->get('compromissos');
	}

        public function insert_contato($dados = NULL)
	{
                if($dados != NULL){
		   $this->db->insert('contatos', $dados);
                }
	}

        public function insert_compromisso($dados = NULL)
	{
                if($dados != NULL){
		   $this->db->insert('compromissos', $dados);
                }
	}
   
        
}