<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
         if (request()->ajax()) {
            return DataTables::make(User::select('id', 'name', 'position', 'email'))->make(true);
        }
        // Logic to retrieve and display users
        return view('users.index');
    }
}
