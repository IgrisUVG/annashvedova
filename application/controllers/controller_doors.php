<?php

class Controller_Doors extends Controller
{

	function action_index()
	{	
		$this->view->generate('doors_view.php', 'template_view.php');
	}
}