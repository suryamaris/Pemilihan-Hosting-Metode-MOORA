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
    public function Normalisasi()
    {
        $nilai = $this->db->get('nilai')->result_array();

        // Tentukan alternatif pangkat 2
        $total = array(
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
        foreach ($nilai as $data) {
            $total['jenis'] += pow($data['jenis'], 2);
            $total['server'] += pow($data['server'], 2);
            $total['ssd'] += pow($data['ssd'], 2);
            $total['ram'] += pow($data['ram'], 2);
            $total['cpu'] += pow($data['cpu'], 2);
            $total['uptime'] += pow($data['uptime'], 2);
            $total['keamanan'] += pow($data['keamanan'], 2);
            $total['bandwidth'] += pow($data['bandwidth'], 2);
            $total['inode'] += pow($data['inode'], 2);
            $total['support'] += pow($data['support'], 2);
            $total['fitur'] += pow($data['fitur'], 2);
            $total['garansi'] += pow($data['garansi'], 2);
            $total['harga'] += pow($data['harga'], 2);
        }


        // Tentukan nilai normalisasi kriteria = alternatif / akar dari total alternatif pangkat 2
        foreach ($nilai as $pangkat) {
            $normal = array(
                'id' => $pangkat['id'],
                'jenis' => $pangkat['jenis'] / sqrt($total['jenis']),
                'server' => $pangkat['server'] / sqrt($total['server']),
                'ssd' => $pangkat['ssd'] / sqrt($total['ssd']),
                'ram' => $pangkat['ram'] / sqrt($total['ram']),
                'cpu' => $pangkat['cpu'] / sqrt($total['cpu']),
                'uptime' => $pangkat['uptime'] / sqrt($total['uptime']),
                'keamanan' => $pangkat['keamanan'] / sqrt($total['keamanan']),
                'bandwidth' => $pangkat['bandwidth'] / sqrt($total['bandwidth']),
                'inode' => $pangkat['inode'] / sqrt($total['inode']),
                'support' => $pangkat['support'] / sqrt($total['support']),
                'fitur' => $pangkat['fitur'] / sqrt($total['fitur']),
                'garansi' => $pangkat['garansi'] / sqrt($total['garansi']),
                'harga' => $pangkat['harga'] / sqrt($total['harga']),
            );

            // $res = $this->db->Insert('normalisasi', $normal);
            $res = $this->db->update('normalisasi', $normal, array('id' => $pangkat['id']));
        }
        return (0);
    }

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
            $nilai = ($data['jenis'] + $data['server'] + $data['ssd'] + $data['ram'] + $data['cpu'] + $data['uptime'] + $data['keamanan'] + $data['bandwidth'] + $data['inode'] + $data['support'] + $data['fitur'] + $data['garansi']) - $data['harga'];
            $preferensi = array('id' => $id, 'nilai' => $nilai);
            $res = $this->db->update('preferensi', $preferensi, array('id' => $id));;
        }
        return (0);
    }
}
