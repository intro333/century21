<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserForm;
use App\Http\Requests;

class AdminPanelController extends Controller
{
    public function adminPanel() {
    	$users = UserForm::all();

    	return view('admin',compact('users'));
    }
}
