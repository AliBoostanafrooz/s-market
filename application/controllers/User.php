<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('User_model', '', true);
        $this->config->set_item('language', 'persian');
    }


    public function index()
    {
        if ($this->session->userdata('logged_in') == 1) {
            redirect('/');
        } else {
            redirect('user/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email_phone', 'ایمیل یا موبایل', 'required');
        $this->form_validation->set_rules('password', 'رمز', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('share/header');
            $this->load->view('user/login');
            $this->load->view('share/footer');

        } else {
            $email_phone = $this->input->post('email_phone');
            $password = $this->input->post('password');
            $user_exist = $this->User_model->login($email_phone, $password);

            if ($user_exist == true) {

                //LOGIN SUCCESS

                $newuser = array(
                    "emailphone" => $email_phone,
                    "logged_in" => 1,
                    "user_type" => 3     //normal user
                );
                $this->session->set_userdata($newuser);
                $this->session->userdata('emailphone');

                redirect('user');
            } else {
                $data['error_login'] = 'کاربری با این مشخصات یافت نشد';
                $this->load->view('share/header');
                $this->load->view('user/login', $data);
                $this->load->view('share/footer');
            }
//            redirect('display');

        }
    }

    public function register()
    {

        //RULES
        $this->form_validation->set_rules('email', 'ایمیل', 'required');
        $this->form_validation->set_rules('phone', 'موبایل', 'required');
        $this->form_validation->set_rules('password', 'رمز', 'required');
        $this->form_validation->set_rules('repassword', 'تکرار رمز', 'required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('share/header');
            $this->load->view('user/register');
            $this->load->view('share/footer');

        } else {

            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');


            $isRegistered = $this->User_model->register($email, $phone, $password);

            if ($isRegistered) {
                $this->load->view('share/header');
                $this->load->view('user/registerDone');
                $this->load->view('share/footer');
            } else {
                echo "Register FAILED";
            }
        }


    }

    public function logout()
    {
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' &&
                $key != 'ip_address' &&
                $key != 'user_agent' &&
                $key != 'last_activity') {

                $this->session->unset_userdata($key);
            }
        }
        redirect('/');
    }
}
