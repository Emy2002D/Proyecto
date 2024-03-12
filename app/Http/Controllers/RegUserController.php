<?php

namespace App\Http\Controllers;

use App\Models\reg_user;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegUserController extends Controller
{
    
    public function index()
    {
        return view('user');
    }

     
    public function create()
    {
        //

        return view('usuario');

    }

     
    public function store(Request $request)
    {
        $User = new reg_user();

        $User -> Nombre = $request -> nombre;
        $User -> Ape_Paterno = $request ->ape_mate;
        $User -> Ape_Materno = $request -> ape_pate;
        $User -> Correo = $request -> correo;
        $User -> password =Hash::make($request -> pass);
        $User -> save();
        echo $User;
        return Redirect(route('index'));

    
    }
 
    public function show(reg_user $reg_user)
    {
        //
    }

 
    public function edit(reg_user $reg_user)
    {
        //
    }

     
    public function update(Request $request, reg_user $reg_user)
    {
        //
    }

    
    public function destroy(reg_user $reg_user)
    {
        //
    }
}
