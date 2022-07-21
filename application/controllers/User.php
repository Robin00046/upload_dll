<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['tbl_user'] = $this->m_user->get_data()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_user');
        $this->load->view('user/v_user', $data);
        $this->load->view('templates/v_footer');
    }

    public function input_user()
    {
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_user');
        $this->load->view("user/v_tambah_user");
        $this->load->view('templates/v_footer');
    }
    public function tambah_aksi()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $nama_user = $this->input->post('nama_user');
        $id_jenis_user = $this->input->post('id_jenis_user');

        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'id_jenis_user' => $id_jenis_user,

            'nama_user' => $nama_user,
        );

        $this->m_user->input_data($data, 'tbl_user');
        redirect(base_url() . 'user');
    }

    // $this->load->view('admin/setting_upload_upload_file.php', $data);

    public function edit_user($id)
    {
        $where = array('id_user' => $id);
        $data['tbl_user'] = $this->m_user->edit_data($where, 'tbl_user')->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_user');
        $this->load->view("user/v_edit_user", $data);
        $this->load->view('templates/v_footer');
    }
    public function update_user()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $nama_user = $this->input->post('nama_user');
        $id_jenis_user = $this->input->post('id_jenis_user');
        $where = array(
            'id_user' => $id_user
        );
        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'id_jenis_user' => $id_jenis_user,

            'nama_user' => $nama_user,
        );

        $this->m_user->update_data($where, $data, 'tbl_user');
        redirect(base_url() . 'user');
    }

    public function hapus($id)
    {

        $where = array('id_user' => $id);
        $this->m_user->hapus_data($where, ('tbl_user'));

        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('user/index');
    }
    public function filter()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_user = $this->m_user->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'user/cetak';
            $label = 'Semua Data Akta Notaris';
        } else { // Jika terisi
            $tbl_user = $this->m_user->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'user/cetak?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir;
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['tbl_user'] = $tbl_user;
        $data['url_cetak'] = base_url('/' . $url_cetak);
        $data['label'] = $label;

        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_laporan');
        $this->load->view('user/list', $data);
        $this->load->view('templates/v_footer');
    }

    public function cetak()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_user = $this->m_user->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $label = 'Semua Data Akta Notaris';
        } else { // Jika terisi
            $tbl_user = $this->m_user->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['label'] = $label;
        $data['tbl_user'] = $tbl_user;

        ob_start();
        $this->load->view('user/print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/libraries/html2pdf/autoload.php'; // Load plugin html2pdfnya

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');  // Settingan PDFnya
        $pdf->WriteHTML($html);
        $pdf->Output('laporan.pdf', 'D');
    }
}
