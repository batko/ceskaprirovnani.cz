<?php

namespace App\Presenters;

use Nette,
	App\Model;


class UserPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
