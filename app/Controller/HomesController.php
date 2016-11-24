<?php
//*********************************************************
// Autor : dasilvafdi
// Date : 06.10.2016
// Summary : Test page
//*********************************************************
// Modifications
// Date :
// Autor :
// Summary :
//*********************************************************

// test controller
class HomesController extends AppController{

	public function index(){
		$this->set('homes', $this->Home->find('all'));
	}

	public function home(){
		
	}
}