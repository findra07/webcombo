<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KatalogModel extends CI_Model
{
    public function allproduk($limit, $start, $nama_produk, $id_subkategori, $id_merk, $id)
    {
        $status_product = array('0', '4');
        $hidden = array('000000017021', '000000020631', '000000020778', '000000021166', '000000023053');

        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_product, tb.status_barang, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, tk.nama_kategori, ts.stok_update, tfb.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'left')
            ->join('tabel_kategori tk', 'tk.id_kategori = tsub.id_kategori', 'inner')
            ->join('tabel_foto_barang tfb', 'tfb.id_barang = tb.id_barang', 'left');

        $keywords = explode(' ', $nama_produk);

        foreach ($keywords as $keyword) {
            if (!empty($keyword)) {
                $this->db->like('tb.nama_barang', $keyword, 'both');
            }
        }
        // if ($nama_produk !== "") {
        //     $this->db->like('tb.nama_barang', $nama_produk, 'both');
        // }

        if ($id == "null") {
            "";
        } else {
            $this->db->like('tsub.id_kategori', $id, 'both');
        }

        if ($id_subkategori == "null") {
            "";
        } else {
            $this->db->like('tsub.id_subkategori', $id_subkategori, 'both');
        }

        if ($id_merk == "null") {
            "";
        } else {
            $this->db->like('tb.id_merk', $id_merk, 'both');
        }

        $this->db->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)->where('ts.id_gudang', '000000000015');
        $this->db->where_not_in('tb.id_barang', $hidden);

        $this->db->limit($limit, $start);
        $this->db->order_by('tb.kode_barang', 'ASC');
        $this->db->group_by('tb.id_barang');

        $data = $this->db->get();

        return $data->result();
    }


    public function allkategori()
    {
        $data = $this->db->query("SELECT tk.id_kategori, tk.status_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.status_subkategori, tsub.nama_subkategori, tb.status_product, tb.id_barang, tb.nama_barang, ts.id_gudang, COUNT(tb.nama_barang) AS jml_brg, SUM(CASE WHEN ts.id_gudang IS null THEN 1 END) as jml_null, SUM(CASE WHEN ts.id_gudang IS NOT null THEN 1 END) AS jml_notnull
        FROM tabel_barang tb 
        INNER JOIN tabel_subkategori tsub ON tb.id_subkategori = tsub.id_subkategori 
        INNER JOIN tabel_kategori tk ON tsub.id_kategori = tk.id_kategori        
        LEFT JOIN tabel_stok ts ON ts.id_barang = tb.id_barang
        WHERE tsub.status_subkategori = '0' AND tk.status_kategori='0' AND tb.status_barang='0' AND (tb.status_product='0' OR tb.status_product='4')        
        GROUP BY tsub.id_subkategori
        HAVING SUM(CASE WHEN ts.id_gudang IS NOT NULL THEN 1 ELSE 0 END) != 0
        ORDER BY tk.id_kategori ASC, tsub.nama_subkategori ASC")->result();

        return $data;
    }


    public function judulkategori()
    {
        $data = $this->db->query("SELECT id_kategori, nama_kategori, status_kategori 
        FROM tabel_kategori 
        WHERE status_kategori = '0' AND id_kategori ='000000000169' 
        OR id_kategori= '000000000172' OR id_kategori='000000000183' OR id_kategori='000000000181' OR id_kategori='000000000179' OR id_kategori='000000000178' OR id_kategori='000000000175' 
        GROUP BY nama_kategori ASC")->result();

        return $data;
    }

    public function allmerk($idsub, $id, $idmerk)
    {
        if ($idmerk === "") {
            if ($id === "") {
                if ($idsub === "") {
                    $filter = "WHERE tm.status_merk = 0 ";
                } else {
                    $filter = "WHERE tm.status_merk = 0 AND tsub.id_subkategori LIKE '%$idsub%' ";
                }
            } else {
                if ($idsub === "") {
                    $filter = "WHERE tm.status_merk = 0 AND tk.id_kategori LIKE '%$id%'";
                } else {
                    $filter = "WHERE tm.status_merk = 0 AND tk.id_kategori LIKE '%$id%' AND tsub.id_subkategori LIKE '%$idsub%' ";
                }
            }
        } else {
            if ($id === "") {
                if ($idsub === "") {
                    $filter = "WHERE tm.status_merk = 0 AND tm.id_merk LIKE '%$idmerk%'";
                } else {
                    $filter = "WHERE tm.status_merk = 0 AND tsub.id_subkategori LIKE '%$idsub%' AND tm.id_merk LIKE '%$idmerk%' ";
                }
            } else {
                if ($idsub === "") {
                    $filter = "WHERE tm.status_merk = 0 AND tk.id_kategori LIKE '%$id%' AND tm.id_merk LIKE '%$idmerk%'";
                } else {
                    $filter = "WHERE tm.status_merk = 0 AND tk.id_kategori LIKE '%$id%' AND tsub.id_subkategori LIKE '%$idsub%' AND tm.id_merk LIKE '%$idmerk%' ";
                }
            }
        }

        $data = $this->db->query("SELECT DISTINCT tb.id_barang, tb.id_merk, tb.status_barang, tb.status_product, tk.id_kategori, tk.nama_kategori, tsub.id_subkategori, tsub.nama_subkategori, tm.id_merk, tm.nama_merk, tm.status_merk
        FROM tabel_barang tb 
        INNER JOIN tabel_subkategori tsub ON tb.id_subkategori = tsub.id_subkategori 
        INNER JOIN tabel_kategori tk ON tsub.id_kategori = tk.id_kategori 
        INNER JOIN tabel_merk tm ON tb.id_merk = tm.id_merk 
        INNER JOIN tabel_stok ts ON tb.id_barang = ts.id_barang        
        " . $filter . " 
        GROUP BY tm.id_merk
        LIMIT 20")->result();

        return $data;
    }

    public function jmltotalproduk($nama_produk, $id_subkategori, $id_merk, $id)
    {
        $status_product = array('0', '4');

        $this->db->select('tb.id_barang, tb.id_satuan, tb.id_subkategori, tb.id_merk, tb.kode_barang, tb.status_barang, tb.status_product, tb.nama_barang, tb.harga_jual, tb.jenis_barang, tsat.nama_satuan, tsub.id_subkategori, tsub.nama_subkategori, tsub.id_kategori, ts.stok_update, tfb.nama_foto_barang')
            ->from('tabel_barang tb')
            ->join('tabel_subkategori tsub', 'tb.id_subkategori = tsub.id_subkategori', 'inner')
            ->join('tabel_satuan tsat', 'tb.id_satuan = tsat.id_satuan', 'inner')
            ->join('tabel_merk tm', 'tb.id_merk = tm.id_merk', 'inner')
            ->join('tabel_stok ts', 'tb.id_barang = ts.id_barang', 'inner')
            ->join('tabel_foto_barang tfb', 'tfb.id_barang = tb.id_barang', 'left');

        $keywords = explode(' ', $nama_produk);

        foreach ($keywords as $keyword) {
            if (!empty($keyword)) {
                $this->db->like('tb.nama_barang', $keyword, 'both');
            }
        }

        // if ($nama_produk !== "") {
        //     $this->db->like('tb.nama_barang', $nama_produk, 'both');
        // }

        if ($id == "null") {
            "";
        } else {
            $this->db->like('tsub.id_kategori', $id, 'both');
        }

        if ($id_subkategori == "null") {
            "";
        } else {
            $this->db->like('tsub.id_subkategori', $id_subkategori, 'both');
        }

        if ($id_merk == "null") {
            "";
        } else {
            $this->db->like('tb.id_merk', $id_merk, 'both');
        }

        $this->db->where_in('tb.status_product', $status_product)->where('tb.status_barang', 0)->where('ts.id_gudang', '000000000015');

        // $this->db->limit($limit, $start);
        $this->db->order_by('tb.kode_barang', 'ASC');
        $this->db->group_by('tb.id_barang');

        $data = $this->db->get();

        return $data->num_rows();
    }

    public function trenpenjualan()
    {
        $data = $this->db->query('SELECT 
        tk.id_kategori, 
        tk.nama_kategori, 
        tb.id_barang,
        tb.nama_barang, 
        tb.id_subkategori, 
        tsub.nama_subkategori, 
        tb.harga_jual, 
        tb.status_barang, 
        tb.status_product, 
        ts.stok_jual, 
        ts.stok_update,
        ts.stok_jual * tb.harga_jual AS rupiah,
        tfb.nama_foto_barang
    FROM 
        tabel_barang tb 
    JOIN 
        tabel_stok ts ON ts.id_barang = tb.id_barang 
    JOIN 
        tabel_subkategori tsub ON tb.id_subkategori = tsub.id_subkategori 
    JOIN 
        tabel_kategori tk ON tsub.id_kategori = tk.id_kategori 
    LEFT JOIN
        tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang
    JOIN 
        (SELECT 
            tsub.id_kategori, 
            MAX(ts.stok_jual * tb.harga_jual) AS max_rupiah
        FROM 
            tabel_stok ts 
        JOIN 
            tabel_barang tb ON ts.id_barang = tb.id_barang 
        JOIN 
            tabel_subkategori tsub ON tb.id_subkategori = tsub.id_subkategori 
        GROUP BY 
            tsub.id_kategori
        ) max_rupiah_per_kategori ON tsub.id_kategori = max_rupiah_per_kategori.id_kategori AND ts.stok_jual * tb.harga_jual = max_rupiah_per_kategori.max_rupiah
    ORDER BY 
        rupiah DESC
        
        LIMIT 6')->result();

        return $data;
    }

    public function sectionbarang1()
    {
        $data = $this->db->query("SELECT tb.id_barang, tb.kode_barang, tb.nama_barang, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tb.id_subkategori, tsub.nama_subkategori, tb.id_merk, tm.nama_merk, tb.status_barang, tb.status_product, tfb.nama_foto_barang, ts.stok_jual 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang WHERE tb.status_barang ='0' AND tk.id_kategori IN('000000000169','000000000149')
        ORDER BY ts.stok_jual DESC LIMIT 6")->result();

        return $data;
    }

    public function sectionbarang2()
    {
        $data = $this->db->query("SELECT tb.id_barang, tb.kode_barang, tb.nama_barang, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tb.id_subkategori, tsub.nama_subkategori, tb.id_merk, tm.nama_merk, tb.status_barang, tb.status_product, tfb.nama_foto_barang, ts.stok_jual 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang WHERE tb.status_barang ='0' AND tk.id_kategori = '000000000181'
        ORDER BY ts.stok_jual DESC LIMIT 6")->result();

        return $data;
    }

    public function sectionbarang3()
    {
        $data = $this->db->query("SELECT tb.id_barang, tb.kode_barang, tb.nama_barang, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tb.id_subkategori, tsub.nama_subkategori, tb.id_merk, tm.nama_merk, tb.status_barang, tb.status_product, tfb.nama_foto_barang, ts.stok_jual 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang 
        WHERE tb.status_barang ='0' AND tk.id_kategori = '000000000180' AND tsub.nama_subkategori LIKE '%lampu%' AND tb.nama_barang NOT LIKE '%fitting%' AND tm.nama_merk != 'Wandi' 
        GROUP BY tsub.id_subkategori 
        ORDER BY `tsub`.`nama_subkategori` ASC LIMIT 6")->result();

        return $data;
    }

    public function sectionbarang4()
    {

        $data = $this->db->query("SELECT tb.id_barang, tb.kode_barang, tb.nama_barang, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tb.id_subkategori, tsub.nama_subkategori, tb.id_merk, tm.nama_merk, tb.status_barang, tb.status_product, tfb.nama_foto_barang, ts.stok_jual 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang WHERE tb.status_barang ='0' AND tsub.id_subkategori IN ('000000000614', '000000000360', '000000000182', '000000000195', '000000000197', '000000000615', '000000000519', '000000000181', '000000000183', '000000000381')
        ORDER BY ts.stok_jual DESC LIMIT 6")->result();

        return $data;
    }

    public function sectionbarang5()
    {
        $data = $this->db->query("SELECT tb.id_barang, tb.kode_barang, tb.nama_barang, tb.harga_jual, tk.id_kategori, tk.nama_kategori, tb.id_subkategori, tsub.nama_subkategori, tb.id_merk, tm.nama_merk, tb.status_barang, tb.status_product, tfb.nama_foto_barang, ts.stok_jual 
        FROM tabel_barang tb 
        JOIN tabel_subkategori tsub ON tsub.id_subkategori = tb.id_subkategori 
        JOIN tabel_kategori tk ON tk.id_kategori = tsub.id_kategori 
        JOIN tabel_stok ts ON ts.id_barang = tb.id_barang 
        JOIN tabel_merk tm ON tm.id_merk = tb.id_merk 
        LEFT JOIN tabel_foto_barang tfb ON tfb.id_barang = tb.id_barang WHERE tb.status_barang ='0' AND tk.id_kategori = '000000000179' AND tb.nama_barang LIKE '%mesin%'
        ORDER BY ts.stok_jual DESC LIMIT 6")->result();

        return $data;
    }

    public function jml_penjualan()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jml FROM `tabel_jual` WHERE date(tanggal_jual) = CURRENT_DATE()")->row();

        return $data;
    }

    public function jml_pengiriman()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jml FROM `tabel_surat_jalan` WHERE date(tanggal_surat_jalan) = CURRENT_DATE()")->row();

        return $data;
    }

    public function jml_kritiksaran()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jml FROM visits_sendmail WHERE date(submitted_at) = CURRENT_DATE()")->row();

        return $data;
    }

    public function total_penjualan()
    {
        $data = $this->db->query("SELECT *, sum(tabel_jual.total_jual) AS rupiah FROM `tabel_jual` WHERE date(tabel_jual.tanggal_jual) = CURRENT_DATE()")->row();

        return $data;
    }
}

/* End of file KatalogModel.php */
