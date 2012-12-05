<?php

class testView
{
	private $view_template;
	public $view_data;
	
	function __construct($template, $view_data = NULL)
	{
		$this->view_template = $template;
		$this->view_data = $view_data;
	}
	
	public function update()
	{
		$view_data = $this->view_data;
		include ($this->view_template);
	}
}
?>