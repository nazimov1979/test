<?php

class Controller_processorder extends Controller
{

	function action_index()
	{	
	

  

$this->view->generate('processorder_view.php', 'template_view.php');
	}
}