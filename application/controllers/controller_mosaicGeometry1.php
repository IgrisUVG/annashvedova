<?php

class Controller_MosaicGeometry1 extends Controller
{

	function action_index()
	{	
		$this->view->generate('mosaicGeometry1_view.php', 'template_view.php');
	}
}