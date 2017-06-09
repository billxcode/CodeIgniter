<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	var $data = array();

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();	
        $this->load->model('m_content');
    }

	public function index()
	{
		$data = $this->m_content->getAll();
		$this->load->view('blog/v_blog_home', array('articles'=>$data));
	}
	

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */