<?php
defined('BASEPATH') OR exit('No direct script acces allowed');


class Data_model extends CI_Model
{
	
	public function getHosting($table)
	{
		$res=$this->db->get($table);
		return $res->result_array();
	}

	public function getWhere($table,$data)
	{
		$res=$this->db->get_where($table,$data);
		return $res->result_array();
	}

	public function Insert($table,$data)
	{
		$res=$this->db->insert($table,$data);
		return $res;
	}

	public function Update($table,$data,$where)
	{
		$res=$this->db->update($table,$data,$where);
		return $res;
	}

	public function Delete($table,$where)
	{
		$res=$this->db->delete($table,$where);
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
		$fitur=array('0'=>'');
		if($this->input->post('wordpress')=='ya')
		$fitur = array('wp'=>'Paket Wordpress');
		if($this->input->post('litespeed')=='ya')
		$fitur = array('lite'=>'Litespeed');
		if($this->input->post('fiturSSD')=='ya')
		$fitur += array('fiturSSD'=>'Penyimpanan SSD');
		if($this->input->post('auto')=='Harian')
		$fitur += array('auto'=>'Backup Harian');
		elseif($this->input->post('auto')=='Mingguan')
		$fitur += array('auto'=>'Backup Mingguan');
		elseif($this->input->post('auto')=='Bulanan')
		$fitur += array('auto'=>'Backup Bulanan');
		if($this->input->post('domain')=='Terbatas')
		$fitur += array('domain'=>'Free Domain terbatas');
		elseif($this->input->post('domain')=='Unlimited')
		$fitur += array('domain'=>'Free Domain Unlimited');
		if($this->input->post('add')=='Terbatas')
		$fitur += array('add'=>'Addon Domain terbatas');
		elseif($this->input->post('add')=='Unlimited')
		$fitur += array('add'=>'Addon Domain Unlimited');
		if($this->input->post('email')=='Terbatas')
		$fitur += array('email'=>'Email  terbatas');
		elseif($this->input->post('email')=='Unlimited')
		$fitur += array('email'=>'Email  Unlimited');
		$myFitur = implode(', ', $fitur);
			
		$bandwith= $this->input->post('bandwith');
		if($bandwith=='0')
		$bandwith='Unlimited';
		else
		$bandwith= $bandwith+ ' GB';
		
		$ssd= $this->input->post('ssd');
		if($ssd=='0')
		$ssd='Unlimited';

		$inode= $this->input->post('inode');
		if($inode=='0')
		$inode='Unlimited';
		
		$data= array('id' =>$this->input->post('id')
			,'nama' =>$this->input->post('nama')
			,'penyedia' =>$this->input->post('penyedia')
			,'uptime' =>$this->input->post('uptime')
			,'ssd' =>$ssd
			,'ram' =>$this->input->post('ram')
			,'cpu' =>$this->input->post('cpu')
			,'bandwith' =>$bandwith
			,'inode' =>$inode
			,'support' =>$this->input->post('support')
			,'wordpress' =>$this->input->post('wordpress')
			,'fitur' =>$myFitur
			,'garansi' =>$this->input->post('garansi')
			,'harga' =>$this->input->post('harga')
			,'keamanan' =>$this->input->post('Keamanan'));
		return $data;
	}
	public function inputNilai(){
		$this->load->view('form_add');
		$fitur = 0;
		if($this->input->post('wordpress')=='ya')
		$fitur+=1;
		if($this->input->post('litespeed')=='ya')
		$fitur+=3;
		if($this->input->post('ssd')=='ya')
		$fitur+=1;
		if($this->input->post('auto')=='Harian')
		$fitur+=3;
		elseif($this->input->post('auto')=='Mingguan')
		$fitur+=2;
		elseif($this->input->post('auto')=='Bulanan')
		$fitur+=1;
		if($this->input->post('domain')=='Terbatas')
		$fitur+=1;
		elseif($this->input->post('domain')=='Unlimited')
		$fitur+=3;


		$ssd= $this->input->post('ssd');
		if($ssd == 0)
		$ssd=1;
		$inode= $this->input->post('inode');
		if($inode== 0)
		$inode=2000000;
		$bandwith = $this->input->post('bandwith');
		if($bandwith==0)
		$bandwith=1500;
		$support = $this->input->post('support');
		if($support=='Fast Support 24/7')
		$support=5;
		else
		$support=3;
	$dataNilai = array('id' => $this->input->post('id') 
					,'keamanan' => $this->input->post('jumlah')
					,'uptime' =>$this->input->post('uptime')
					,'ssd' =>$ssd
					,'ram' =>$this->input->post('ram')
					,'cpu' =>$this->input->post('cpu')
					,'bandwith' =>$bandwith
					,'inode' =>$inode
					,'support' =>$support
					,'fitur' =>$fitur
					,'garansi' =>$this->input->post('garansi')
					,'harga' =>$this->input->post('harga')
				);
		return $dataNilai;
	}

