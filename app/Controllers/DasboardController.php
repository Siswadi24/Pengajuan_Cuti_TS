<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DasboardController extends BaseController
{
    public function index()
    {
        //
        return view("Dasboard/index.php");
    }
}
