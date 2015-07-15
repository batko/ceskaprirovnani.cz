<?php

namespace App\Presenters;

use Nette,
	App\Model;


class ComparisonPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}
        public function renderDetail($id)
	{
		$this->template->anyVariable = 'any value';
	}

}
