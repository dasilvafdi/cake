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
class ArtistsController extends AppController{

	public function index(){
		$a=$this->Artist->find('all');
		$this->set('artists', $a);
	}
}