<?php

class Controller_Velvet extends Controller
{

	function action_index()
	{	
		$this->view->generate('velvet_view.php', 'template_view.php');
	}
}