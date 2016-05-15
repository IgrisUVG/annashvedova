<?php

class Controller_MosaicGeometry3 extends Controller
{

	function action_index()
	{	
		$this->view->generate('mosaicGeometry3_view.php', 'template_view.php');
	}
}