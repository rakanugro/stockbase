<?php
class Stockmodel extends CI_Model
{
	public function get_barang()
	{
		$query = $this->db->select('*')
				->from('master_barang')
				->order_by('no_id', 'DESC')
				->get();

		return $query->result_array();
	}

	/*public function get_barang_id($id)
	{
		$query = $this->db->get_where('master_barang', array('no_id' => $id));

		return $query->result();
	}
*/
	
	public function save_barang($data)
	{
		$query = $this->db->insert('master_barang', $data);

		if($query)
		{
			return true;
		}else
		{
			return false;
		}
	}

	public function delete_barang($id)
	{

		$this->db->where('no_id', $id);
		$this->db->delete('master_barang');
		return TRUE;
	}

	public function get_instock()
	{
		$query = $this->db->select('*')
				->from('instock_barang')
				->order_by('no_id', 'DESC')
				->get();

		return $query->result_array();
	}

	public function save_instock($data)
	{

		$query = $this->db->insert('instock_barang', $data);

		if($query)
		{
			return true;
		}else
		{
			return false;
		}	
	}

	public function delete_instock($id)
	{

		$this->db->where('no_id', $id);
		$this->db->delete('instock_barang');

		return TRUE;
	}

	public function save_instock_history($data)
	{

		$query = $this->db->insert('history_barang', $data);

		if($query)
		{
			return true;
		}else
		{
			return false;
		}	
	}

	public function delete_instock_history($id)
	{
		$this->db->where('no_id', $id);
		$this->db->delete('history_barang');

		return TRUE;
	}
	
}
?>