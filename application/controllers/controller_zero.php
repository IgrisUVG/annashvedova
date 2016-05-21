<?php

class Controller_Zero extends Controller
{

	function action_index()
	{	
		$this->view->generate('zero_view.php', 'template_view.php');
	}
}