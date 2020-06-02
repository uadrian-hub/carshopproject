<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;

class DashboardController extends Controller
{
    
    public function index()
    {
        $this->data['users'] = User::all();
        $this->data['roles'] = Role::all();
        return view('admin.dashboard.index');
    }



} // End Of Controller