	public function update_data(){
		$this->load->view('form_add');
		$fitur=array('0'=>'');
		if($this->input->post('wordpress')=='ya')
		$fitur = array('wp'=>'Paket Wordpress');
		if($this->input->post('litespeed')=='ya')
		$fitur = array('lite'=>'Litespeed');
		if($this->input->post('fiturSSD')=='ya')
		$fitur += array('fiturSSD'=>'Penyimpanan SSD');
		if($this->input->post('auto')=='Harian')
		$fitur += array('auto'=>'Backup Harian');
		elseif($this->input->post('auto')=='Mingguan')
		$fitur += array('auto'=>'Backup Mingguan');
		elseif($this->input->post('auto')=='Bulanan')
		$fitur += array('auto'=>'Backup Bulanan');
		if($this->input->post('domain')=='Terbatas')
		$fitur += array('domain'=>'Free Domain terbatas');
		elseif($this->input->post('domain')=='Unlimited')
		$fitur += array('domain'=>'Free Domain Unlimited');
		if($this->input->post('add')=='Terbatas')
		$fitur += array('add'=>'Addon Domain terbatas');
		elseif($this->input->post('add')=='Unlimited')
		$fitur += array('add'=>'Addon Domain Unlimited');
		if($this->input->post('email')=='Terbatas')
		$fitur += array('email'=>'Email  terbatas');
		elseif($this->input->post('email')=='Unlimited')
		$fitur += array('email'=>'Email  Unlimited');
		$myFitur = implode(', ', $fitur);

			
		$bandwith= $this->input->post('bandwith');
		if($bandwith=='1500')
		$bandwith='Unlimited';
		else
		$bandwith= $bandwith+ ' GB';
		
		$ssd= $this->input->post('ssd');
		if($ssd=='0')
		$ssd='Unlimited';

		$inode= $this->input->post('inode');
		if($inode=='0')
		$inode='Unlimited';
		
		$data= array('id' =>$this->input->post('id')
			,'nama' =>$this->input->post('nama')
			,'penyedia' =>$this->input->post('penyedia')
			,'uptime' =>$this->input->post('uptime')
			,'ssd' =>$ssd
			,'ram' =>$this->input->post('ram')
			,'cpu' =>$this->input->post('cpu')
			,'bandwith' =>$bandwith
			,'inode' =>$inode
			,'support' =>$this->input->post('support')
			,'wordpress' =>$this->input->post('wordpress')
			,'fitur' =>$myFitur
			,'garansi' =>$this->input->post('garansi')
			,'harga' =>$this->input->post('harga')
			,'keamanan' =>$this->input->post('Keamanan'));
		return $data;
	}

	public function updateNilai(){
		$this->load->view('form_edit');
		$fitur = 0;
		if($this->input->post('wordpress')=='ya')
		$fitur+=1;
		if($this->input->post('litespeed')=='ya')
		$fitur+=3;
		if($this->input->post('ssd')=='ya')
		$fitur+=1;
		if($this->input->post('auto')=='Harian')
		$fitur+=3;
		elseif($this->input->post('auto')=='Mingguan')
		$fitur+=2;
		elseif($this->input->post('auto')=='Bulanan')
		$fitur+=1;
		if($this->input->post('domain')=='Terbatas')
		$fitur+=1;
		elseif($this->input->post('domain')=='Unlimited')
		$fitur+=3;


		$ssd= $this->input->post('ssd');
		if($ssd == 0)
		$ssd=1;
		$inode= $this->input->post('inode');
		if($inode== 0)
		$inode=2000000;
		$bandwith = $this->input->post('bandwith');
		if($bandwith==0)
		$bandwith=1500;
		$support = $this->input->post('support');
		if($support=='Fast Support 24/7')
		$support=5;
		else
		$support=3;
	$dataNilai = array('id' => $this->input->post('id') 
					,'keamanan' => $this->input->post('jumlah')
					,'uptime' =>$this->input->post('uptime')
					,'ssd' =>$ssd
					,'ram' =>$this->input->post('ram')
					,'cpu' =>$this->input->post('cpu')
					,'bandwith' =>$bandwith
					,'inode' =>$inode
					,'support' =>$support
					,'fitur' =>$fitur
					,'garansi' =>$this->input->post('garansi')
					,'harga' =>$this->input->post('harga')
				);
		return $dataNilai;
	}
	
}?>