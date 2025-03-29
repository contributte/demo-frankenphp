<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\UI\BasePresenter;

class HomePresenter extends BasePresenter
{

	public function actionDefault()
	{
		error_log("Hello from error", 4);
	}

}
