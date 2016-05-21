<?php

class Controller_Holliday extends Controller
{

	function action_index()
	{	
		$this->view->generate('holliday_view.php', 'template_view.php');
	}
}