<?php

class Controller_Winter extends Controller
{

	function action_index()
	{	
		$this->view->generate('winter_view.php', 'template_view.php');
	}
}