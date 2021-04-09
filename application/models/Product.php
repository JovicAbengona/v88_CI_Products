<?php
    class Product extends CI_Model{
        function add_data($products){
            $query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?, ?, ?, ?, ?)";
            $values = array($products["name"], $products["description"], $products["price"], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
            return $this->db->query($query, $values);
        }

        function get_all_data(){
            return $this->db->query("SELECT id, name, description, price FROM products")->result_array();
        }

        function get_data_by_id($id){
            return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
        }

        function update_data($products){
            $query = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = ? WHERE id = ?";
            $values = array($products["name"], $products["description"], $products["price"], date("Y-m-d, H:i:s"), $products["id"]);
            return $this->db->query($query, $values);
        }

        function delete_data($id){
            return $this->db->query("DELETE FROM products WHERE id=?", $id);
        }
    }
?>