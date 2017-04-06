<?php
	class Survey_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_surveys($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('survey_date', 'DESC');
				$query = $this->db->get('surveys');
				return $query->result_array();
			}

			$query = $this->db->get_where('surveys', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_survey(){
			$slug = url_title($this->input->post('property_id'));

			$data = array(
				'completed_by' => $this->input->post('completed_by'),
				'survey_date' => $this->input->post('survey_date'),
				'property_id' => $this->input->post('property_id'),
				'slug' => $slug,
				'section_num' => $this->input->post('section_num'),
				'pave_seal_wear_s' => $this->input->post('pave_seal_wear_s'),
				'pave_seal_wear_n' => $this->input->post('pave_seal_wear_n'),
				'pave_seal_delam_s' => $this->input->post('pave_seal_delam_s'),
				'pave_seal_delam_n' => $this->input->post('pave_seal_delam_n'),
				'oil_spots_s' => $this->input->post('oil_spots_s'),
				'oil_spots_n' => $this->input->post('oil_spots_n'),
				'linear_cracks_s' => $this->input->post('linear_cracks_s'),
				'linear_cracks_n' => $this->input->post('linear_cracks_n'),
				'gator_cracks_s' => $this->input->post('gator_cracks_s'),
				'gator_cracks_n' => $this->input->post('gator_cracks_n'),
				'pot_holes_s' => $this->input->post('pot_holes_s'),
				'pot_holes_n' => $this->input->post('pot_holes_n'),
				'raveling_s' => $this->input->post('raveling_s'),
				'raveling_n' => $this->input->post('raveling_n'),
				'rutting_s' => $this->input->post('rutting_s'),
				'rutting_n' => $this->input->post('rutting_n'),
				);

			return $this->db->insert('surveys', $data);
		}
	}