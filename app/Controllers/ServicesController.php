<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ServicesController extends BaseController
{
    public function index()
    {
        return view('pages/services');  // Ensure that your view is located at /app/Views/pages/contact.php
    }
}
