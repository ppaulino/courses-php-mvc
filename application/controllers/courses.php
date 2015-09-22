<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('course');
	}

	public function index() {
		$courses = $this->course->get_all_courses();
		$this->load->view('courses/index', array('courses'=>$courses));
	}

	public function create() {
		$this->course->create_course($this->input->post());
		redirect('/');
	}

	public function destroy($id) {
		$course = $this->course->get_course($id);
		$this->load->view('courses/destroy', array('id'=>$id, 'name'=>$course['name'], 'description'=>$course['description']));
	}

	public function delete($id) {
		$this->course->delete_course($id);
		redirect('/');
	}
}
