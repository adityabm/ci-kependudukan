<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("datamodel");
		$this->load->library('form_validation');

		if(!empty($this->session->userdata('username'))){
			redirect(base_url().'dashboard');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('welcome_message');
	}

	public function proses()
	{
		$hobi = implode(',', $this->input->post('hobi'));
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'alamat' => $this->input->post('alamat'),
			'kota_asal' => $this->input->post('kota_asal'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'hobi' => $hobi,
			'deskripsi' => $this->input->post('deskripsi')
		);

		if(empty($data['username'])){
			$this->session->set_flashdata('message', 'Isi Username Terlebih Dahulu!');
			$this->session->set_flashdata('status', false);
			redirect(base_url().'data/register');
		}

		if($data['password'] != $this->input->post('retype')){
			$this->session->set_flashdata('message', 'Password Tidak Sesuai!');
			$this->session->set_flashdata('status', false);
			redirect(base_url().'data/register');
		}

		$data['password'] = md5($data['password']);

		$this->datamodel->addProduct($data);

		$this->session->set_flashdata('message', 'Silahkan Login');
		$this->session->set_flashdata('status', true);
		redirect(base_url().'data/');
	}

	public function loginProses()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				redirect(base_url().'data/home');
			}else{
				$this->session->set_flashdata('message', 'Password Tidak Sesuai!');
				$this->session->set_flashdata('status', false);
				redirect(base_url().'data/');
			}
		}else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->datamodel->loginTrue($data);
			
			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->datamodel->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'nama' => $result[0]->nama,
						'nim' => $result[0]->nim,
					);
					$this->session->set_userdata($session_data);

					redirect(base_url().'dashboard');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->session->set_flashdata('message', $data['error_message']);
				$this->session->set_flashdata('status', false);
				redirect(base_url().'data/');
			}
		}
	}
}
