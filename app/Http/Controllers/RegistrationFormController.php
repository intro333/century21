<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserForm;

class RegistrationFormController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function sending_data(Request $request) {
    	UserForm::create($request->all());
    }
}
