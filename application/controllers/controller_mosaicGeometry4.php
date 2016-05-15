<?php

class Controller_MosaicGeometry4 extends Controller
{

	function action_index()
	{	
		$this->view->generate('mosaicGeometry4_view.php', 'template_view.php');
	}
}