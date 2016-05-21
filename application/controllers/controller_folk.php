<?php

class Controller_Folk extends Controller
{

	function action_index()
	{	
		$this->view->generate('folk_view.php', 'template_view.php');
	}
}