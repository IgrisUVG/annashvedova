<?php

class Controller_Cover extends Controller
{

	function action_index()
	{	
		$this->view->generate('cover_view.php', 'template_view.php');
	}
}