<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

    public function index()
    {
        $data['tbl_surat'] = $this->m_surat->get_data()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_surat');
        $this->load->view('surat/v_surat', $data);
        $this->load->view('templates/v_footer');
    }

    public function input_surat()
    {
        $data['nama_surat'] = $this->m_surat->getjenissurat()->result();
        $data['nama_user'] = $this->m_surat->getuser()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_surat');
        $this->load->view("surat/v_tambah_surat", $data);
        $this->load->view('templates/v_footer');
    }
    public function tambah_aksi()
    {
        if ($this->input->method() === 'post') {
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH . '/upload/surat/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|PDF';
            $config['file_name']            = str_replace(" ", "-", date("y-m-d") . "-" . $_FILES['upload_file']['name']);
            $config['overwrite']            = true;
            $config['max_size']             = 10240; // 10MB
            $config['max_width'] = '19200';
            $config['max_height'] = '12800';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('upload_file')) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $this->upload->data();
                $id_surat = $this->input->post('id_surat');
                $no_surat = $this->input->post('no_surat');
                $tanggal = $this->input->post('tanggal');
                $perihal = $this->input->post('perihal');
                $pengirim = $this->input->post('pengirim');
                $penerima = $this->input->post('penerima');
                $id_jenis_surat = $this->input->post('id_jenis_surat');
                $id_user = $this->input->post('id_user');
                $data = array(
                    'id_surat' => $id_surat,
                    'no_surat' => $no_surat,
                    'tanggal' => $tanggal,
                    'perihal' => $perihal,
                    'pengirim' => $pengirim,
                    'penerima' => $penerima,
                    'id_jenis_surat' => $id_jenis_surat,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );

                $this->m_surat->input_data($data, 'tbl_surat');
                $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect(base_url() . 'surat');
            }
        }
    }
    public function edit_surat($id)
    {
        $where = array('id_surat' => $id);
        $data['nama_surat'] = $this->m_surat->getjenissurat()->result();
        $data['nama_user'] = $this->m_surat->getuser()->result();
        $data['tbl_surat'] = $this->m_surat->edit_data($where, 'tbl_surat')->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_surat');
        $this->load->view("surat/v_edit_surat", $data);
        $this->load->view('templates/v_footer');
    }
    public function update_surat()
    {
        $id = $this->input->post('id_surat');
        $no_surat = $this->input->post('no_surat');
        $tanggal = $this->input->post('tanggal');
        $perihal = $this->input->post('perihal');
        $pengirim = $this->input->post('pengirim');
        $penerima = $this->input->post('penerima');
        $id_jenis_surat = $this->input->post('id_jenis_surat');
        $id_user = $this->input->post('id_user');

        if ($_FILES['upload_file']['name'] == null) {
            $data = array(
                'id_surat' => $id,
                'no_surat' => $no_surat,
                'tanggal' => $tanggal,
                'perihal' => $perihal,
                'pengirim' => $pengirim,
                'penerima' => $penerima,
                'id_jenis_surat' => $id_jenis_surat,
                'id_user' => $id_user,
            );
            $query = $this->m_surat->update_data(array('id_surat' => $id), $data, 'tbl_surat');
        } else {
            $_image = $this->db->get_where('tbl_surat', ['id_surat' => $id])->row();
            $config['upload_path']          = FCPATH . '/upload/surat/';
            $config['allowed_types']        = 'jpg|gif|jpeg|png|pdf|PDF';
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
                    'id_surat' => $id,
                    'no_surat' => $no_surat,
                    'tanggal' => $tanggal,
                    'perihal' => $perihal,
                    'pengirim' => $pengirim,
                    'penerima' => $penerima,
                    'id_jenis_surat' => $id_jenis_surat,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );
                $query = $this->m_surat->update_data(array('id_surat' => $id), $data, 'tbl_surat');
                unlink(FCPATH . '/upload/surat/' . $_image->upload_file);
            }
        }
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(base_url() . 'surat');
    }
    public function hapus($id)
    {
        $_image = $this->db->get_where('tbl_surat', ['id_surat' => $id])->row();
        $where = array('id_surat' => $id);
        $this->m_surat->hapus_data($where, ('tbl_surat'));
        unlink(FCPATH . '/upload/surat/' . $_image->upload_file);
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('surat/index');
    }
    public function filter()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_surat = $this->m_surat->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'surat/cetak';
            $label = 'Semua Data Surat ';
        } else { // Jika terisi
            $tbl_surat = $this->m_surat->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'surat/cetak?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir;
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['tbl_surat'] = $tbl_surat;
        $data['url_cetak'] = base_url('/' . $url_cetak);
        $data['label'] = $label;

        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_laporan');
        $this->load->view('surat/list', $data);
        $this->load->view('templates/v_footer');
    }

    public function cetak()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_surat = $this->m_surat->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $label = 'Semua Surat ';
        } else { // Jika terisi
            $tbl_surat = $this->m_surat->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['label'] = $label;
        $data['tbl_surat'] = $tbl_surat;

        ob_start();
        $this->load->view('surat/print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/libraries/html2pdf/autoload.php'; // Load plugin html2pdfnya

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');  // Settingan PDFnya
        $pdf->WriteHTML($html);
        $pdf->Output('laporan.pdf', 'D');
    }
}
