<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function index() {

        $admin = Auth::user()->role; 

        switch($admin) {
            case "Oggi":

                $users = User::all();

                return view('admin.admin', [
                    'users' => $users
                ]);

                break;
            case "Gansta":

                $users = User::all();

                return view('admin.admin', [
                    'users' => $users
                ]);

                break;
            case "Super Admin":

                $users = User::all();

                return view('admin.admin', [
                    'users' => $users,
                ]);

                break;
            default:

                return view('welcome');
        }
        
    }

    public function destroy($id) {
        return User::destroy($id);
    }

}
