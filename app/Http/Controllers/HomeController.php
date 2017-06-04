<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function formuCertificado() {
        return view('admin/certificado');
    }

    public function pdfCertificado() {
        $this->validate(request(), [
            'nombres' => 'max:200|required',
            'apellidos' => 'max:200|required',
            'sede' => 'max:200|required',
            'nDocumento' => 'required|integer',
            'horas' => 'required|integer',
            'grado' => 'max:200|required',
            'sede' => 'max:200|required',
            'colegio' => 'max:200|required',
            'ciudad' => 'max:200|required',
        ]);

        $res = request()->all();
        //$pdf = \PDF::loadView('admin/certificadoFisico', ['data' => $res]);
        /*$pdf = \PDF::loadView('admin.certificadoFisico',['data' => $res]);
        //$pdf = \PDF::loadFile('http://www.github.com');
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 1000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('print-media-type',true);
        $pdf->setOption('footer-center', '"Pagina [page] de [toPage]"');
        return $pdf->download('Certificado.pdf');
       */ return view('admin/certificadoFisico', ['data' => $res]);
    }

    public function certificadoHtml() {

        return view('admin/certificadoFisico');
    }

}
