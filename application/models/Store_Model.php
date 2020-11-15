<?php 

	class store_model extends CI_Model {
		function Add($name, $availability, $price) {
    		$query = "INSERT into items values('', '$name', '$availability', '$price')";
    		$this->db->query($query);
  		}

  		function product_data(){
  			$query = $this->db->query("SELECT * from items");
  			return $query->result();
  		}

  		function select_item($id){
  			$query = $this->db->query("SELECT * from items where id='$id'");
  			return $query->result();
  		}
  		function update_item($id, $name, $availability, $price){
  			 $query = $this->db->query("UPDATE items set name='$name', availability='$availability', price='$price' where id='$id'");
  		}

  		function delete_data($id){
  			$query = "DELETE from items where id='$id'";
    		$this->db->query($query);
  		}

	}

 ?>