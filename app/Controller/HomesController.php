<?php
//*********************************************************
// Autor : dasilvafdi
// Date : 06.10.2016
// Summary : Artist Controller
//*********************************************************
// Modifications
// Date :
// Autor :
// Summary :
//*********************************************************

// Use the model
class HomesController extends AppController{

	public function index(){
		debug($this->Home->find('all', array('fields'	=> array('Home.id','Home.artLastName','Home.artFirstName','Home.artStageName')
			)));
	}
}