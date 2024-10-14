<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CatModel extends CI_Model
{
    // function catexplore()
    // {
    //     $data = $this->db->query("SELECT 
    //     id_kategori, 
    //     nama_kategori, 
    //     id_barang, 
    //     nama_barang, 
    //     id_merk, 
    //     nama_merk, 
    //     foto,
    //     stok_jual
    // FROM 
    //     (
    //         SELECT 
    //             tk.id_kategori, 
    //             tk.nama_kategori, 
    //             tb.id_barang, 
    //             tb.nama_barang, 
    //             tm.id_merk, 
    //             tm.nama_merk,
    //             tm.foto,
    //             ts.stok_jual,
    //             ROW_NUMBER() OVER(PARTITION BY tm.id_merk ORDER BY ts.stok_jual DESC) AS rn
    //         FROM 
    //             tabel_barang tb 
    //         JOIN 
    //             tabel_merk tm ON tm.id_merk = tb.id_merk
    //         JOIN 
    //             tabel_stok ts ON ts.id_barang = tb.id_barang
    //         JOIN 
    //             tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori
    //         JOIN 
    //             tabel_kategori tk ON tk.id_kategori = tsub.id_kategori
    //         WHERE 
    //             tk.id_kategori = '000000000183' 
    //             AND tb.nama_barang LIKE '%cat%' 
    //             AND ts.stok_jual >= 7
    //             AND tm.id_merk NOT IN('000000000092', '000000000101', '000000000292', '000000000294', '000000000307', '000000000339', '000000000341')

    //     ) AS subquery
    // WHERE 
    //     rn <= 3 OR rn IS NULL
    // ORDER BY subquery.id_merk ASC, rn ASC")->result();

    //     return $data;
    // }

    // public function merkdulux1()
    // {
    //     $data = $this->db->query("SELECT 
    //     id_kategori, 
    //     nama_kategori, 
    //     id_barang, 
    //     nama_barang, 
    //     harga_jual,
    //     nama_foto_barang,
    //     id_merk, 
    //     nama_merk, 
    //     foto,
    //     stok_jual,
    //     stok_update
    // FROM 
    //     (
    //         SELECT 
    //             tk.id_kategori, 
    //             tk.nama_kategori, 
    //             tb.id_barang, 
    //             tb.nama_barang, 
    //             tb.harga_jual,
    //         tfb.nama_foto_barang,
    //             tm.id_merk, 
    //             tm.nama_merk,
    //             tm.foto,
    //             ts.stok_jual,
    //             ts.stok_update,
    //             ROW_NUMBER() OVER(PARTITION BY tm.id_merk ORDER BY ts.stok_jual DESC) AS rn
    //         FROM 
    //             tabel_barang tb 
    //         JOIN 
    //             tabel_merk tm ON tm.id_merk = tb.id_merk
    //         JOIN 
    //             tabel_stok ts ON ts.id_barang = tb.id_barang
    //         JOIN 
    //             tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori
    //         JOIN 
    //             tabel_kategori tk ON tk.id_kategori = tsub.id_kategori
    //         JOIN
    //             tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang
    //         WHERE 
    //             tk.id_kategori = '000000000183' 
    //             AND tb.nama_barang LIKE '%cat%' 
    //             AND ts.stok_jual >= 7
    //             AND tm.id_merk= '000000000086'

    //     ) AS subquery
    // WHERE 
    //     rn <= 3 OR rn IS NULL
    // ORDER BY subquery.id_merk ASC, rn ASC")->result();

    //     return $data;
    // }

    public function merkdulux()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000086', '000000000092') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkavian()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000097', '000000000106', '000000000341','000000000339') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkjotun()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000099') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkpropan()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000100') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merknippon()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tm.id_merk IN('000000000300') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkpremio()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000342') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkshintex()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000094') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkmowilex()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000091') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkdecolith()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tm.id_merk IN('000000000095') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merktaka()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000393') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }

    public function merkaltex()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tb.id_barang, tb.nama_barang, tb.harga_jual, tfb.nama_foto_barang, ts.stok_jual, ts.stok_update 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tk.id_kategori = '000000000183' AND tb.nama_barang LIKE '%cat%' AND tm.id_merk IN('000000000096') 
        ORDER BY `ts`.`stok_jual` DESC 
        LIMIT 3")->result();

        return $data;
    }
}

/* End of file CatModel.php */
