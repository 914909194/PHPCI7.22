<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Fenye_model extends CI_Model{
		public function countall(){
			$allnum=$this->db->count_all_results('t_blogs');
			return $allnum;
		}
		public function fennum($per_page,$page){
			$this->db->select('*');
			$this->db->from('t_blogs');
			
			$this->db->order_by('BLOG_ID','desc');
			$this->db->join('t_blog_catalogs','t_blog_catalogs.CATALOG_ID=t_blogs.CATALOG_ID');
			$this->db->limit($per_page,$page);
			$query=$this->db->get();
			$result=$query->result();
			return $result;
		}	
		
	}

?>