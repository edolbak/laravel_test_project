<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test_model
{
    use HasApiTokens, HasFactory, Notifiable;

    private $test;

private $var1;



    public function __construct()
    {
        $this->test = new self();
    }
}
