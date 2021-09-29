<?php
defined('BASEPATH') or exit('No direct script acces allowed');


class Data_model extends CI_Model
{

	public function getHosting($table)
	{
		$res = $this->db->get($table);
		return $res->result_array();
	}

	public function getWhere($table, $data)
	{
		$res = $this->db->get_where($table, $data);
		return $res->result_array();
	}

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

	public function Delete($table, $where)
	{
		$res = $this->db->delete($table, $where);
		return $res;
	}

	public function getHostingLimit($limit, $start)
	{
		return $this->db->get('list', $limit, $start)->result_array();
	}
	public function countAllHosting()
	{
		return $this->db->get('list')->num_rows();
	}
	public function Input()
	{
		$this->load->view('form_add');
		$this->load->view('form_edit');
		$fitur = array('0' => '');
		if ($this->input->post('wordpress') == 'ya')
			$fitur = array('wordpress' => 'Paket Wordpress');
		elseif ($this->input->post('wordpress') == 'optimal')
			$fitur = array('wordpress' => 'Wordpress Optimasi');
		if ($this->input->post('freessl') == 'ya')
			$fitur += array('freessl' => 'Free SSL');
		if ($this->input->post('domain') == 'ya')
			$fitur += array('domain' => 'Free Domain');
		if ($this->input->post('litespeed') == 'ya')
			$fitur += array('litespeed' => 'Litespeed');
		if ($this->input->post('auto') != 'tidak')
			$fitur += array('auto' => 'Backup ' . $this->input->post('auto'));
		if ($this->input->post('email') == 'batas1')
			$fitur += array('email' => $this->input->post('batas1') . ' Email');
		elseif ($this->input->post('email') != 'tidak')
			$fitur += array('email' => $this->input->post('email') . ' Email');
		if ($this->input->post('add') == 'batas')
			$fitur += array('add' => $this->input->post('batas') . ' Addon Domain');
		elseif ($this->input->post('add') != 'tidak')
			$fitur += array('add' =>  $this->input->post('add') . ' Addon Domain');
		if ($this->input->post('sub') != 'tidak')
			$fitur += array('sub' => $this->input->post('sub') . ' Sub Domain');
		$myFitur = implode(', ', $fitur);

		$bandwith = $this->input->post('bandwidth');
		if ($bandwith != 'Unlimited')
			$bandwith = $bandwith;

		$ssd = $this->input->post('ssd');
		if ($ssd == '0')
			$ssd = 'Unlimited';

		$inode = $this->input->post('inode');
		if ($inode == '0')
			$inode = 'Unlimited';

		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'penyedia' => $this->input->post('penyedia'),
			'jenis' => $this->input->post('jenis'),
			'server' => $this->input->post('server'),
			'uptime' => $this->input->post('uptime'),
			'ssd' => $ssd, 'ram' => $this->input->post('ram'),
			'cpu' => $this->input->post('cpu'),
			'bandwidth' => $bandwith,
			'inode' => $inode,
			'support' => $this->input->post('support'),
			'fitur' => $myFitur,
			'garansi' => $this->input->post('garansi'),
			'harga' => $this->input->post('harga'),
			'keamanan' => $this->input->post('keamanan')
		);
		return $data;
	}

	public function inputNilai($fitur)
	{
		$ssd = $this->input->post('ssd');
		if ($ssd == 0)
			$ssd = 10;
		$inode = $this->input->post('inode');
		if ($inode == 0)
			$inode = 2000000;
		$bandwith = $this->input->post('bandwith');
		if ($bandwith == 0)
			$bandwith = 1500;
		$support = $this->input->post('support');
		if ($support == 'Fast Support 24/7')
			$support = 5;
		else
			$support = 3;

		$jenis = $this->input->post('jenis');
		if ($jenis == 'Shared')
			$jenis = 1;
		elseif ($jenis == 'Semi Dedicated')
			$jenis = 3;
		else
			$jenis = 5;
		$server = $this->input->post('server');
		if ($server == 'Eropa')
			$server = 1;
		elseif ($server == 'Indonesia')
			$server = 3;
		elseif ($server == 'Singapore')
			$server = 4;
		else
			$server = 5;
		$dataNilai = array(
			'id' => $this->input->post('id'),
			'jenis' => $jenis,
			'server' => $server,
			'keamanan' => $this->input->post('jumlah'),
			'uptime' => $this->input->post('uptime'),
			'ssd' => $ssd, 'ram' => $this->input->post('ram'), 'cpu' => $this->input->post('cpu'), 'bandwidth' => $bandwith, 'inode' => $inode, 'support' => $support, 'fitur' => $fitur, 'garansi' => $this->input->post('garansi'), 'harga' => $this->input->post('harga')
		);
		return $dataNilai;
	}


	// Untuk Ambil nilai dari fitur
	public function inputFitur()
	{
		$nilaiFitur = 0;
		// wordpress
		$wordpress = $this->input->post('wordpress');
		if ($wordpress == 'ya') {
			$nilaiFitur += 1;
			$wordpress = 'Wordpress';
		} elseif ($wordpress == 'optimal') {
			$nilaiFitur += 2;
			$wordpress = 'Optimal';
		}
		// SSL
		$freessl = $this->input->post('freessl');
		if ($freessl == 'ya') {
			$nilaiFitur += 1;
			$freessl = 'Free SSL';
		}
		// Litespeed
		$litespeed = $this->input->post('litespeed');
		if ($litespeed == 'ya') {
			$nilaiFitur += 1;
			$litespeed = 'Litespeed';
		}
		// Auto Backup
		$auto = $this->input->post('auto');
		if ($auto == 'Harian') {
			$nilaiFitur += 3;
		} elseif ($auto == 'Mingguan') {
			$nilaiFitur += 2;
		} elseif ($auto == 'Bulanan') {
			$nilaiFitur += 1;
		} else {
			$nilaiFitur += 0;
		}
		// Domain Gratis
		$domain = $this->input->post('domain');
		if ($domain == 'ya') {
			$nilaiFitur += 3;
		} elseif ($domain == null) {
			$nilaiFitur += 0;
			$domain = 'tidak';
		}
		// Email Gratis
		$email = $this->input->post('email');
		if ($email == 'Unlimited') {
			$nilaiFitur += 3;
		} elseif ($email == 'tidak') {
			$nilaiFitur += 0;
		} else {
			$nilaiFitur += 1;
			$email = $this->input->post('batas1');
		}
		// Addon Domain
		$add = $this->input->post('add');
		if ($add == 'Unlimited') {
			$nilaiFitur += 3;
		} elseif ($add == 'tidak') {
			$nilaiFitur += 0;
		} else {
			$nilaiFitur += 1;
			$add = $this->input->post('batas');
		}
		// Sub Domain
		$sub = $this->input->post('sub');
		if ($sub == 'Unlimited') {
			$nilaiFitur += 3;
		} elseif ($sub == 'tidak') {
			$nilaiFitur += 0;
		} else {
			$nilaiFitur += 1;
		}

		$data = array(
			'id' => $this->input->post('id'),
			'wordpress' => $wordpress,
			'freessl' => $freessl,
			'litespeed' => $litespeed,
			'auto' => $auto,
			'domain' => $domain,
			'email' => $email,
			'add' => $add,
			'sub' => $sub,
			'nilai' => $nilaiFitur
		);
		return $data;
	}
}
