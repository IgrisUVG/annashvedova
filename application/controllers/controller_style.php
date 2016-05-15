<?php

class Controller_Style extends Controller
{

	function action_index()
	{	
		$this->view->generate('style_view.php', 'template_view.php');
	}
}