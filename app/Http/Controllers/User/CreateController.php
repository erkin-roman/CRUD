<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        return view('user.create-user');
    }
}
