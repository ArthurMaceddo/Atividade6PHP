<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\AreaCalculavel;


class Circulo implements CalculoArea
{
    use HasFactory;

    private $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }

    public function calculaArea(): float
    {
        return pi() * $this->raio * $this->raio;
    }
}
