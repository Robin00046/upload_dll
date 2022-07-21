<?php
class M_Aktappat extends CI_Model
{
    public function get_data()
    {
        $this->db->join('tbl_user', 'tbl_aktappat.id_user=tbl_user.id_user');
        return $this->db->get('tbl_aktappat');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->delete($table, $where);
    }
    public function edit_data($where, $table)
    {
        $this->db->join('tbl_user', 'tbl_aktappat.id_user=tbl_user.id_user');
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function view_by_date($tgl_awal, $tgl_akhir)
    {
        $tgl_awal = $this->db->escape($tgl_awal);
        $tgl_akhir = $this->db->escape($tgl_akhir);
        $this->db->join('tbl_user', 'tbl_aktappat.id_user=tbl_user.id_user');
        $this->db->where('DATE(tanggal) BETWEEN ' . $tgl_awal . ' AND ' . $tgl_akhir); // Tambahkan where tanggal nya

        return $this->db->get('tbl_aktappat')->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }
    public function getAllGroups()
    {
        return $this->db->get('tbl_user');
    }
}
