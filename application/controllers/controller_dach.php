<?php

class Controller_Dach extends Controller
{

	function action_index()
	{	
		$this->view->generate('dach_view.php', 'template_view.php');
	}
}