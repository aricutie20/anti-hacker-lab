<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
{
    // Kukunin ang input mula sa form (POST)
    $data['user_input'] = $this->request->getPost('user_input');
    
    return view('hacker_lab', $data);
}
}