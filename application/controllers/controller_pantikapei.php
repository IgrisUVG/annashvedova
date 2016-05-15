<?php

class Controller_Pantikapei extends Controller
{

	function action_index()
	{	
		$this->view->generate('pantikapei_view.php', 'template_view.php');
	}
}