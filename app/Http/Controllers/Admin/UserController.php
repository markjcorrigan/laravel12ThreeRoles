<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

//    public function __construct() {
//        $this->middleware(['auth', 'verified', 'role:admin']);
//    }
    public function index() {
            $users = User::all();
            return view( 'admin.users.index', compact( 'users' ));
        }
}
