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
    // Fungsi untuk menentukan nilai prioritas
    public function Prioritas()
    {

        $kriteria = array(
            'jenis' => $this->input->post('jenis'),
            'server' => $this->input->post('server'),
            'ssd' => $this->input->post('ssd'),
            'ram' => $this->input->post('ram'),
            'cpu' => $this->input->post('cpu'),
            'uptime' => $this->input->post('uptime'),
            'keamanan' => $this->input->post('keamanan'),
            'bandwidth' => $this->input->post('bandwidth'),
            'inode' => $this->input->post('inode'),
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
            'inode' => $kriteria['inode'] / $total,
            'support' => $kriteria['support'] / $total,
            'fitur' => $kriteria['fitur'] / $total,
            'garansi' => $kriteria['garansi'] / $total,
            'harga' => $kriteria['harga'] / $total
        );

        return ($prioritas);
    }
    // Fungsi untuk menentukan nilai Normalisasi


    // Menentukan nilai Normlisasi Terbobot
    public function Terbobot()
    {

        $normalisasi = $this->db->get('normalisasi')->result_array();
        $prioritas = $this->db->get('prioritas')->result_array();

        $bobot = array(
            'jenis' => 0,
            'server' => 0,
            'ssd' => 0,
            'ram' => 0,
            'cpu' => 0,
            'uptime' => 0,
            'keamanan' => 0,
            'bandwidth' => 0,
            'inode' => 0,
            'support' => 0,
            'fitur' => 0,
            'garansi' => 0,
            'harga' => 0
        );

        // Setiap kriteria pada setiap data hosting dikalikan dengan nilai prioritas / terbobot
        foreach ($normalisasi as $normal) {
            $bobot = array(
                'id'    => $normal['id'],
                'jenis' => $normal['jenis'] * $prioritas[0]['jenis'],
                'server' => $normal['server'] * $prioritas[0]['server'],
                'ssd' => $normal['ssd'] * $prioritas[0]['ssd'],
                'ram' => $normal['ram'] * $prioritas[0]['ram'],
                'cpu' => $normal['cpu'] * $prioritas[0]['cpu'],
                'uptime' => $normal['uptime'] * $prioritas[0]['uptime'],
                'keamanan' => $normal['keamanan'] * $prioritas[0]['keamanan'],
                'bandwidth' => $normal['bandwidth'] * $prioritas[0]['bandwidth'],
                'inode' => $normal['inode'] * $prioritas[0]['inode'],
                'support' => $normal['support'] * $prioritas[0]['support'],
                'fitur' => $normal['fitur'] * $prioritas[0]['fitur'],
                'garansi' => $normal['garansi'] * $prioritas[0]['garansi'],
                'harga' => $normal['harga'] * $prioritas[0]['harga']
            );
            $res = $this->db->update('terbobot', $bobot, array('id' => $bobot['id']));
        }
        return (0);
    }

    public function Preferensi()
    {
        $terbobot = $this->db->get('terbobot')->result_array();

        foreach ($terbobot as $data) {
            $id = $data['id'];
            $nilai = ($data['jenis'] +
                $data['server'] +
                $data['ssd'] +
                $data['ram'] +
                $data['cpu'] +
                $data['uptime'] +
                $data['keamanan'] +
                $data['bandwidth'] +
                $data['inode'] +
                $data['support'] +
                $data['fitur'] +
                $data['garansi']) -
                $data['harga'];
            $preferensi = array('id' => $id, 'nilai' => $nilai);
            $res = $this->db->update('preferensi', $preferensi, array('id' => $id));;
        }
        return (0);
    }
}
