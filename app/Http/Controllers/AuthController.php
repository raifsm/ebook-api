<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119153,
        'name' => 'Raif Shidqi Muzahffar',
        'gender' => 'Male',
        'phone' => '085713039652',
        'class' => 'XII RPL 5'];
  }
}
