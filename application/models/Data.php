<?php 
/**
 * 
 */
class Data extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getData($data, $table, $key = NULL, $kode = NULL)
	{
		if ($kode == NULL) {
			return $this->db->select($data)
			->from($table)
			->order_by($key, 'ASC')
			->get()->result();
		} else if ($key == NULL) {
			return $this->db->select($data)
			->get_where($table, $kode)->row_object();
		}
	}

	public function getDataKehadiran() {
		return $this->db->select('a.id, b.nama, a.hari, a.tanggal, a.jam_datang, a.jam_pulang, TIMEDIFF(jam_pulang, jam_datang) AS jam_kerja')
		->from('tabel_kehadiran AS a')
		->join('tabel_karyawan AS b', 'a.id_karyawan = b.id')
		->where('a.id_karyawan = b.id')
		->order_by('a.id', 'ASC')
		->get()->result();		
	}

	public function insertData($table, $data) {
		return $this->db->insert($table, $data);
	}

	public function updateData($table, $data, $key, $id) {
		return $this->db->update($table, $data, array($key => $id));
	}

	public function deleteData($table, $key, $id) {
		return $this->db->delete($table, array($key => $id));
	}
}
?>