<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retangulo implements CalculoArea
{   
    private $base;
    private $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calculaArea(): float
    {
        return $this->base * $this->altura;
    }
}
