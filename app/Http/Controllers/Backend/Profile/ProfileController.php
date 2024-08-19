<?php

namespace App\Http\Controllers\Backend\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profileIndex(){
        return view('Backend.Layout.Profile.Profile');
    }
}
