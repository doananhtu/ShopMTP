<?php 
class Mcatalog extends CI_Model{
	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function selectOne($id){
		$this->db->where('catalogId',$id);
		$query = $this->db->get('catalog');
		return $query->result_array();
	}

	public function getSubCatalog($id){
		$this->db->where("parent",$id);
		$query = $this->db->get('catalog');
		if($query->num_rows() > 0){	
			return $query->result_array();
		}
		return 0;
	}

	public function getProduct($total,$start,$catalog){
		$this->db->limit($total, $start);
		$this->db->where("catalogId",$catalog);
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function getProduct2($total,$start,$catalog){
		$this->db->limit($total, $start);
		$this->db->where_in("catalogId",$catalog);  //OR $catalog = array().
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function count_product($catalog){
		$query = $this->db->where('catalogId',$catalog)->get('product');
		return $query->num_rows();
	}

	public function count_product2($catalog){
		$query = $this->db->where_in('catalogId',$catalog)->get('product');
		return $query->num_rows();
	}
}
?>