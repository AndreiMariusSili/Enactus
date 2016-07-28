<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_model extends CI_Model
{
	public function videoEdit($post)
	{
		$title = $post['video_title'];
		$subtitle = $post['video_subtitle'];

		//update video title and subtitle in database
	    $data = array(
	    	'id' => 0,
	    	'video_title' => $title,
	    	'video_subtitle' => $subtitle,
	   	);
	    $this->db->update('landing_admin', $data);
	}
	public function aboutusEdit($post)
	{
		$block_left_icon = $post['block_left_icon'];
	    $block_left_title = $post['block_left_title'];
	    $block_left_content = $post['block_left_content'];
	    $block_center_icon = $post['block_center_icon'];
	    $block_center_title = $post['block_center_title'];
	    $block_center_content = $post['block_center_content'];
	    $block_right_icon = $post['block_right_icon'];
	    $block_right_title = $post['block_right_title'];
	    $block_right_content = $post['block_right_content'];



	    $data = array (
	    	'id' => 0,
	    	'aboutus_left_icon' => $block_left_icon,
	    	'aboutus_left_title' => $block_left_title,
	    	'aboutus_left_content' => $block_left_content,
	    	'aboutus_center_icon' => $block_center_icon,
	    	'aboutus_center_title' => $block_center_title,
	    	'aboutus_center_content' => $block_center_content,
	    	'aboutus_right_icon' => $block_right_icon,
	    	'aboutus_right_title' => $block_right_title,
	    	'aboutus_right_content' => $block_right_content,
	    );
	    $this->db->update('landing_admin', $data);
	}
	public function accompEdit($post)
	{
		$block_left_icon = $post['block_left_icon'];
	    $block_left_title = $post['block_left_title'];
	    $block_left_content = $post['block_left_content'];
	    $block_center_icon = $post['block_center_icon'];
	    $block_center_title = $post['block_center_title'];
	    $block_center_content = $post['block_center_content'];
	    $block_right_icon = $post['block_right_icon'];
	    $block_right_title = $post['block_right_title'];
	    $block_right_content = $post['block_right_content'];


	    $data = array (
	    	'id' => 0,
	    	'accomp_left_icon' => $block_left_icon,
	    	'accomp_left_title' => $block_left_title,
	    	'accomp_left_content' => $block_left_content,
	    	'accomp_center_icon' => $block_center_icon,
	    	'accomp_center_title' => $block_center_title,
	    	'accomp_center_content' => $block_center_content,
	    	'accomp_right_icon' => $block_right_icon,
	    	'accomp_right_title' => $block_right_title,
	    	'accomp_right_content' => $block_right_content,
	    );
	    $this->db->update('landing_admin', $data);
	}
	public function newFounder($first_name, $last_name, $email, $phone_number, $dob, $study, $title, $idea, $statusMember, $statusProject, $motivation)
	{
		//insert data for new member
		$query = "INSERT INTO members (first_name, last_name, email, phone, dob, study, status, updated_at) VALUES (?,?,?,?,?,?,?,?)";
		$values = array($first_name, $last_name, $email, $phone_number, $dob, $study, $statusMember, date("Y-m-d, H:i:s"));
		$this->db->query($query, $values);

		//retrieve new member id
		$query = $this->db->query("SELECT id FROM members ORDER BY id DESC LIMIT 1");
		$result = $query->row_array();

		//register new project
		$query = "INSERT INTO projects (members_id, project_title, project_description, project_motivation, status,  updated_at) VALUES (?,?,?,?,?,?)";
		$values = array($result['id'], $title, $idea, $motivation, $statusProject, date("Y-m-d, H:i:s"));
		$this->db->query($query, $values);
	}

	public function newCofounder($first_name, $last_name, $email, $phone_number, $dob, $study, $preference, $status ,$motivation)
	{
		//insert data for new member
		$query = "INSERT INTO members (first_name, last_name, email, phone, dob, study, status, updated_at) VALUES (?,?,?,?,?,?,?,?)";
		$values = array($first_name, $last_name, $email, $phone_number, $dob, $study, $status, date("Y-m-d, H:i:s"));
		$this->db->query($query, $values);

		//retrieve new member id
		$query = $this->db->query("SELECT id FROM members ORDER BY id DESC LIMIT 1");
		$member = $query->row_array();

		//retrieve project id
		$query = $this->db->query("SELECT id FROM projects WHERE project_title = '{$preference}'");
		$project = $query->row_array();

		// register new application
		$query = "INSERT INTO applications (members_id, projects_id, project_preference, apply_motivation, updated_at) VALUES (?,?,?,?,?)";
		$values = array($member['id'], $project['id'], $preference, $motivation, date("Y-m-d, H:i:s"));
		$this->db->query($query, $values);	
	}

    public function newPassive($first_name, $last_name, $email, $phone_number, $dob, $study, $status ,$motivation)
    {
        //insert data for new member
        $query = "INSERT INTO members (first_name, last_name, email, phone, dob, study, status, updated_at) VALUES (?,?,?,?,?,?,?,?)";
        $values = array($first_name, $last_name, $email, $phone_number, $dob, $study, $status, date("Y-m-d, H:i:s"));
        $this->db->query($query, $values);
    }

	public function newPartner($first_name, $last_name, $email, $phone_number, $organization, $motivation)
	{
		//insert data for new member
		$query = "INSERT INTO partners (first_name, last_name, email, phone, organization, interest, updated_at) VALUES (?,?,?,?,?,?,?)";
		$values = array($first_name, $last_name, $email, $phone_number, $organization, $motivation, date("Y-m-d, H:i:s"));
		$this->db->query($query, $values);
	}
}