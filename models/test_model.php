<?php

class viewData
{
	public $some_data;
	public $link1_text;
	public $link2_text;
	public $default_var = "Default data";
}

class testModel
{
	private $data = "some private data stored by the \"model\" ";
	private $link1_text = "This message is private: You clicked the first link to show this private data from the \"model\" ";
	private $link2_text = "This message is private too: You clicked the second link to show this private data from the \"model\" ";

	public $view_data;
	
	function __construct()
	{
		//construct a view_data object
		$this->view_data = new viewData();
	}
	
	function set_view_data()
	{
		//some data processing here... (business logic)
		$this->view_data->some_data = $this->data;
	}
	
	function set_link1_text()
	{
		$this->view_data->link1_text = $this->link1_text;
	}
	
	function set_link2_text()
	{
		$this->view_data->link2_text = $this->link2_text;
	}
};


?>