<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{
	//validate and register new founder
	public function founder()
	{
		$this->load->library('form_validation');
		$this->load->helper('security');

		$config = array(
			array(
				'field' => "first_name",
				'label' => "first name",
				'rules' => "trim|required|xss_clean"
			),
			array(
				'field' => 'last_name',
				'label' => 'last name',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|valid_email|xss_clean'
			),
			array(
				'field' => 'phone_number',
				'label' => 'phone number',
				'rules' => 'trim|required|numeric|xss_clean'
			),
			array(
				'field' => 'dob',
				'label' => 'date of birth',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'study',
				'label' => 'study',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'title',
				'label' => 'title',
				'rules' => 'callback_title_check|xss_clean'
			),
			array(
				'field' => 'idea',
				'label' => 'idea',
				'rules' => 'callback_idea_check|xss_clean'
			),
			array(
				'field' => 'motivation',
				'label' => 'motivation',
				'rules' => 'callback_motivation_check|xss_clean'
			)
		);
		$this->form_validation->set_message('required', "Please fill in your %s");
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/#contact-us");
		}
		else
		{
			$this->load->model("Form_model");
			$post = $this->input->post(NULL, TRUE);
			$this->Form_model->founder($post["first_name"], $post["last_name"], $post["email"], $post["phone_number"], $post["dob"], $post["study"], $post["title"], $post["idea"],$post["motivation"]);
			redirect ("/Main/success");
		}
	}

	//validate and register new cofounder
	public function cofounder()
	{
		$this->load->library('form_validation');
		$this->load->helper('security');

		$config = array(
			array(
				'field' => "first_name",
				'label' => "first name",
				'rules' => "trim|required|xss_clean"
			),
			array(
				'field' => 'last_name',
				'label' => 'last name',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|valid_email|xss_clean'
			),
			array(
				'field' => 'phone_number',
				'label' => 'phone number',
				'rules' => 'trim|required|numeric|xss_clean'
			),
			array(
				'field' => 'dob',
				'label' => 'date of birth',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'study',
				'label' => 'study',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'project_preference',
				'label' => 'preference',
				'rules' => 'callback_preference_check|xss_clean'
			),
			array(
				'field' => 'motivation',
				'label' => 'motivation',
				'rules' => 'callback_motivation_check|xss_clean'
			)
		);
		$this->form_validation->set_message('required', "Please fill in your %s");
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/");
		}
		else
		{
			$this->load->model("Form_model");
			$post = $this->input->post(NULL, TRUE);
			$this->Form_model->cofounder($post["first_name"], $post["last_name"], $post["email"], $post["phone_number"], $post["dob"], $post["study"], $post["project_preference"],$post["motivation"]);
			redirect ("/Main/success");
		}
	}

	//validate and register new passive member
	public function passive()
	{
		$this->load->library('form_validation');
		$this->load->helper('security');

		$config = array(
			array(
				'field' => "first_name",
				'label' => "first name",
				'rules' => "trim|required|xss_clean"
			),
			array(
				'field' => 'last_name',
				'label' => 'last name',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|valid_email|xss_clean'
			),
			array(
				'field' => 'phone_number',
				'label' => 'phone number',
				'rules' => 'trim|required|numeric|xss_clean'
			),
			array(
				'field' => 'study',
				'label' => 'study',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'motivation',
				'label' => 'motivation',
				'rules' => 'callback_motivation_check|xss_clean'
			)
		);
		$this->form_validation->set_message('required', "Please fill in your %s");
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/");
		}
		else
		{
			$this->load->model("Form_model");
			$post = $this->input->post(NULL, TRUE);
			$this->Form_model->passive($post["first_name"], $post["last_name"], $post["email"], $post["phone_number"], $post["dob"], $post["study"],$post["motivation"]);
			redirect ("/Main/success");
		}
	}
	public function partner()
	{
		$this->load->library('form_validation');
		$this->load->helper('security');

		$config = array(
			array(
				'field' => "first_name",
				'label' => "first name",
				'rules' => "trim|required|xss_clean"
			),
			array(
				'field' => 'last_name',
				'label' => 'last name',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|valid_email|xss_clean'
			),
			array(
				'field' => 'phone_number',
				'label' => 'phone number',
				'rules' => 'trim|required|numeric|xss_clean'
			),
			array(
				'field' => 'organization',
				'label' => 'organization',
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'motivation',
				'label' => 'motivation',
				'rules' => 'callback_interest_check|xss_clean'
			)
		);
		$this->form_validation->set_message('required', "Please fill in your %s");
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/");
		}
		else
		{
			$this->load->model("Form_model");
			$post = $this->input->post(NULL, TRUE);
			$this->Form_model->partner($post["first_name"], $post["last_name"], $post["email"], $post["phone_number"], $post["organization"],$post["motivation"]);
			redirect ("/Main/success");
		}
	}

	//Custom validation functions
	public function title_check($title)
	{
		if(strlen($title) == 0)
		{
			$this->form_validation->set_message("title_check", "Your idea needs a title.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function idea_check($idea)
	{
		if(strlen($idea) == 0)
		{
			$this->form_validation->set_message("idea_check", "Please let us know what your idea is.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function preference_check($preference)
	{
		if(strlen($preference) == 0)
		{
			$this->form_validation->set_message("preference_check", "Please let us know which venture you want to join.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function motivation_check($motivation)
	{
		if(strlen($motivation) == 0)
		{
			$this->form_validation->set_message("motivation_check", "Please let us know what your motivation is.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

		public function interest_check($interest)
	{
		if(strlen($interest) == 0)
		{
			$this->form_validation->set_message("interest_check", "Please let us know what your interst in Enactus is.");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>