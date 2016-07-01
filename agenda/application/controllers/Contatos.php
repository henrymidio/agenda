<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {

        public function __construct()
	{
                parent::__construct();
                $this->load->helper('form');
                $this->load->helper('array');
		$this->load->model('crud_model', 'crud');
	}	

	public function index()
	{
            if($this->input->post('nome')){
              $dados = elements(array('nome', 'telefone', 'endereco', 'email'), $this->input->post());
              $this->crud->insert_contato($dados);
            } 

            if($this->input->post('compromisso')){
              //Formata data para inserção
              $arr   = $this->input->post();
              $arr['data'] = str_replace('/', '-', $arr['data']);
              $data  = strtotime($arr['data']);
              $data  = date('Y/m/d H:i:s', $data);
              $arr['data'] = $data;

              $dados = elements(array('data', 'compromisso'), $arr);
              $this->crud->insert_compromisso($dados);
            } 

            $dados = array('contatos' => $this->crud->get_contatos()->result(), 'compromissos' => $this->crud->get_compromissos()->result(), 'num_compromissos' => $this->crud->get_compromissos()->num_rows());
	    $this->load->view('Home', $dados);
	}

       public function check_compromissos()
	{
           if($this->input->post('data')){
      
            $data = $this->input->post('data');
            $this->db->where('data', $data);
            
            $query = $this->db->get('compromissos');
  
            if($query->num_rows() > 0){    
              echo json_encode($query->result());        
            }
           } 
           else {
            echo FALSE;
           }
	}
}