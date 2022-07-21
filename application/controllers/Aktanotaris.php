<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aktanotaris extends CI_Controller
{

    public function index()
    {

        $data['nama_user'] = $this->m_aktanotaris->getAllGroups()->result();
        $data['tbl_aktanotaris'] = $this->m_aktanotaris->get_data()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktanotaris');
        $this->load->view('aktanotaris/v_aktanotaris', $data);
        $this->load->view('templates/v_footer');
    }

    public function input_aktanotaris()
    {
        $data['nama_user'] = $this->m_aktanotaris->getAllGroups()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktanotaris');
        $this->load->view("aktanotaris/v_tambah_aktanotaris", $data);
        $this->load->view('templates/v_footer');
    }
    public function tambah_aksi()
    {

        if ($this->input->method() === 'post') {
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH . '/upload/aktanotaris/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|PDF';
            $config['file_name']            = str_replace(" ", "-", date("y-m-d") . "-" . $_FILES['upload_file']['name']);
            $config['overwrite']            = true;
            $config['max_size']             = 10240; // 1MB
            $config['max_width'] = '19200';
            $config['max_height'] = '12800';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('upload_file')) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $this->upload->data();
                $id_aktanotaris = $this->input->post('id_aktanotaris');
                $no_aktanotaris = $this->input->post('no_aktanotaris');
                $tanggal = $this->input->post('tanggal');
                $jenis_aktanotaris = $this->input->post('jenis_aktanotaris');
                $nama_penghadap = $this->input->post('nama_penghadap');
                $id_user = $this->input->post('id_user');
                $keterangan = $this->input->post('keterangan');
                $data = array(
                    'id_aktanotaris' => $id_aktanotaris,
                    'no_aktanotaris' => $no_aktanotaris,
                    'tanggal' => $tanggal,
                    'jenis_aktanotaris' => $jenis_aktanotaris,
                    'nama_penghadap' => $nama_penghadap,
                    'keterangan' => $keterangan,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );

                $this->m_aktanotaris->input_data($data, 'tbl_aktanotaris');
                $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect(base_url() . 'aktanotaris');
            }
        }
    }

    // $this->load->view('admin/setting_upload_upload_file.php', $data);

    public function edit_aktanotaris($id)
    {
        $where = array('id_aktanotaris' => $id);
        $data['nama_user'] = $this->m_aktanotaris->getAllGroups()->result();
        $data['tbl_aktanotaris'] = $this->m_aktanotaris->edit_data($where, 'tbl_aktanotaris')->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktanotaris');
        $this->load->view("aktanotaris/v_edit_aktanotaris", $data);
        $this->load->view('templates/v_footer');
    }
    public function update_aktanotaris()
    {
        $no_aktanotaris = $this->input->post('no_aktanotaris');
        $tanggal = $this->input->post('tanggal');
        $jenis_aktanotaris = $this->input->post('jenis_aktanotaris');
        $nama_penghadap = $this->input->post('nama_penghadap');
        $keterangan = $this->input->post('keterangan');
        $id_user = $this->input->post('id_user');
        $id = $this->input->post('id_aktanotaris');
        if ($_FILES['upload_file']['name'] == null) {
            print_r("cek kosonga");
            $data = array(
                'no_aktanotaris' => $no_aktanotaris,
                'tanggal' => $tanggal,
                'jenis_aktanotaris' => $jenis_aktanotaris,
                'nama_penghadap' => $nama_penghadap,
                'keterangan' => $keterangan,
                'id_user' => $id_user,
            );
            $query = $this->m_aktanotaris->update_data(array('id_aktanotaris' => $id), $data, 'tbl_aktanotaris');
        } else {
            $_image = $this->db->get_where('tbl_aktanotaris', ['id_aktanotaris' => $id])->row();
            $config['upload_path']          = FCPATH . '/upload/aktanotaris/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
            $config['file_name']            = str_replace(" ", "-", date("y-m-d") . "-" . $_FILES['upload_file']['name']);
            $config['overwrite']            = true;
            $config['max_size']             = 10240; // 1MB
            $config['max_width'] = '19200';
            $config['max_height'] = '12800';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('upload_file')) {
                echo $this->upload->display_errors();
            } else {
                // $_data = array('upload_data' => $this->upload->data());
                $data = array(
                    'no_aktanotaris' => $no_aktanotaris,
                    'tanggal' => $tanggal,
                    'jenis_aktanotaris' => $jenis_aktanotaris,
                    'nama_penghadap' => $nama_penghadap,
                    'keterangan' => $keterangan,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );
                $query = $this->m_aktanotaris->update_data(array('id_aktanotaris' => $id), $data, 'tbl_aktanotaris');
                unlink(FCPATH . '/upload/aktanotaris/' . $_image->upload_file);
            }
        }
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('aktanotaris/index');
    }

    public function hapus($id)
    {
        $_image = $this->db->get_where('tbl_aktanotaris', ['id_aktanotaris' => $id])->row();
        $where = array('id_aktanotaris' => $id);
        $this->m_aktanotaris->hapus_data($where, ('tbl_aktanotaris'));
        unlink(FCPATH . '/upload/aktanotaris/' . $_image->upload_file);
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('aktanotaris/index');
    }
    public function filter()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_aktanotaris = $this->m_aktanotaris->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'aktanotaris/cetak';
            $label = 'Semua Data Akta Notaris';
        } else { // Jika terisi
            $tbl_aktanotaris = $this->m_aktanotaris->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'aktanotaris/cetak?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir;
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['tbl_aktanotaris'] = $tbl_aktanotaris;
        $data['url_cetak'] = base_url('/' . $url_cetak);
        $data['label'] = $label;

        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_laporan');
        $this->load->view('aktanotaris/list', $data);
        $this->load->view('templates/v_footer');
    }

    public function cetak()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_aktanotaris = $this->m_aktanotaris->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $label = 'Semua Data Akta Notaris';
        } else { // Jika terisi
            $tbl_aktanotaris = $this->m_aktanotaris->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['label'] = $label;
        $data['tbl_aktanotaris'] = $tbl_aktanotaris;

        ob_start();
        $this->load->view('aktanotaris/print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/libraries/html2pdf/autoload.php'; // Load plugin html2pdfnya

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');  // Settingan PDFnya
        $pdf->WriteHTML($html);
        $pdf->Output('laporan.pdf', 'D');
    }
}
