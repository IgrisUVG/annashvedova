<?php

class Controller_Graphic extends Controller
{

	function action_index()
	{	
		$this->view->generate('graphic_view.php', 'template_view.php');
	}
}