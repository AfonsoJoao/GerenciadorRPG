<?php

class ModelCampanha extends CI_Model {

    public function criarCampanha($campanha) {
        return $this->db->insert('campanha', $campanha);
    }
    
    public function listarCampanhas() {
        $resultado = $this->db->get('campanha');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function abrirCampanha($id) {
        $resultado = $this->db->get_where('campanha', array('idCampanha' => $id));
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

}
