<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends BaseController
{
    public function index()
    {
        return view('pages/about');  // Ensure that your view is located at /app/Views/pages/contact.php
    }
}
