<?php

class Controller_Oil extends Controller
{

	function action_index()
	{	
		$this->view->generate('oil_view.php', 'template_view.php');
	}
}