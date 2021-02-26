<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserFormRequest;
use App\Mail\ConfirmMail;
use Illuminate\Support\Facades\Mail;

class UserRegistController extends Controller
{
    public function index()
    {
        return view('user_regist');
    }

    public function confirm(UserFormRequest $request)
    {
        return view('user_confirm', [
            'users' => $request
        ]);
    }

    public function store(UserFormRequest $request)
    {
        User::create([
            'name' => $request->input('lastname') . ' ' . $request->input('firstname'),
            'email' => $request->input('email'),
            'password' => 'dummy'
        ]);

        Mail::to($request->input('email'))->send(new ConfirmMail(User::where('email', $request->input('email'))->first()));

        return view('user_store');
    }

    public function show()
    {
        return view('user_list', [
            'users' => User::all()
        ]);
    }
}
