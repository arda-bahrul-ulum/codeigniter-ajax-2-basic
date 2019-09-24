<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    // index
    function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('home/index', $data);
    }

    // ambil_data
    public function ambil_data()
    {
        $data = $this->m_mahasiswa->ambil_data_model('tb_mahasiswa')->result();
        echo json_encode($data);
    }

    // tambah_data
    public function tambah_data()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $fullname = $this->input->post('fullname', true);
        $gender = $this->input->post('gender', true);
        $address = $this->input->post('address', true);
        $religion = $this->input->post('religion', true);
        $is_active = $this->input->post('is_active', true);

        if ($username == '') {
            $result['pesan'] = 'username harus diisi';
        } elseif ($password == '') {
            $result['pesan'] = 'password harus diisi';
        } elseif ($fullname == '') {
            $result['pesan'] = 'fullname harus diisi';
        } elseif ($gender == '') {
            $result['pesan'] = 'gender harus diisi';
        } elseif ($address == '') {
            $result['pesan'] = 'address harus diisi';
        } elseif ($religion == '') {
            $result['pesan'] = 'religion harus diisi';
        } elseif ($is_active == '') {
            $result['pesan'] = 'is_active harus diisi';
        } else {
            $result['pesan'] = '';

            $data = array(
                'username' => $username,
                'password' => $password,
                'fullname' => $fullname,
                'gender' => $gender,
                'address' => $address,
                'religion' => $religion,
                'is_active' => $is_active,
            );

            $this->m_mahasiswa->tambah_data_model('tb_mahasiswa', $data);
        }

        echo json_encode($result);
    }

    // edit_data
    public function edit_data()
    {
        $id = $this->input->post('id', true);
        $where = array('id' => $id);
        $data = $this->m_mahasiswa->edit_data_model('tb_mahasiswa', $where)->result();

        echo json_encode($data);
    }

    // update_data
    public function update_data()
    {
        $id = $this->input->post('id', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $fullname = $this->input->post('fullname', true);
        $gender = $this->input->post('gender', true);
        $address = $this->input->post('address', true);
        $religion = $this->input->post('religion', true);
        $is_active = $this->input->post('is_active', true);

        if ($username == '') {
            $result['pesan'] = 'username harus diisi';
        } elseif ($password == '') {
            $result['pesan'] = 'password harus diisi';
        } elseif ($fullname == '') {
            $result['pesan'] = 'fullname harus diisi';
        } elseif ($gender == '') {
            $result['pesan'] = 'gender harus diisi';
        } elseif ($address == '') {
            $result['pesan'] = 'address harus diisi';
        } elseif ($religion == '') {
            $result['pesan'] = 'religion harus diisi';
        } elseif ($is_active == '') {
            $result['pesan'] = 'is_active harus diisi';
        } else {
            $result['pesan'] = '';

            $where = array('id' => $id);

            $data = array(
                'id' => $id,
                'username' => $username,
                'password' => $password,
                'fullname' => $fullname,
                'gender' => $gender,
                'address' => $address,
                'religion' => $religion,
                'is_active' => $is_active,
            );

            $this->m_mahasiswa->update_data_model('tb_mahasiswa', $data, $where);
        }

        echo json_encode($result);
    }

    // hapus_data
    public function hapus_data()
    {
        $id = $this->input->post('id', true);
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data_model('tb_mahasiswa', $where);
        echo json_encode('true');
    }
}
