<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Transaction extends BaseController
{
    public function index()
    {
        return view('transaction/application-form');
    }
}
