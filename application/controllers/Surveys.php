<?php
	class Surveys extends CI_Controller{
		public function index(){
			$data['title'] = 'Surveys';

			$data['surveys'] = $this->survey_model->get_surveys();
			

			$this->load->view('templates/header');
			$this->load->view('surveys/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['survey'] = $this->survey_model->get_surveys($slug);

			if(empty($data['survey'])){
				show_404();
			}
			$data['title'] = $data['survey']['property_id'];

			$this->load->view('templates/header');
			$this->load->view('surveys/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Create Section Survey';

			$this->form_validation->set_rules('section_num', 'Section Number', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('surveys/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->survey_model->create_survey();
				redirect('surveys');
			}
		}
	}