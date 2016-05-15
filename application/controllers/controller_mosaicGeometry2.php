<?php

class Controller_MosaicGeometry2 extends Controller
{

	function action_index()
	{	
		$this->view->generate('mosaicGeometry2_view.php', 'template_view.php');
	}
}