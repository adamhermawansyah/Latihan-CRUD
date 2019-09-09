<?php 
/**
 * 
 */
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Data'));
	}

	public function index()
	{
		$data['judul'] = 'Data Karyawan';
		$data['data'] = $this->Data->getData('id, nama, jenis_kelamin, jabatan, no_hp, alamat','tabel_karyawan', 'id');
		$data['content'] = 'karyawan/data_karyawan';
		$this->load->view('template/content', $data);
	}

	public function Tambah()
	{
		$data['judul'] = 'Tambah Karyawan';
		$data['content'] = 'karyawan/tambah_karyawan';
		$this->load->view('template/content', $data);
	}

	public function Ubah($kode)
	{
		$data['judul'] = 'Ubah Karyawan';
		$data['data'] = $this->Data->getData('id, nama, jenis_kelamin, jabatan, no_hp, alamat','tabel_karyawan', NULL,  array('id' => $kode));
		$data['content'] = 'karyawan/ubah_karyawan';
		$this->load->view('template/content', $data);
	}

	public function SimpanData()
	{
		$this->form_validation->set_rules('nama', 'masukkan nama' ,'required');
		$this->form_validation->set_rules('jenis_kelamin', 'pilih jenis kelamin' ,'required');
		$this->form_validation->set_rules('jabatan', 'pilih jabatan' ,'required');
		$this->form_validation->set_rules('no_hp', 'masukkan nomor telepon' ,'required');
		$this->form_validation->set_rules('alamat', 'masukkan alamat' ,'required');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jabatan = $this->input->post('jabatan');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' => $jabatan,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
			);
			$this->Data->insertData('tabel_karyawan', $data);
			$this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data berhasil tersimpan.
				</div>');
		} else {
			$this->session->set_flashdata('messages', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data gagal tersimpan.
				</div>');
		}
		redirect(site_url('karyawan'));
	}

	public function UbahData()
	{
		$this->form_validation->set_rules('nama', 'masukkan nama' ,'required');
		$this->form_validation->set_rules('jenis_kelamin', 'pilih jenis kelamin' ,'required');
		$this->form_validation->set_rules('jabatan', 'pilih jabatan' ,'required');
		$this->form_validation->set_rules('no_hp', 'masukkan nomor telepon' ,'required');
		$this->form_validation->set_rules('alamat', 'masukkan alamat' ,'required');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jabatan = $this->input->post('jabatan');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' => $jabatan,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
			);
			$this->Data->updateData('tabel_karyawan', $data, 'id', $id);
			$this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data berhasil di ubah.
				</div>');
		} else {
			$this->session->set_flashdata('messages', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data gagal di ubah.
				</div>');
		}
		redirect(site_url('karyawan'));
	}

	public function HapusKaryawan($kode)
	{
		if ($kode == TRUE) {
			$this->Data->deleteData('tabel_karyawan', 'id', $kode);
			$this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data berhasil terhapus.
				</div>');
		} else {
			$this->session->set_flashdata('messages', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>Informasi</h4>
				Data jurusan gagal terhapus.
				</div>');
		}
		redirect(site_url('karyawan'));
	}
}
?>