<?php

    class Masjid_model extends CI_model {

        public function getAllMasjid() {
            return $query = $this->db->get('kas_masjid')->result_array();
        }

        public function countAllMasjid() {
            return $this->db->get('kas_masjid')->num_rows();
        }

        public function createDataMasjid() {
            $data = array(
                'tanggal' => $this->input->post('tanggal', true),
                'pemasukan' => $this->input->post('pemasukan', true),
                'pengeluaran' => $this->input->post('pengeluaran', true),
                'total' => $this->input->post('total', true)
            );
        
            $this->db->insert('kas_masjid', $data);
        }

        public function deleteDataMasjid($id) {
            $this->db->where('id', $id);
            $this->db->delete('kas_masjid');
        }

        public function getMasjidById($id) {
            return $this->db->get_where('kas_masjid', ['id' => $id])->row_array();
        }

        public function updateDataMasjid() {
            $data = array(
                'tanggal' => $this->input->post('tanggal', true),
                'pemasukan' => $this->input->post('pemasukan', true),
                'pengeluaran' => $this->input->post('pengeluaran', true),
                'total' => $this->input->post('total', true)
            );
        
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('kas_masjid', $data);
        }

        public function searchDataMasjid() {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('tanggal', $keyword);
            $this->db->or_like('pengeluaran', $keyword);
            $this->db->or_like('pemasukan', $keyword);
            $this->db->or_like('total', $keyword);
            return $this->db->get('kas_masjid')->result_array();
        } 
    }
?>