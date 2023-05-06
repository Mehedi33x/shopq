<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    public function admin_panel()
    {
    return view('backend.master');
    }

    public function dashboard(){
        return view('backend.pages.dashboard.dashborad');
    }

}
