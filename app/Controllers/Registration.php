<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Registration extends BaseController
{
    public function index()
    {
        return view('registration/member');
    }

        public function indexAttendanceMember()
    {
        return view('registration/member-attendance');
    }

        public function indexPaymentMethod()
    {
        return view('registration/payment-method');
    }

        public function indexPackage()
    {
        return view('registration/package');
    }
}
