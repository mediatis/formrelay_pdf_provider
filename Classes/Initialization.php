<?php

namespace Mediatis\FormrelayPdfProvider;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\Request\Route\RequestRoute;
use FormRelay\PdfProvider\PdfProviderInitialization;
use Mediatis\FormrelayPdfProvider\DataProvider\PdfDataProvider;

class Initialization
{
	public function initialize(RegistryInterface $registry)
	{
		PdfProviderInitialization::initialize($registry);
		$registry->registerDataProvider(PdfDataProvider::class);
	}
}
