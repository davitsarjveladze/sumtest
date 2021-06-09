<?php

class Sum_model extends CI_Model {
	public $DBName = 'sums';




	public function insert_sum($data) {
		return	$this->db->insert($this->DBName,$data);
	}
}
