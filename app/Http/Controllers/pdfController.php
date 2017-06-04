<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pdfController extends Controller
{
 public function github (){
 $pdf = \PDF::loadFile('http://www.github.com');
 return $pdf->download('github.pdf');
 }
}

