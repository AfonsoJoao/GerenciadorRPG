<?php

class ModelPersonagem extends CI_Model {
    public function gravarPersonagem($personagem) {
        return $this->db->insert('personagem', $personagem);
    }

    public function listarPersonagens() {
        $resultado = $this->db->get('personagem');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
}