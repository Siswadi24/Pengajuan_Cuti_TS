<?php

namespace App\Controllers;

use App\Models\JenisCuti;
use App\Controllers\BaseController;

class JenisCutiController extends BaseController
{
    public $jeniscuti;

    public function __construct()
    {
        $this->jeniscuti = new JenisCuti();
    }

    public function index()
    {
        //
        $data = $this->jeniscuti->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->select('*');
        $builder->join('pegawai', 'pegawai.id = user.pegawai_id');
        $query = $builder->get();
        $data = $query->getResult();
        dd($data);
        return view("jeniscuti/index.php", compact('data'));
    }
}
