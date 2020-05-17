<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function get_deneme(){
        $adim = Input::get('adim');
        $soyadim = Input::get('soyadim');
        return view('deneme')->with('adim',$adim)->with('soyadim',$soyadim);
    }
    public function get_form(){
        return view('form');
    }
    public function post_form(Request $request){
        $birinci = $request->birinci;
        $ikinci = $request->ikinci;
        $toplam = $birinci+$ikinci;
        return view('form')->with("toplam",$toplam);
    }
    public function get_deneme_isim ($adim){
        return view('deneme')->with('adim',$adim);
    }
}
