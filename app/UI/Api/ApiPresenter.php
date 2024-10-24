<?php declare(strict_types = 1);

namespace app\UI\Api;

use App\UI\BasePresenter;
use Nette\Application\Responses\TextResponse;

class ApiPresenter extends BasePresenter
{

	public function actionDefault(): void
	{
		$this->sendResponse(new TextResponse('ping'));
	}

	public function actionPhpinfo(): void
	{
		ob_start();
		phpinfo();
		$info = ob_get_contents();

		$this->sendResponse(new TextResponse($info));
	}

}
