<?php

namespace App\Http\Controllers;

use App\Models\reg_citas;
use Illuminate\Http\Request;

class RegCitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }


    public function create()
    {
        return view('citas');
        
    }

   
    public function store(Request $request)
    {
    
        $Citas = new reg_citas();

        $Citas -> Cit_Nom_masc = $request -> nom_masc;

        $Citas -> Cit_Raza = $request -> raza;

        $Citas -> Cit_Edad = $request -> edad;

$Citas -> Cit_Sexo = $request -> sexo;


        $Citas -> Cit_Nom = $request -> Nom_Duen;

        $Citas -> Cit_Correo= $request -> Cit_correo;

        $Citas -> save();

        echo $Citas;
         
        return Redirect(route('index'));

    }

    
    public function show(reg_citas $reg_citas)
    {
        
    }

 
    public function edit(reg_citas $reg_citas)
    {
        
    }

   
    public function update(Request $request, reg_citas $reg_citas)
    {
        
    }

  
    public function destroy(reg_citas $reg_citas)
    {
        //
    }
}
