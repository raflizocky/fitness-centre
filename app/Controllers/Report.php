<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Report extends BaseController
{
public function index()
    {
        return view('report/member-report');
    }

        public function indexReportApplicationForm()
    {
        return view('report/application-form-report');
    }
}
