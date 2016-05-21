<?php

class Controller_Sun extends Controller
{

	function action_index()
	{	
		$this->view->generate('sun_view.php', 'template_view.php');
	}
}