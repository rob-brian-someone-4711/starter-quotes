<?php

/** Socrates' quote
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

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
		// Socrates quote
		$source = $this->quotes->get(5);	
		$this->data = array_merge($this->data, $source);

		$this->render();
	}
	
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */