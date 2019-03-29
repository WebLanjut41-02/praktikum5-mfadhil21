<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}

	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/welcome/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['data'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_data',$data);	
	}

	public function tambah(){
		$this->load->view('v_input');
	}

	function aksi(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$data = array(
		'nim' => $nim,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'ipk' => $ipk,
		'kelas' => $kelas
		);
		$this->m_data->input_data($data,'data');
		redirect('Welcome/index');
	}

	function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');

		$data = array(
		'nim' => $nim,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'ipk' => $ipk,
		'kelas' => $kelas
		);

		$where = array(
			'nim' => $nim
		);

		$this->m_data->update_data($where,$data,'data');
		redirect('Welcome/index');
	}

	function edit($nim){
		$where = array('nim' => $nim);
		$data['data'] = $this->m_data->edit_data($where,'data')->result();
		$this->load->view('v_edit',$data);
	}

	public function search(){
			$keyword = $this->input->post('keyword');
			$data['data']=$this->m_data->get_product_keyword($keyword);
			$this->load->view('v_search',$data);
	}

	function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_data->hapus_data($where,'data');
		redirect('Welcome/index');
	}	
}