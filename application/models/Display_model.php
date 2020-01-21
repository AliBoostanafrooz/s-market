<?php


class Display_model extends CI_Model
{
		public function load_all_applications(){
	return	$this->db->get('application');

		}


		//First Page Categories

		public function get_best_new_apps()
		{
			$this->db->limit(3);
			$q= $this->db->get('application');
			return $q;
		}
		public function get_best_new_games()
		{
			$this->db->limit(3);
			$this->db->where('isgame',1);
			$q= $this->db->get('application');
			return $q;
		}
		public function get_best_new_updates()
		{
			$this->db->limit(3);
			$q= $this->db->get('application');
			return $q;
		}
}
