<?php
defined('BASEPATH') or exit('No direct script acces allowed');


class Proses extends CI_Model
{
    public function Insert($table, $data)
    {
        $res = $this->db->insert($table, $data);
        return $res;
    }
    public function Update($table, $data, $where)
    {
        $res = $this->db->update($table, $data, $where);
        return $res;
    }

    public function Prioritas()
    {
        $this->load->view('sistem');
        $kriteria = array(
            'jenis' => $this->input->post('jenis'),
            'server' => $this->input->post('server'),
            'ssd' => $this->input->post('ssd'),
            'ram' => $this->input->post('ram'),
            'cpu' => $this->input->post('cpu'),
            'uptime' => $this->input->post('uptime'),
            'keamanan' => $this->input->post('keamanan'),
            'bandwidth' => $this->input->post('bandwidth'),
            'inodes' => $this->input->post('inodes'),
            'support' => $this->input->post('support'),
            'fitur' => $this->input->post('fitur'),
            'garansi' => $this->input->post('garansi'),
            'harga' => $this->input->post('harga')
        );

        $total = 0;
        foreach ($kriteria as $bobot) {
            $total += $bobot;
        }

        $prioritas = array(
            'jenis' => $kriteria['jenis'] / $total,
            'server' => $kriteria['server'] / $total,
            'ssd' => $kriteria['ssd'] / $total,
            'ram' => $kriteria['ram'] / $total,
            'cpu' => $kriteria['cpu'] / $total,
            'uptime' => $kriteria['uptime'] / $total,
            'keamanan' => $kriteria['keamanan'] / $total,
            'bandwidth' => $kriteria['bandwidth'] / $total,
            'inodes' => $kriteria['inodes'] / $total,
            'support' => $kriteria['support'] / $total,
            'fitur' => $kriteria['fitur'] / $total,
            'garansi' => $kriteria['garansi'] / $total,
            'harga' => $kriteria['harga'] / $total
        );

        return ($prioritas);
    }
}
