<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
       $users = User::all();
        return view( 'admin.users.dashboard', compact( 'users' ));
    }

}
