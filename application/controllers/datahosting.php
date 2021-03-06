<?php

class dataHosting extends CI_Controller
{
	// Tampilan Home
	public function index()
	{

		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	// Tampilan Sistem
	public function Sistem()
	{
		$fitur2 = $this->input->post('fitur');
		if ($fitur2 != 'tidak ada')
			$fitur1 = $fitur2;
		else
			$fitur1 = 'fitur.id';
		if ($fitur2 === null)
			$fitur1 = 'fitur.id';

		$data = $this->db->select('*')
			->from('list')
			->join('preferensi', 'list.id=preferensi.id', 'left')
			->join('fitur', 'list.id=fitur.id', 'left')
			->where($fitur1 . ' <> "tidak" ')
			->order_by('preferensi.nilai', 'DESC')
			->limit(16)
			->get();
		$data = array('data' => $data);


		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('sistem', $data);
		$this->load->view('template/footer');
	}

	// Tampilan Proses
	public function Proses()
	{
		$data = $this->db->select('*')
			->from('list')
			->join('nilai', 'list.id=nilai.id', 'left')
			->order_by('list.penyedia', 'ASC')
			->get();
		$data = array('data' => $data);
		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('proses/alternatif', $data);
		$this->load->view('template/footer');
	}
	public function Normalisasi()
	{
		$data = $this->db->select('*')
			->from('list')
			->join('normalisasi', 'list.id=normalisasi.id', 'left')
			->order_by('list.penyedia', 'ASC')
			->get();
		$data = array('data' => $data);
		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('proses/normalisasi', $data);
		$this->load->view('template/footer');
	}
	public function Terbobot()
	{
		$data = $this->db->select('*')
			->from('list')
			->join('terbobot', 'list.id=terbobot.id', 'left')
			->order_by('list.penyedia', 'ASC')
			->get();
		$data = array('data' => $data);
		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('proses/terbobot', $data);
		$this->load->view('template/footer');
	}
	public function Perangkingan()
	{
		$data = $this->db->select('*')
			->from('list')
			->join('preferensi', 'list.id=preferensi.id', 'left')
			->order_by('nilai', 'DESC')
			->get();
		$data = array('data' => $data);
		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('proses/perangkingan', $data);
		$this->load->view('template/footer');
	}

	// Tampilan Help
	public function Help()
	{

		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('help');
		$this->load->view('template/footer');
	}

	// Tampilan About
	public function About()
	{

		$judul['judul'] = 'My Hosting';
		$this->load->view('template/head', $judul);
		$this->load->view('about');
		$this->load->view('template/footer');
	}

	// Tampilan Tambah Data
	public function add_data()
	{
		$judul['judul'] = 'Halaman Admin';
		$this->load->view('template/head', $judul);
		$this->load->view('form_add');
		$this->load->view('template/footer');
	}

	// Tampilan Menu Admin
	public function admin()
	{
		$this->load->library('pagination');
		$this->load->model('data_model');
		//Config Pagination
		$config['base_url'] = 'http://localhost/hosting/datahosting/admin';
		$config['total_rows'] = $this->data_model->countAllHosting();
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		//Styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');
		//Inisialisasi Pagination
		$this->pagination->initialize($config);

		$start = $this->uri->segment(3);
		$data = $this->data_model->getHostingLimit($config['per_page'], $start);
		$data = array('data' => $data);
		$judul['judul'] = 'Halaman Admin';
		$this->load->view('template/head', $judul);
		$this->load->view('data_hosting', $data);
		$this->load->view('template/footer');
	}
	// Input Data Hosting 
	public function Insert()
	{
		$this->load->view('form_add');
		$this->load->model('data_model');
		$dataFitur = $this->data_model->inputFitur();
		$data = $this->data_model->Input();
		$id = $data;
		$data = $this->data_model->Insert('list', $data);
		$dataNilai = $this->data_model->inputNilai($dataFitur['nilai']);
		$dataNilai = $this->data_model->Insert('nilai', $dataNilai);
		$dataFitur = $this->data_model->Insert('fitur', $dataFitur);
		$idNormalisasi = $this->data_model->Insert('normalisasi', array('id' => $id['id']));
		$idTerbobot = $this->data_model->Insert('terbobot', array('id' => $id['id']));
		$idPreferensi = $this->data_model->Insert('preferensi', array('id' => $id['id']));


		redirect(base_url('datahosting/admin'), 'refresh');
	}
	// Hapus Data Hosting
	public function delete_data($id)
	{
		$id = array('id' => $id);
		$this->load->model('data_model');
		$this->data_model->Delete('list', $id);
		$this->data_model->Delete('nilai', $id);
		$this->data_model->Delete('fitur', $id);
		$this->data_model->Delete('normalisasi', $id);
		$this->data_model->Delete('terbobot', $id);
		$this->data_model->Delete('preferensi', $id);
		redirect(base_url('datahosting/admin'), 'refresh');
	}


	// Edit Data Hosting
	public function edit_data($id)
	{
		$this->load->model('data_model');
		//ambil data dari database
		$hosting = $this->data_model->getWhere('list', array('id' => $id));
		$nilai = $this->data_model->getWhere('nilai', array('id' => $id));
		$fitur = $this->data_model->getWhere('fitur', array('id' => $id));
		$data = array(
			'id' => $hosting[0]['id'], 'nama' => $hosting[0]['nama'], 'penyedia' => $hosting[0]['penyedia'], 'jenis' => $hosting[0]['jenis'], 'server' => $hosting[0]['server'], 'uptime' => $hosting[0]['uptime'], 'ssd' => $hosting[0]['ssd'], 'ram' => $hosting[0]['ram'], 'cpu' => $hosting[0]['cpu'], 'bandwidth' => $hosting[0]['bandwidth'], 'inode' => $hosting[0]['inode'], 'support' => $hosting[0]['support'], 'fitur' => $hosting[0]['fitur'], 'garansi' => $hosting[0]['garansi'], 'harga' => $hosting[0]['harga'], 'keamanan' => $hosting[0]['keamanan'], 'jumlah' => $nilai[0]['keamanan']
		);
		$data += array(
			'email' => $fitur[0]['email'],
			'add' => $fitur[0]['add'],
			'sub' => $fitur[0]['sub'],
			'wordpress' => $fitur[0]['wordpress'],
			'auto' => $fitur[0]['auto'],
			'freessl' => $fitur[0]['freessl'],
			'domain' => $fitur[0]['domain'],
			'litespeed' => $fitur[0]['litespeed']
		);

		// ,'jumlah' =>$nilai[0]['keamanan']

		$judul['judul'] = 'Halaman Update';
		$this->load->view('template/head', $judul);
		$this->load->view('form_edit', $data);
		$this->load->view('template/footer');
	}
	// Update Database Hosting
	public function update()
	{
		$this->load->view('form_edit');
		$this->load->model('data_model');

		//Upadte Fitur
		$dataFitur = $this->data_model->inputFitur();
		$dataNilai = $this->data_model->inputNilai($dataFitur['nilai']);
		$whereFitur = array('id' => $this->input->post('id'));;
		$dataFitur = $this->data_model->Update('fitur', $dataFitur, $whereFitur);

		//Update nilai
		$whereNilai = array('id' => $this->input->post('id'),);
		$dataNilai = $this->data_model->Update('nilai', $dataNilai, $whereNilai);

		//Upadte data
		$data = $this->data_model->Input();
		$where = array('id' => $this->input->post('id'));;
		$res = $this->data_model->Update('list', $data, $where);



		//kembali jika update berhasil
		if ($res > 0) {
			redirect(base_url('datahosting/admin'), 'refresh');
		}
	}

	public function refreshNormalisasi()
	{
		$this->load->model('data_model');
		$normalisasi = $this->data_model->Normalisasi();
		if ($normalisasi > 0) {
			redirect(base_url('datahosting/admin'), 'refresh');
		}
	}



	// PROSES MENJALANKAN PROGRAM

	public function start()
	{
		$this->load->model('proses');
		// Tentukan Prioritas
		$prioritas = $this->proses->Prioritas();
		$res = $this->proses->Update('prioritas', $prioritas, array('id' => 1));

		// normalisasi nanti dipindahkan ke bagian tambah data dan update data
		//$normalisasi = $this->proses->Normalisasi();
		$terbobot = $this->proses->Terbobot();
		$preferensi = $this->proses->Preferensi();


		if ($res) {
			redirect(base_url('datahosting/sistem'), 'refresh');
		}
	}
}
