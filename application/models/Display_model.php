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
		$this->db->limit(2);
		$r = $this->db->get('applications');
		return $r;
	}

	public function get_best_new_games()
	{
		$this->db->limit(2);
		$this->db->where('isgame', 1);
		$r = $this->db->get('applications');
		return $r;
	}

	public function get_best_new_updates()
	{
		$this->db->limit(1);
		$r = $this->db->get('applications');
		return $r;
	}
}
