<?php

class Controller_mosaicGlass extends Controller
{

	function action_index()
	{	
		$this->view->generate('mosaicGlass_view.php', 'template_view.php');
	}
}