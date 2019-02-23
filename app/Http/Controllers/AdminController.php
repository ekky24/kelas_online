<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function member() {
    	$member = User::all();
    	$json_member = json_encode($member);
    	return view('admin.admin', compact('member', 'json_member'));
    }
}
