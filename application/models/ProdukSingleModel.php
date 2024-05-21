<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukSingleModel extends CI_Model
{
    public function produkdetail($id_barang)
    {
        $detail = $this->db->query("SELECT tb.id_barang, tb.nama_barang, tb.nama_singkat, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tfb.id_foto_barang, tfb.nama_foto_barang, ts.stok_update 
        FROM tabel_barang tb 
        LEFT JOIN tabel_foto_barang tfb ON tb.id_barang = tfb.id_barang
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang
        WHERE tb.status_barang = '0' AND tb.id_barang = '$id_barang'")->row();

        return $detail;
    }
}

/* End of file ModelName.php */
