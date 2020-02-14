<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Controller
{
	public function index()
	{
		$this->load->model('Display_model', '', TRUE);

		$data['applications'] = $this->Display_model->load_all_applications()->result();
		$data['best_new_apps'] = $this->Display_model->get_best_new_apps()->result();
		$data['best_new_games'] = $this->Display_model->get_best_new_games()->result();
		$data['best_new_updates'] = $this->Display_model->get_best_new_updates()->result();


		//Load View
		$this->load->view('share/header');
		$this->load->view('display/all', $data);
		$this->load->view('share/footer');
	}


	public function app($app_id = null)
	{
		$this->load->model('Display_model', '', TRUE);

		$data['app_info'] = $this->Display_model->get_one_app_byid($app_id)->result();
		$this->load->view('share/header');
		$this->load->view('display/app', $data);
		$this->load->view('share/footer');
	}

	public function about()
	{
		$this->load->view('share/header');
		$this->load->view('display/about');
		$this->load->view('share/footer');
	}

}
