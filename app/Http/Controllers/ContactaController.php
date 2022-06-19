<?php

namespace App\Http\Controllers;
use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactaController extends Controller
{
    public function index(){
        return view('contacta.index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mensaje' => 'required',
    ]);

        $correo=new ContactaMail($request->all());
        Mail::to('ruben.naranco@gmail.com')->send($correo);
        return redirect(route('contacta.index'))->with('success','Email enviado');
    }
}