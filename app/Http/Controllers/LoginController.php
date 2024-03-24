<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repository\Eloquent\LoginRepository;

class LoginController extends Controller
{

    public function __construct(protected LoginRepository $loginRepository){}

    public function login(){
        return view("login");
    }

    public function loginAdmin(LoginRequest $request){
    
       if(!$this->loginRepository->login($request->validated())){
            return redirect()->route('login')->withErrors("Login Credentials are invalid");
       }

       return redirect()->route("dashboard.admin");
    }
}
