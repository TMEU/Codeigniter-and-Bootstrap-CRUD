<?php 

	class control extends CI_Controller

	{
		public function __construct() {
			parent::__construct();

			$this->load->database();
    		$this->load->helper('url');
    		$this->load->model('Store_Model');

		}
		public function store_report(){
			$result['products'] = $this->Store_Model->product_data();
			$result['number_of_products']=count($result['products']);
			$this->load->view('report_of_store.php', $result);
		}

		public function index()
		{
			$this->load->view('home');
		}

		public function view_about()
		{
			$this->load->view('view_about');

		}

		public function add()
		{
			$this->load->view('form');

			if($this->input->post('add')){
     		  $name = $this->input->post('Name');
    		  $availability = $this->input->post('Availability');
   			  $price = $this->input->post('price');
      
      		$this->Store_Model->add($name, $availability, $price);
    		redirect("control/view");
      		
   		 }
		}

		public function deleteItem()
		{
			$id = $this->input->get('id');
   			$this->Store_Model->delete_data($id);
    		redirect("control/view");
		}

		public function view(){
			$result['products'] = $this->Store_Model->product_data();
			$this->load->view('view_product', $result);
		}

		public function viewItem(){
			$id = $this->input->get('id');
		    $result['item'] = $this->Store_Model->select_item($id);
		    $this->load->view('update.php', $result);
    
		    if($this->input->post('update')){
		        $name = $this->input->post('name');
	    		$availability = $this->input->post('availability');
	   			$price = $this->input->post('price');
	   			// echo $name;
	      		$this->Store_Model->update_item($id, $name, $availability, $price);
	      		redirect("control/view");
    		}
		}

	}

 ?>
