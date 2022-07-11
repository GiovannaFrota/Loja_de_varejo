<?php

namespace APP\Model;

class Provider
{
// Propriedades
private string $name;
private float $CNPJ;
private int $address;
private bool $phone;

public function __construct(
string $name,
float $CNPJ,
int $address,
bool $phone 
)
{
    $this->name = $name;
    $this->CNPJ = $CNPJ;
    $this->address = $address;
    $this->phone = $phone;
}
    
}