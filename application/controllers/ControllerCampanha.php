<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerCampanha extends CI_Controller {

    public function criarCampanha() {
        $this->load->Model('modelCampanha', '', TRUE);
        $campanha = array(
            'nomeCampanha' => $this->input->post('nomeCampanha'),
            'descricaoCampanha' => $this->input->post('descricaoCampanha'),
            'tipoCampanha' => $this->input->post('tipoCampanha')
        );

        if ($this->modelCampanha->criarCampanha($campanha)) {
            $dados['situacao'] = "Registro gravado com sucesso";
        }
        $dados['campanha'] = $this->modelCampanha->listarCampanhas();
        $this->load->view('estrutura/cabecalhoHome');
        $this->load->view('corpo/home', $dados);
        $this->load->view('estrutura/rodapeHome');
    }

}
