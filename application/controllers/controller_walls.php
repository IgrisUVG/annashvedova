<?php

class Controller_Walls extends Controller
{

	function action_index()
	{	
		$this->view->generate('walls_view.php', 'template_view.php');
	}
}