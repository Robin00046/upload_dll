<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aktappat extends CI_Controller
{
    public function index()
    {
        $data['tbl_aktappat'] = $this->m_aktappat->get_data()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktappat');
        $this->load->view('aktappat/v_aktappat', $data);
        $this->load->view('templates/v_footer');
    }
    public function input_aktappat()
    {
        $data['nama_user'] = $this->m_aktappat->getAllGroups()->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktappat');
        $this->load->view("aktappat/v_tambah_aktappat", $data);
        $this->load->view('templates/v_footer');
    }
    public function tambah_aksi()
    {
        if ($this->input->method() === 'post') {
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH . '/upload/aktappat/';
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
                $id_aktappat = $this->input->post('id_aktappat');
                $no_aktappat = $this->input->post('no_aktappat');
                $tanggal = $this->input->post('tanggal');
                $jenis_aktappat = $this->input->post('jenis_aktappat');
                $pihak1 = $this->input->post('pihak1');
                $pihak2 = $this->input->post('pihak2');
                $keterangan = $this->input->post('keterangan');
                $id_user = $this->input->post('id_user');
                $data = array(
                    'id_aktappat' => $id_aktappat,
                    'no_aktappat' => $no_aktappat,
                    'tanggal' => $tanggal,
                    'jenis_aktappat' => $jenis_aktappat,
                    'pihak1' => $pihak1,
                    'pihak2' => $pihak2,
                    'keterangan' => $keterangan,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );

                $this->m_aktappat->input_data($data, 'tbl_aktappat');
                $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect(base_url() . 'aktappat');
            }
        }
    }
    public function edit_aktappat($id)
    {
        $where = array('id_aktappat' => $id);
        $data['nama_user'] = $this->m_aktappat->getAllGroups()->result();
        $data['tbl_aktappat'] = $this->m_aktappat->edit_data($where, 'tbl_aktappat')->result();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_aktappat');
        $this->load->view("aktappat/v_edit_aktappat", $data);
        $this->load->view('templates/v_footer');
    }
    public function update_aktappat()
    {
        $id = $this->input->post('id_aktappat');
        $no_aktappat = $this->input->post('no_aktappat');
        $tanggal = $this->input->post('tanggal');
        $jenis_aktappat = $this->input->post('jenis_aktappat');
        $pihak1 = $this->input->post('pihak1');
        $pihak2 = $this->input->post('pihak2');
        $keterangan = $this->input->post('keterangan');
        $id_user = $this->input->post('id_user');
        if ($_FILES['upload_file']['name'] == null) {
            $data = array(
                'no_aktappat' => $no_aktappat,
                'tanggal' => $tanggal,
                'jenis_aktappat' => $jenis_aktappat,
                'pihak1' => $pihak1,
                'pihak2' => $pihak2,
                'keterangan' => $keterangan,
                'id_user' => $id_user,
            );
            $query = $this->m_aktappat->update_data(array('id_aktappat' => $id), $data, 'tbl_aktappat');
        } else {
            $_image = $this->db->get_where('tbl_aktappat', ['id_aktappat' => $id])->row();
            $config['upload_path']          = FCPATH . '/upload/aktappat/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|PDF';
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
                    'no_aktappat' => $no_aktappat,
                    'tanggal' => $tanggal,
                    'jenis_aktappat' => $jenis_aktappat,
                    'pihak1' => $pihak1,
                    'pihak2' => $pihak2,
                    'keterangan' => $keterangan,
                    'id_user' => $id_user,
                    'upload_file' => $config['file_name'],
                );
                $query = $this->m_aktappat->update_data(array('id_aktappat' => $id), $data, 'tbl_aktappat');
                unlink(FCPATH . '/upload/aktappat/' . $_image->upload_file);
            }
        }
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(base_url() . 'aktappat');
    }
    public function hapus($id)
    {
        $_image = $this->db->get_where('tbl_aktappat', ['id_aktappat' => $id])->row();
        $where = array('id_aktappat' => $id);
        $this->m_aktappat->hapus_data($where, ('tbl_aktappat'));
        unlink(FCPATH . '/upload/aktappat/' . $_image->upload_file);
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('aktappat/index');
    }
    public function filter()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_aktappat = $this->m_aktappat->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $url_cetak = 'aktappat/cetak';
            $label = 'Semua Data Akta ppat';
        } else { // Jika terisi
            $tbl_aktappat = $this->m_aktappat->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $url_cetak = 'aktappat/cetak?tgl_awal=' . $tgl_awal . '&tgl_akhir=' . $tgl_akhir;
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['tbl_aktappat'] = $tbl_aktappat;
        $data['url_cetak'] = base_url('/' . $url_cetak);
        $data['label'] = $label;

        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_topbar');
        $this->load->view('templates/v_head_laporan');
        $this->load->view('aktappat/list', $data);
        $this->load->view('templates/v_footer');
    }

    public function cetak()
    {
        $tgl_awal = $this->input->get('tgl_awal'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = $this->input->get('tgl_akhir'); // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if (empty($tgl_awal) or empty($tgl_akhir)) { // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            $tbl_aktappat = $this->m_aktappat->get_data()->result();;  // Panggil fungsi view_all yang ada di TransaksiModel
            $label = 'Semua Akta ppat';
        } else { // Jika terisi
            $tbl_aktappat = $this->m_aktappat->view_by_date($tgl_awal, $tgl_akhir);  // Panggil fungsi view_by_date yang ada di TransaksiModel
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal ' . $tgl_awal . ' s/d ' . $tgl_akhir;
        }

        $data['label'] = $label;
        $data['tbl_aktappat'] = $tbl_aktappat;

        ob_start();
        $this->load->view('aktappat/print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/libraries/html2pdf/autoload.php'; // Load plugin html2pdfnya

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');  // Settingan PDFnya
        $pdf->WriteHTML($html);
        $pdf->Output('laporan.pdf', 'D');
    }
}
