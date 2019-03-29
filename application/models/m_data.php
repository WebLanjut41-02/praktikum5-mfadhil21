<?php 	
	class m_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('data',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('data')->num_rows();
	}

	public function get_product_keyword($keyword){
		$this->db->select('*');
		$this->db->from('data');
		$this->db->like('nama',$keyword);
		$this->db->or_like('nim',$keyword);
		$this->db->or_like('kelas',$keyword);
		return $this->db->get()->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}		
	 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}	

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}
?>