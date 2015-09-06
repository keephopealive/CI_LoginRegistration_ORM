<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
		$this->load->model('user');
	}

	public function registration()
	{
		$user = new User();
		$user->email = $this->input->post('email');
		$user->first_name = $this->input->post('first_name');
		$user->last_name = $this->input->post('last_name');
		$user->password = $this->input->post('password');
		$user->save();
		$this->session->set_flashdata('registration_msg', $user->error->string);
		redirect('/');
	}

	public function login()
	{
		$user = new User();
		$user = $user
			->where('email', $this->input->post('email'))
			->where('password', $this->input->post('password'))
			->get()
			->all_to_array();
		if($user)
		{
			$this->session->set_userdata('user', $user);
			redirect('/session/show');
		}
		else
		{
			$this->session->set_flashdata('login_msg', 'Error - Invalid Credentials');
			redirect('/');
		}
	}

	public function show()
	{
		$users = new User();
		$users = $users
			->select('first_name')
			->select('last_name')
			->select('email')
			->select('created_at')
			->order_by('created_at', "ASC")
			->get()
			->all_to_array();
			
		$this->load->view('show', array(
			'user' => $this->session->userdata('user'),
			'users' => $users));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */