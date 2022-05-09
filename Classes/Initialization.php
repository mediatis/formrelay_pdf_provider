<?php

namespace Mediatis\FormrelayPdfProvider;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\PdfProvider\PdfProviderInitialization;

class Initialization
{
    public function initialize(RegistryInterface $registry): void
    {
        PdfProviderInitialization::initialize($registry);
    }
}
