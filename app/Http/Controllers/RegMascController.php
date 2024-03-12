<?php

namespace App\Http\Controllers;

use App\Models\reg_masc;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Redirect;

class RegMascController extends Controller
{
   
    public function index()
    {
        return view('masc');
    }

   
    public function create()
    {
        
        return view('masc');

    }

   
    public function store(Request $request)
    {
        
        $masc = new reg_masc();

        $masc -> Masc_nom = $request -> masc_nom;
        $masc -> Masc_raza   = $request -> masc_raza;
        $masc -> Masc_edad = $request -> masc_edad;
        $masc -> Masc_sexo = $request -> masc_sexo;
        $masc -> save();
        echo $masc;
        return Redirect(route('index'));

    }

   
    public function show(reg_masc $reg_masc)
    {
       
    }

   
    public function edit(reg_masc $reg_masc)
    {
        
    }

 
    public function update(Request $request, reg_masc $reg_masc)
    {
       
    }

    
    public function destroy(reg_masc $reg_masc)
    {
        
    }
}
