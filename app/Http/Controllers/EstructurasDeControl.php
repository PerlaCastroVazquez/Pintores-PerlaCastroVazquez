<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EstructurasDeControl extends Controller
{
    public function welcome(){
        return redirect()->action('EstructurasDeControl@plantilla');
    }
    public function plantilla(){
        return view('plantilla', ['dato'=>'Es un dato']);
    }
    public function davinci(){
        return view('davinci', ['header' => 'Leonardo di ser Piero da Vinci']);
    }
    public function Picasso(){
        return view('picasso', ['header' => 'Pablo Diego José Francisco de Paula Juan Nepomuceno María de los Remedios Cipriano de la Santísima Trinidad Ruiz y Picasso']);
    }
    public function Salvador(){
        return view('salvador', ['header' => 'Salvador Felipe Jacinto Dalí i Domènech']);
    }
    public function VanGogh(){
        return view('vangogh', ['header' => 'Vincent Willem van Gogh']);
    }
    public function Kahlo(){
        return view('kahlo', ['header' => 'Magdalena Carmen Frida Kahlo Calderón']);
    }
    public function login(){
        return view ('admon.login');
    }
    public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = hash::make($request->input('key'));

        if ($user === 'raul.toledo'){
            $url = 'admon.dashboard';
        }else{
            $url='admon.login';
        }
        return view($url, [
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
    }
}
