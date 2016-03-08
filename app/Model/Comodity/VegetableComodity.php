<?php

namespace App\Model\Comodity;

use Illuminate\Database\Eloquent\Model;

class VegetableComodity extends Model
{
    protected $table = 'vegetable_comodity';

    public $timestamps = true;

    protected $dateFormat = 'U';
}
