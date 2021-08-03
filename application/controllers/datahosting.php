<?php

class dataHosting extends CI_Controller{
	public function index(){
		
		$judul['judul']='My Hosting'; 
		$this->load->view('template/head',$judul);
		$this->load->view('home');
		$this->load->view('template/footer');
		}
	public function add_data(){
		$judul['judul']='Halaman Admin';
		$this->load->view('template/head',$judul);
		$this->load->view('form_add');
		$this->load->view('template/footer');
	}
	public function admin(){
		$this->load->library('pagination');
		$this->load->model('data_model');
		//Config Pagination
		$config['base_url']='http://localhost/SI/datahosting/admin';
		$config['total_rows']= $this->data_model->countAllHosting();
		$config['per_page']=3;
		//Styling
		$config['full_tag_open']='<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']='</ul></nav>';
		
		$config['first_link']='First';
		$config['first_tag_open']='<li class="page-item">';
		$config['first_tag_close']='</li>';
		
		$config['last_link']='Last';
		$config['last_tag_open']='<li class="page-item">';
		$config['last_tag_close']='</li>';
		
		$config['next_link']='&raquo';
		$config['next_tag_open']='<li class="page-item">';
		$config['next_tag_close']='</li>';
		
		$config['prev_link']='&laquo';
		$config['prev_tag_open']='<li class="page-item">';
		$config['prev_tag_close']='</li>';
		
		$config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']='</a></li>';
		
		$config['num_tag_open']='<li class="page-item">';
		$config['num_tag_close']='</a></li>';

		$config['attributes']=array('class'=>'page-link');
		//Inisialisasi Pagination
		$this->pagination->initialize($config);
	
		$start = $this->uri->segment(3);
		$data=$this->data_model->getHostingLimit($config['per_page'],$start);
		$data= array('data'=> $data);
		$judul['judul']='Halaman Admin'; 
		$this->load->view('template/head',$judul);
		$this->load->view('data_hosting',$data);
		$this->load->view('template/footer');
	}
	public function Insert(){
		$this->load->view('form_add');
		$this->load->model('data_model');
		$data= $this->data_model->Input();
		$data=$this->data_model->Insert('list',$data);
		$dataNilai= $this->data_model->inputNilai();
		$dataNilai= $this->data_model->Insert('nilai',$dataNilai);

		redirect(base_url('admin'),'refresh');
	}
	public function delete_data($id){
		$id = array('id' =>$id);
		$this->load->model('data_model');
		$this->data_model->Delete('list',$id);
		$this->data_model->Delete('nilai',$id);
		redirect(base_url('admin'),'refresh');
	}

	public function bobot(){
		$this->load->view('form_add');
		
	}
	public function edit_data($id){
		$this->load->model('data_model');
		//ambil data dari database
		$hosting=$this->data_model->getWhere('list', array('id'=> $id));
		$nilai = $this->data_model->getWhere('nilai', array('id'=> $id));
		$data= array('id' => $hosting[0]['id']
			,'nama' =>$hosting[0]['nama']
			,'penyedia' =>$hosting[0]['penyedia']
			,'uptime' =>$hosting[0]['uptime']
			,'ssd' =>$hosting[0]['ssd']
			,'ram' =>$hosting[0]['ram']
			,'cpu' =>$hosting[0]['cpu']
			,'bandwith' =>$nilai[0]['bandwith']
			,'inode' =>$hosting[0]['inode']
			,'support' =>$hosting[0]['support']
			,'fitur' =>$hosting[0]['fitur']
			,'garansi' =>$hosting[0]['garansi']
			,'harga' =>$hosting[0]['harga']
			,'keamanan' =>$hosting[0]['keamanan']
			,'jumlah' =>$nilai[0]['keamanan']);
		$judul['judul']='Halaman Update';
		$this->load->view('template/head',$judul);
		$this->load->view('form_edit', $data);
		$this->load->view('template/footer');
	}
	public function update(){
		$this->load->view('form_edit');
		$this->load->model('data_model');
		//Upadte data
		$data= $this->data_model->update_data();
		$where = array('id' =>$this->input->post('id'));;
		$res = $this->data_model->Update('list', $data, $where);
		//Update nilai
		$dataNilai= $this->data_model->inputNilai();
		$whereNilai = array('id' =>$this->input->post('id') , );
		$dataNilai= $this->data_model->Update('nilai',$dataNilai,$whereNilai);
		//kembali jika sudah update
		if($res>0){
			redirect(base_url('admin'),'refresh');
		}
	}

	}
?>