<?php

/**
 * Bob Monkhouse quote
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->first();
		$this->data = array_merge($this->data, $source);

		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */