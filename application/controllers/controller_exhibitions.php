<?php

class Controller_Exhibitions extends Controller
{

	function action_index()
	{	
		$this->view->generate('exhibitions_view.php', 'template_view.php');
	}
}