<?php

class Warehouse_model extends CI_Model
{
	private $_table = 'warehouses';

	public function get()
	{
		$query = $this->db->get_where($this->_table, ['is_deleted' => 0]);
		return $query->result();
	}

	public function get_by_id($id)
	{
		$query = $this->db->get_where($this->_table, ['is_deleted' => 0, 'id' => $id]);
		return $query->row();
	}

	public function insert($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->_table, $data);
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}
}
