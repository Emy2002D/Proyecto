<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reg_user;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    

    public function Login(request $REQUEST)
    {
       
$credentials = [

    "correo" => $REQUEST->correo,
    "passowrd" => $REQUEST->password,
];

$remember = ($REQUEST->has('remember') ? true: false);


   if(auth::attempt($credentials,$remember)){

     $REQUEST->session()->regenerate();

     return redirect()->intended(route('index'));


}
else{
    return redirect('sesion');
}

    }


    public function Logout(request $REQUEST)
    {
     
          

    }
    

} 