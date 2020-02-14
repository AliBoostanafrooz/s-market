<?php


class Display_model extends CI_Model
{
	public function load_all_applications()
	{
		return $this->db->get('applications');

	}
	//First Page Categories

	public function get_best_new_apps()
	{
//		$this->db->limit(3);
		$this->db->where('isgame', 0);
		$this->db->order_by('create_at');
		$r = $this->db->get('applications');
		return $r;
	}

	public function get_best_new_games()
	{
//		$this->db->limit(3);
		$this->db->where('isgame', 1);
		$this->db->order_by('create_at ');
		$r = $this->db->get('applications');
		return $r;
	}

	public function get_best_new_updates()
	{
//		$this->db->limit(3);
		$this->db->order_by('update_at');
		$r = $this->db->get('applications');
		return $r;
	}


	//get one app details

	public function get_one_app_byid($id = null)
	{
		$this->db->where('id', $id);
		$q = $this->db->get('applications');
		return $q;
	}

}
