<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Developer extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('developer_model', '', true);
        $this->config->set_item('language', 'persian');
    }


    public function index()
    {
        if ($this->session->userdata('logged_in')==1)
        {
            redirect('/');
        }
        else
        {
            redirect('developer/login');        }


    }

    public function login()
    {

        $this->form_validation->set_rules('email_phone', 'ایمیل یا موبایل', 'required');
        $this->form_validation->set_rules('password', 'رمز', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('share/header');
            $this->load->view('developer/login');
            $this->load->view('share/footer');

        } else {
            $emailphone = $this->input->post('email_phone');
            $password = $this->input->post('password');
            $user_exist = $this->developer_model->login($emailphone, $password);

            if ($user_exist == true)
            {
                //LOGIN SUCCESS

                $newuser = array(
                    "emailphone" => $emailphone,
                    "logged_in" => 1,
                    "user_type" => 2     //Developer user
                );
                $this->session->set_userdata($newuser);
                redirect('developer');

            } else

            {
                $data['error_login'] = 'کاربری با این مشخصات یافت نشد';
                $this->load->view('share/header');
                $this->load->view('developer/login', $data);
                $this->load->view('share/footer');
            }
//            redirect('display');

        }
    }
    public function register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('developer_model', '', true);
        $this->config->set_item('language', 'persian');

        //RULES
        $this->form_validation->set_rules('email', 'ایمیل', 'required');
        $this->form_validation->set_rules('phone', 'موبایل', 'required');
        $this->form_validation->set_rules('password', 'رمز', 'required');
        $this->form_validation->set_rules('repassword', 'تکرار رمز', 'required|matches[password]');
        $this->form_validation->set_rules('nationalcode', 'کد ملی', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('share/header');
            $this->load->view('developer/register');
            $this->load->view('share/footer');

        } else {

            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');
            $nationalcode = $this->input->post('nationalcode');
            $isRegistered = $this->developer_model->register($email, $phone, $password, $nationalcode);

            if ($isRegistered) {
                $this->load->view('share/header');
                $this->load->view('developer/registerDone');
                $this->load->view('share/footer');
            } else {
                echo "Register FAILED";
            }
        }
    }
}
