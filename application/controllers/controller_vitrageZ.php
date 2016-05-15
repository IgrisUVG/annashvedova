<?php

class Controller_VitrageZ extends Controller
{

	function action_index()
	{	
		$this->view->generate('vitrageZ_view.php', 'template_view.php');
	}
}