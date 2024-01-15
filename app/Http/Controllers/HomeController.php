<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {

            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('dashboard');
            }
            else if ($usertype == 'admin') {
                return view('admin.adminhome'); // Ubah sesuai dengan nama file blade Anda (tanpa ekstensi .blade.php)
            }
            
            else 
            {
                return redirect()->back();
            }
        }
    }
}
