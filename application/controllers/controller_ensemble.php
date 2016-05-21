<?php

class Controller_Ensemble extends Controller
{

	function action_index()
	{	
		$this->view->generate('ensemble_view.php', 'template_view.php');
	}
}