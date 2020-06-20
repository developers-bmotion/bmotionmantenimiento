<?php

namespace App\Http\Controllers;

use App\Information;
use App\Mail\NewClienteRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CountdownController extends Controller
{
    public function index(){
        return view('home');
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:information,email',
            'phone' => 'required|numeric'
        ]);

        $information = new Information;

        $information->name = $request->name;
        $information->email = $request->email;
        $information->phone = $request->phone;
        $information->message = $request->message;
        $information->save();
        Mail::to($information->email)->send(new NewClienteRegister($information->name));
        return back()->with('exito', '¡Gracias por registrarte! Hemos enviado un correo electrónico confirmando tu registro.');

    }

    public function newsletter(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|unique:information,email',
        ]);

        $information = new Information;
        $information->email = $request->email;
        $information->save();
        Mail::to($information->email)->send(new NewClienteRegister($information->name));
        return back()->with('exito', '¡Gracias por inscribirte al boletín! Hemos enviado un correo electrónico de confirmación.');

    }
}
