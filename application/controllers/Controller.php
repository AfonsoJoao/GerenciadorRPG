<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

    public function index() {
        $this->load->model("modelCampanha", '', TRUE);
        $dados['campanha'] = $this->modelCampanha->listarCampanhas();
        $this->load->view('estrutura/cabecalhoHome');
        $this->load->view('corpo/home', $dados);
        $this->load->view('estrutura/rodapeHome');
    }

}
