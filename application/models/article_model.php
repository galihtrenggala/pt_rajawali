<?php
class Article_model extends CI_model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_article($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('tbl_artikel');
			return $query->result_array();
		}

		$query = $this->db->get_where('tbl_artikel', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_by_id($id)
	{
		$query = $this->db->get_where('tbl_artikel', array('id' => $id));
		return $query->row_array();
	}

	public function set_article($path,$post)
	{
	    #$this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $post['title'], #$this->input->post('title'),
	        'slug'  => $slug,
	        'text'  => $post['text'], #$this->input->post('text'),
	        'image' => $path, #$this->input->post('image')
	    );

	    return $this->db->insert('tbl_artikel', $data);
	}

	public function update_article($path,$post,$id)
	{
	    #$this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $post['title'], #$this->input->post('title'),
	        'slug'  => $slug,
	        'text'  => $post['text'], #$this->input->post('text'),
	        'image' => $path, #$this->input->post('image')
	    );

	    $this->db->where('id', $id);
	    return $this->db->update('tbl_artikel', $data);
	}

	public function delete_article($id=NULL)
	{
		$sql = "SELECT image FROM tbl_artikel WHERE id = '". $id ."'";
		$query = $this->db->query($sql);
		$result = $query->row_array();

		$this->db->delete('tbl_artikel', array('id' => $id));
		
		return $result['image'];
		#return 0;
	}

}
?>