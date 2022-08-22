<?php
class M_rekap extends CI_Model{

	function get_all_rekap(){
		$hsl=$this->db->query("SELECT tbl_rekap.*,DATE_FORMAT(waktu_upload,'%d/%m/%Y') AS tanggal FROM tbl_rekap ORDER BY id_rekap DESC");
		return $hsl;
	}
	function simpan_rekap($judul,$tanggal,$bulan,$tahun,$media,$file){
		$hsl=$this->db->query("insert into tbl_rekap(judul_rekap,tanggal_rekap,bulan_rekap,tahun_rekap,media_rekap,file_rekap) values ('$judul','$tanggal','$bulan','$tahun','$media','$file')");
		return $hsl;
	}
	// function get_tulisan_by_kode($kode){
	// 	$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
	// 	return $hsl;
	// }

	function update_rekap($kode,$judul,$tanggal,$bulan,$tahun,$media,$file){
		$hsl=$this->db->query("update tbl_rekap set judul_rekap='$judul',tanggal_rekap='$tanggal',bulan_rekap='$bulan',tahun_rekap='$tahun',media_rekap='$media',file_rekap='$file' where id_rekap='$kode'");
		return $hsl;
	}

	function update_rekap_tanpa_pdf($kode,$judul,$tanggal,$bulan,$tahun,$media){
		$hsl=$this->db->query("update tbl_rekap set judul_rekap='$judul',tanggal_rekap='$tanggal',bulan_rekap='$bulan',tahun_rekap='$tahun',media_rekap='$media' where id_rekap='$kode'");
		return $hsl;
	}

	function hapus_rekap($kode){
		$hsl=$this->db->query("delete from tbl_rekap where id_rekap='$kode'");
		return $hsl;
	}
	

}