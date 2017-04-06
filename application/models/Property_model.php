<?php 
	class Property_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_properties($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('property_name', 'AESC');
				$query = $this->db->get('properties');
				return $query->result_array();
			}

			$query = $this->db->get_where('properties', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_property($property_image){
			$slug = url_title($this->input->post('property_name'));

			$data = array(
				'property_name' => $this->input->post('property_name'),
				'property_image' => $property_image,
				'slug' => $slug,
				'street_address' => $this->input->post('street_address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zipcode' => $this->input->post('zipcode'),
				'mgmt_company' => $this->input->post('mgmt_company'),
				'cont_name' => $this->input->post('cont_name'),
				'job_title' => $this->input->post('job_title'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
				);
			return $this->db->insert('properties', $data);
		}

		public function delete_property($id){
			$this->db->where('id', $id);
			$this->db->delete('properties');
			return true;
		}

		public function update_property(){
			$slug = url_title($this->input->post('property_name'));

			$data = array(
				'property_name' => $this->input->post('property_name'),
				'slug' => $slug,
				'street_address' => $this->input->post('street_address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zipcode' => $this->input->post('zipcode'),
				'mgmt_company' => $this->input->post('mgmt_company'),
				'cont_name' => $this->input->post('cont_name'),
				'job_title' => $this->input->post('job_title'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
				);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('properties', $data);
		}
	}