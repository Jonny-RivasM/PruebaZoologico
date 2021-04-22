<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $text=trim($request->get('text'));
        $users=DB::table('users')
            ->select('id','name', 'email')
            ->where('name', 'LIKE','%'.$text.'%')
            ->orderBy('name', 'asc')
            ->paginate(15);
        return view('users.index', compact('users','text'));

    }

}
