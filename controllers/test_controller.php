<?php
require_once ("models/test_model.php");
require_once ("views/test_view.php");

class testController {

	private $model;
	private $view;
	private $click_object;
	
	function __construct (&$live_model, &$live_view)
	{
		$this->model = $live_model;
		$this->view  = $live_view;
		$this->click_object = $_GET["click_object"];
		
		$this->load();
	}

	
	function on_click(&$click_object)
	{
// 		echo $click_object;
		if($click_object == "link1")
		{
			$this->model->set_link1_text();
		}
		
		if($click_object === "link2")
		{
			$this->model->set_link2_text();
		}
	}
	
	
	
	public function load()
	{
		//if there was a click event, call the on_click() function to process it, which will call the appropriate "model" function in turn before loading the rest
		if(isset($this->click_object))
		{
			$this->on_click($this->click_object);
		}
		
		$this->model->set_view_data();  //load the $view_data into the view_data
		$this->view->update();
	}
};
?>