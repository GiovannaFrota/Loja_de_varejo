<?php

namespace APP\Controller;

use APP\Controller\name;
use APP\Controller\cnpj;
use APP\Controller\address;
use APP\Controller\phone;

class Provider
{
// Propriedades
private string $name;
private string $cnpj;
private string $address;
private string $phone;

public function __construct(
    string $name,
    string $cnpj,
    string $address,
    string $phone
)
{
    $this->name = $name;
    $this->$cnpj = $cnpj;
    $this->$address = $address;
    $this->$phone = $phone;
}
}