<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\AreaCalculavel;

class Quadrado implements CalculoArea
{
        private $lado;

        public function __construct(float $lado)
        {
            $this->lado = $lado;
        }
    
        public function calcularArea(): float
        {
            return $this->lado * $this->lado;
        }
    }
