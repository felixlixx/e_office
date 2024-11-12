<?php

namespace App\models;
use CodeIgniter\Model;

class tiffanylovejulio extends Model
{
	public function julio($table)
	{
		return $this->db
					->table($table)
					->get()
					->getResult();
	}
	public function edit($table, $data, $where)
	{
		return $this->db
					->table($table)
					->update($data, $where);
					
	}

	public function getWhere($table, $where)
	{
		return $this->db
					->table($table)
					->get()
					->getResult($where);
					
	}
	public function ambalabu($table, $where)
	{
		return $this->db
					->table($table)
					->getWhere($where)
					->getRow();
	}
	public function tambah($table, $data)
	{
		return $this->db
					->table($table)
					->insert($data);
	}
	public function hapus($table, $data)
	{
		return $this->db
					->table($table)
					->delete($data);
	}
}