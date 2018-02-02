<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datamodel");
		$this->load->model("wilayah");
		$this->load->model("ktp");
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))){
			return redirect(base_url().'data/');
		}
	}

	public function index()
	{
		$model = $this->ktp->getAll();

		$this->load->view('dashboard',array('model' => $model));
	}

	public function input()
	{
		// var_dump($this->session->userdata());
		$user = $this->datamodel->getAllProducts();
		$prov = $this->wilayah->getProv();
		$pekerjaan = $this->db->get('pekerjaan');

		$this->load->view('input',array('user' => $user,'prov' => $prov,'pekerjaan' => $pekerjaan));
	}

	public function lihat($id)
	{
		$ktp = $this->db->from('ktp')->where('id',$id)->get();

		$model = $ktp->row();

		$this->load->view('lihat',array('model' => $model));
	}

	public function edit($id)
	{
		$ktp = $this->db->from('ktp')->where('id',$id)->get();
		$user = $this->datamodel->getAllProducts();
		$prov = $this->wilayah->getProv();
		$pekerjaan = $this->db->get('pekerjaan');
		$model = $ktp->row();
		$kab = $this->wilayah->getKab($model->provinsi);
		$kec = $this->wilayah->getKec($model->kabupaten);
		$kel = $this->wilayah->getKel($model->kecamatan);

		$this->load->view('edit',array('model' => $model,'user' => $user,'prov' => $prov,'pekerjaan' => $pekerjaan,'kab' => $kab,'kec' => $kec,'kel' => $kel));
	}

	public function logout() {
		unset($_SESSION['username']);
		unset($_SESSION['nama']);
		unset($_SESSION['nim']);

		$this->session->set_flashdata('message', 'Berhasil Logout');
		$this->session->set_flashdata('status', true);
		redirect(base_url().'data/');
	}

	public function download()
	{
		$user = $this->datamodel->getAllProducts();

		$this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "Daftar User.pdf";
	    $this->pdf->load_view('tabel', array('user' => $user));
	}

	public function getKab()
	{
		$kode = $this->input->get('kode');
		$kab = $this->wilayah->getKab($kode);

		echo json_encode($kab->result());
	}

	public function getKec()
	{
		$kode = $this->input->get('kode');
		$kec = $this->wilayah->getKec($kode);

		echo json_encode($kec->result());
	}

	public function getKel()
	{
		$kode = $this->input->get('kode');
		$kel = $this->wilayah->getKel($kode);

		echo json_encode($kel->result());
	}

	public function proses()
	{
		$this->form_validation->set_rules('nik','nik','required|min_length[16]|max_length[16]');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('tempat','tempat','required');
		$this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('gol_darah','gol_darah','required');
		$this->form_validation->set_rules('provinsi','provinsi','required');
		$this->form_validation->set_rules('kabupaten','kabupaten','required');
		$this->form_validation->set_rules('kecamatan','kecamatan','required');
		$this->form_validation->set_rules('kelurahan','kelurahan','required');
		$this->form_validation->set_rules('textarea','Alamat','required');
		$this->form_validation->set_rules('agama','agama','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', 'Data Yang Anda Masukkan Tidak Sesuai!');
			$this->session->set_flashdata('status', false);
			redirect(base_url().'dashboard/input');
		}else{
			$config['upload_path']          = './asset/img/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1000;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('message', $this->upload->display_errors());
				$this->session->set_flashdata('status', false);
				redirect(base_url().'dashboard/input');
			}else{
				$res = $this->upload->data();

				$nik = $this->input->post('nik');
				$nama = $this->input->post('nama');
				$tempat = $this->input->post('tempat');
				$tanggal = $this->input->post('tanggal');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$gol_darah = $this->input->post('gol_darah');
				$provinsi = $this->input->post('provinsi');
				$kabupaten = $this->input->post('kabupaten');
				$kecamatan = $this->input->post('kecamatan');
				$kelurahan = $this->input->post('kelurahan');
				$textarea = $this->input->post('textarea');
				$agama = $this->input->post('agama');
				$pekerjaan = $this->input->post('pekerjaan');
				$foto = $this->input->post('foto');

				$cekNik = $this->ktp->cekNik($nik);
				if($cekNik){
					$this->session->set_flashdata('message', 'NIK Sudah Digunakan!');
					$this->session->set_flashdata('status', false);
					redirect(base_url().'dashboard/input');
				}

				$ktpwil = implode('', explode('.', $kecamatan));
				$pecahtgl = explode('-', $tanggal);
				if($jenis_kelamin == 0){
					$pecahtgl[1] += 40;
				}
				$ktptgl = implode('', [$pecahtgl[2],$pecahtgl[1],substr($pecahtgl[0],2)]);
				$niks = substr($nik, 0,12);
				$tmp = implode('', [$ktpwil,$ktptgl]);
				if($niks != $tmp){
					$this->session->set_flashdata('message', 'KTP Tidak Sesuai Dengan Data Yang Dimasukkan');
					$this->session->set_flashdata('status', false);
					redirect(base_url().'dashboard/input');
				}

				$data = array(
					'nik' => $nik,
					'nama' => $nama,
					'tempat' => $tempat,
					'tanggal' => $tanggal,
					'jenis_kelamin' => $jenis_kelamin,
					'gol_darah' => $gol_darah,
					'provinsi' => $provinsi,
					'kabupaten' => $kabupaten,
					'kecamatan' => $kecamatan,
					'kelurahan' => $kelurahan,
					'alamat' => $textarea,
					'agama' => $agama,
					'pekerjaan' => $pekerjaan,
					'foto' => $res['file_name']
				);

				$this->ktp->insertPen($data);
				$this->session->set_flashdata('message', 'Berhasil Memasukkan Data');
				$this->session->set_flashdata('status', true);
				redirect(base_url().'dashboard/');
			}
		}
	}

	public function prosesEdit()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nik','nik','required|min_length[16]|max_length[16]');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('tempat','tempat','required');
		$this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('gol_darah','gol_darah','required');
		$this->form_validation->set_rules('provinsi','provinsi','required');
		$this->form_validation->set_rules('kabupaten','kabupaten','required');
		$this->form_validation->set_rules('kecamatan','kecamatan','required');
		$this->form_validation->set_rules('kelurahan','kelurahan','required');
		$this->form_validation->set_rules('textarea','Alamat','required');
		$this->form_validation->set_rules('agama','agama','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', 'Data Yang Anda Masukkan Tidak Sesuai!');
			$this->session->set_flashdata('status', false);
			redirect(base_url().'dashboard/edit/'.$id);
		}else{
			$config['upload_path']          = './asset/img/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1000;
			$this->load->library('upload', $config);

			
			$res = $this->upload->data();

			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$tempat = $this->input->post('tempat');
			$tanggal = $this->input->post('tanggal');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$gol_darah = $this->input->post('gol_darah');
			$provinsi = $this->input->post('provinsi');
			$kabupaten = $this->input->post('kabupaten');
			$kecamatan = $this->input->post('kecamatan');
			$kelurahan = $this->input->post('kelurahan');
			$textarea = $this->input->post('textarea');
			$agama = $this->input->post('agama');
			$pekerjaan = $this->input->post('pekerjaan');
			if ($this->upload->do_upload('foto')){
				$foto = $this->input->post('foto');
			}

			// $cekNik = $this->ktp->cekNik($nik);
			// if($cekNik){
			// 	$this->session->set_flashdata('message', 'NIK Sudah Digunakan!');
			// 	$this->session->set_flashdata('status', false);
			// 	redirect(base_url().'dashboard/input');
			// }

			$ktpwil = implode('', explode('.', $kecamatan));
			$pecahtgl = explode('-', $tanggal);
			if($jenis_kelamin == 0){
				$pecahtgl[1] += 40;
			}
			$ktptgl = implode('', [$pecahtgl[2],$pecahtgl[1],substr($pecahtgl[0],2)]);
			$niks = substr($nik, 0,12);
			$tmp = implode('', [$ktpwil,$ktptgl]);
			if($niks != $tmp){
				$this->session->set_flashdata('message', 'KTP Tidak Sesuai Dengan Data Yang Dimasukkan');
				$this->session->set_flashdata('status', false);
				redirect(base_url().'dashboard/edit/'.$id);
			}

			$data = array(
				'nama' => $nama,
				'tempat' => $tempat,
				'tanggal' => $tanggal,
				'jenis_kelamin' => $jenis_kelamin,
				'gol_darah' => $gol_darah,
				'provinsi' => $provinsi,
				'kabupaten' => $kabupaten,
				'kecamatan' => $kecamatan,
				'kelurahan' => $kelurahan,
				'alamat' => $textarea,
				'agama' => $agama,
				'pekerjaan' => $pekerjaan,
				'foto' => $res['file_name']
			);

			$this->ktp->updatePen($id,$data);
			$this->session->set_flashdata('message', 'Berhasil Mengedit Data');
			$this->session->set_flashdata('status', true);
			redirect(base_url().'dashboard/');
		}
	}

	public function hapus($id)
	{
		$this->ktp->deletePen($id);
		$this->session->set_flashdata('message', 'Berhasil Menghapus Data');
		$this->session->set_flashdata('status', true);
		redirect(base_url().'dashboard/');
	}
}
