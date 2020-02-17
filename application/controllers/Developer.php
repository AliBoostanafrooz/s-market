<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Developer extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Developer_model', '', true);
        $this->config->set_item('language', 'persian');
    }


	public function index()
	{
		echo 'Developer Index';
	}
	public function login()
	{

        $this->form_validation->set_rules('email_phone', 'ایمیل یا موبایل', 'required');
        $this->form_validation->set_rules('password', 'رمز', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('share/header');
            $this->load->view('developers/login');
            $this->load->view('share/footer');

        } else {
            $email_phone = $this->input->post('email_phone');
            $password = $this->input->post('password');
            $user_exist = $this->Developer_model->login($email_phone, $password);

            if ($user_exist) {
                redirect('developers');
            } else {
                $data['error_login'] = 'کاربری با این مشخصات یافت نشد';
                $this->load->view('share/header');
                $this->load->view('developers/login', $data);
                $this->load->view('share/footer');
            }
//            redirect('display');

        }
	}
	public function logout()
	{

	}
	public function register()
	{

	}
}
