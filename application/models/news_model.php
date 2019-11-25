<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
    protected $table = '';//à mettre la table

	public function afficher()
	{
		return $this->db->select('*')
				->from($this->table)
				->get()
				->result();
	}
}
?>