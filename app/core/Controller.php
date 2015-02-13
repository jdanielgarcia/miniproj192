<?php

class Controller
{

	public Modelfact=null;

	public function __construct($ModelFact){
		$this->Modelfact=ModelFact;
	}

	public function model($model){
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	
	public function view($view, $data=''){
		require_once '../app/views' . $view . '.php';
	}
}
