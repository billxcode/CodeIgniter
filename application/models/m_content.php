<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_content extends CI_Model {

	var $table = 'article';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getAll()
    {
    	return $this->db->query("SELECT * FROM article");
    }
    
	// Save a new user. 
	function save( $article_data ) {
		$this->db->insert($this->table , $article_data); 
		return $this->db->insert_id();
	}
	
	// Update an existing user
	function update( $article_data ) {
		if (isset($article_data['id'])) {
			$this->db->where('id', $article_data['id'] );
			$this->db->update( $this->table , $article_data); 
			return $this->db->affected_rows();
		}
		return false;
	}
	
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */