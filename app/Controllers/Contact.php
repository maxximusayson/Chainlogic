<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends BaseController
{
    public function index()
    {
        return view('pages/contact');  // Ensure that your view is located at /app/Views/pages/contact.php
    }
}
