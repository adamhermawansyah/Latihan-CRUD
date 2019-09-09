<?php 
/**
 * 
 */
class Kehadiran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Data'));
	}

	public function index()
	{
		$data['judul'] = 'Data Kehadiran';
		$data['data'] = $this->Data->getDataKehadiran();
		$data['content'] = 'kehadiran/data_kehadiran';
		$this->load->view('template/content', $data);
	}

	public function Tambah()
	{
		$data['judul'] = 'Tambah Kehadiran';
		$data['data_karyawan'] = $this->Data->getData('id, nama','tabel_karyawan', 'id');
		$data['content'] = 'kehadiran/tambah_kehadiran';
		$this->load->view('template/content', $data);
	}

	public function Ubah($kode)
	{
		$data['judul'] = 'Ubah Kehadiran';
		$data['data'] = $this->Data->getData('id, id_karyawan, hari, tanggal, jam_datang, jam_pulang','tabel_kehadiran', NULL,  array('id' => $kode));
		$data['data_karyawan'] = $this->Data->getData('id, nama','tabel_karyawan', 'id');
		$data['content'] = 'kehadiran/ubah_kehadiran';
		$this->load->view('template/content', $data);
	}

	public function SimpanData()
	{
		$this->form_validation->set_rules('id_karyawan', 'masukkan nama' ,'required');
		$this->form_validation->set_rules('hari', 'pilih hari' ,'required');
		$this->form_validation->set_rules('tanggal', 'pilih tanggal' ,'required');
		$this->form_validation->set_rules('bulan', 'pilih bulan' ,'required');
		$this->form_validation->set_rules('tahun', 'pilih tahun' ,'required');
		$this->form_validation->set_rules('jam_datang', 'masukkan jam datang' ,'required');
		$this->form_validation->set_rules('jam_pulang', 'masukkan jam pulang' ,'required');
		$id_karyawan = $this->input->post('id_karyawan');
		$hari = $this->input->post('hari');
		$tanggal = $this->input->post('tanggal').' '. $this->input->post('bulan').' '. $this->input->post('tahun');
		$jam_datang = $this->input->post('jam_datang');
		$jam_pulang = $this->input->post('jam_pulang');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_karyawan' => $id_karyawan,
				'hari' => $hari,
				'tanggal' => $tanggal,
				'jam_datang' => $jam_datang,
				'jam_pulang' => $jam_pulang,
			);
			$this->Data->insertData('tabel_kehadiran', $data);
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
		redirect(site_url('kehadiran'));
	}

	public function UbahData()
	{
		$this->form_validation->set_rules('id_karyawan', 'masukkan nama' ,'required');
		$this->form_validation->set_rules('hari', 'pilih hari' ,'required');
		$this->form_validation->set_rules('tanggal', 'pilih tanggal' ,'required');
		$this->form_validation->set_rules('bulan', 'pilih bulan' ,'required');
		$this->form_validation->set_rules('tahun', 'pilih tahun' ,'required');
		$this->form_validation->set_rules('jam_datang', 'masukkan jam datang' ,'required');
		$this->form_validation->set_rules('jam_pulang', 'masukkan jam pulang' ,'required');
		$id = $this->input->post('id');
		$id_karyawan = $this->input->post('id_karyawan');
		$hari = $this->input->post('hari');
		$tanggal = $this->input->post('tanggal').' '. $this->input->post('bulan').' '. $this->input->post('tahun');
		$jam_datang = $this->input->post('jam_datang');
		$jam_pulang = $this->input->post('jam_pulang');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_karyawan' => $id_karyawan,
				'hari' => $hari,
				'tanggal' => $tanggal,
				'jam_datang' => $jam_datang,
				'jam_pulang' => $jam_pulang,
			);
			$this->Data->updateData('tabel_kehadiran', $data, 'id', $id);
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
		redirect(site_url('kehadiran'));
	}

	public function HapusKehadiran($kode)
	{
		if ($kode == TRUE) {
			$this->Data->deleteData('tabel_kehadiran', 'id', $kode);
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
		redirect(site_url('kehadiran'));
	}
}
?>