<?php

class Controller_Decorated extends Controller
{

	function action_index()
	{	
		$this->view->generate('decorated_view.php', 'template_view.php');
	}
}