<?php

namespace Pd\Monitoring\DashBoard\Controls\AddEditCheck;

class HttpCodeCheckProcessor implements ICheckControlProcessor
{

	public function processEntity(\Pd\Monitoring\Check\Check $check, array $data)
	{
		$check->url = $data['url'];
		$check->code = $data['code'];
	}


	public function getCheck(): \Pd\Monitoring\Check\Check
	{
		return new \Pd\Monitoring\Check\HttpCodeCheck();
	}


	public function createForm(\Pd\Monitoring\Check\Check $check, \Nette\Application\UI\Form $form)
	{
		$form->addGroup($check->getTitle());
		$form
			->addText('url', 'Adresa')
			->setRequired(TRUE)
		;
		$form
			->addText('code', 'HTTP stavový kód')
			->setRequired(TRUE)
		;
	}

}
