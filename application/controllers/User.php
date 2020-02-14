<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{
	public function index()
	{
		echo 'User Index';
	}
	public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('User_model', '', true);

        $this->form_validation->set_rules('email_phone', 'email_phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('share/header');
            $this->load->view('user/login');
            $this->load->view('share/footer');

        }
        else
        {
            $email_phone = $this->input->post('email_phone');
            $password = $this->input->post('password');
            $user_exist = $this->User_model->login($email_phone,$password);

            if($user_exist)
            {
                    echo 'TRUE';
            }
            else
            {
                    echo 'FALSE';
            }
//            redirect('display');

        }
    }
}
