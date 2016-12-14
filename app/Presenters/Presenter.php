<?php

namespace App\Presenters;

abstract class Presenter
{
	protected $model;

	public function __construct($model)
	{
		$this->model = $model;
	}
}