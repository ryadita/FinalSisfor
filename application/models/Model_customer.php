<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model
{
	public function tampil()
	{
		$query = $this->db->get('customer');
		return $query;
	}
}