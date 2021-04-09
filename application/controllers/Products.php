<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    public function index(){
        $this->load->model("Product");
        $products = array("form_data" => $this->Product->get_all_data());
        $this->load->view("index", $products);
    }

    public function new(){		
		$this->load->view("new");
	}

	public function create(){
		$this->form_validation->set_rules("name", "name", "required");
		$this->form_validation->set_rules("description", "description", "required");
		$this->form_validation->set_rules("price", "price", "required|numeric");

		if($this->form_validation->run() == FALSE){
			$errors = array(
				"error_name" => form_error("name"),
				"error_description" => form_error("description"),
				"error_price" => form_error("price")
			);

			$this->session->set_userdata($errors);
            $this->session->set_userdata("name", set_value("name"));
            $this->session->set_userdata("description", set_value("description"));
            $this->session->set_userdata("price", set_value("price"));
			redirect("/new");
		}
		else{
			$this->session->unset_userdata("name");
            $this->session->unset_userdata("description");
            $this->session->unset_userdata("price");

			$form_data = array(
				"name" => $this->input->post("name"),
				"description" => $this->input->post("description"),
				"price" => $this->input->post("price")
			);

			$this->load->model("Product");
            $add_product = $this->Product->add_data($form_data);
            if($add_product){
                redirect("/");
            }
		}
	}

	public function show($id){
		$this->load->model("Product");
		$get_data = array("get_data" => $this->Product->get_data_by_id($id));
		$this->load->view("show", $get_data);
	}

	public function edit($id){
		$this->load->model("Product");
		$get_data = array("get_data" => $this->Product->get_data_by_id($id));
		$this->load->view("edit", $get_data);
	}

	public function update($id){
		$this->form_validation->set_rules("name", "name", "required");
		$this->form_validation->set_rules("description", "description", "required");
		$this->form_validation->set_rules("price", "price", "required|numeric");

		if($this->form_validation->run() == FALSE){
			$errors = array(
				"error_name" => form_error("name"),
				"error_description" => form_error("description"),
				"error_price" => form_error("price")
			);

			$this->session->set_userdata($errors);
            $this->session->set_userdata("name", set_value("name"));
            $this->session->set_userdata("description", set_value("description"));
            $this->session->set_userdata("price", set_value("price"));
			$this->edit($id);
		}
		else{
			$this->session->unset_userdata("name");
            $this->session->unset_userdata("description");
            $this->session->unset_userdata("price");

			$form_data = array(
				"id" => $id,
				"name" => $this->input->post("name"),
				"description" => $this->input->post("description"),
				"price" => $this->input->post("price")
			);

			$this->load->model("Product");
            $update_product = $this->Product->update_data($form_data);
            if($update_product){
				$this->session->set_userdata("message", "Product updated successfully!");
				$this->edit($id);
			}
		}
	}

	public function remove($id){
		$this->load->model("Product");
		$get_data = array("get_data" => $this->Product->get_data_by_id($id));
		$this->load->view("remove", $get_data);
	}

    public function delete($id){
        $this->load->model("Product");
		$this->Product->delete_data($id);
		redirect("/");
    }
}