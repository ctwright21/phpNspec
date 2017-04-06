<?php
	class Properties extends CI_Controller{
		public function index(){
			$data['title'] = 'Properties';

			$data['properties'] = $this->property_model->get_properties();
			

			$this->load->view('templates/header');
			$this->load->view('properties/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['property'] = $this->property_model->get_properties($slug);

			if(empty($data['property'])){
				show_404();
			}
			$data['title'] = $data['property']['property_name'];

			$this->load->view('templates/header');
			$this->load->view('properties/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Add Property';

			$this->form_validation->set_rules('property_name', 'Property Name', 'required');
			$this->form_validation->set_rules('street_address', 'Address', 'required');
			$this->form_validation->set_rules('cont_name', 'Contact Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('properties/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/properties';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['max_width'] = '1900';
				$config['max_height'] = '1900';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$property_image = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$property_image = $_FILES['userfile']['name'];
				}


				$this->property_model->create_property($property_image);
				redirect('properties');
			}
		}

		public function delete($id){
			$this->property_model->delete_property($id);
			redirect('properties');
		}

		public function edit($slug){
			$data['property'] = $this->property_model->get_properties($slug);

			if(empty($data['property'])){
				show_404();
			}
			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
			$this->load->view('properties/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			$this->property_model->update_property();
			redirect('properties');
		}
	}