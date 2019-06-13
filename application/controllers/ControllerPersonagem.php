<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPersonagem extends CI_Controller {

	public function gravarPersonagem() {
		$this->load->Model('modelPersonagem', '', TRUE);
		$this->load->Model('modelCampanha', '', TRUE);
		$personagem = array(
			'nomePersonagem' => $this->input->post('nomePersonagem'),
			'classe' => $this->input->post('classe'),
			'nivel' => $this->input->post('nivel'),
			'raça' => $this->input->post('raça'),
			'alinhamento' => $this->input->post('alinhamento'),
			'idCampanha' => $this->input->post('idCampanha'),
			'xp' => $this->input->post('xp')
		);

		$this->modelPersonagem->gravarPersonagem($personagem);
		$dados['campanha'] = $this->modelCampanha->listarCampanhas();
		$dados['personagem'] = $this->modelPersonagem->listarPersonagens();
		$this->load->view('estrutura/cabecalhoHome');
		$this->load->view('corpo/corpoCampanha', $dados);
		$this->load->view('estrutura/rodapeHome');
	}

}