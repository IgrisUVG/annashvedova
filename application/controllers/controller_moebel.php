<?php

class Controller_Moebel extends Controller
{

	function action_index()
	{	
		$this->view->generate('moebel_view.php', 'template_view.php');
	}
}