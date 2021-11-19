<?php

namespace App\Controllers;

use App\Models\DetailLevel;
use App\Controllers\BaseController;
// use App\Database\Migrations\DetailLevel;

class DetailLevelController extends BaseController
{

    public $detaillevel;

    public function __construct()
    {
        $this->detaillevel = new DetailLevel();
    }

    public function index()
    {
        //
        $data = $this->detaillevel->findAll();
        dd($data);
        return view("DetailLevel/index.php");
    }
}
