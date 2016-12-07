<?php

class Controller_orderform extends Controller
{

	function action_index()
	{	
		$this->view->generate('orderform_view.php', 'template_view.php');
	}
}