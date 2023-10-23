<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {
        $usuario = auth()->user(); // Obtener el usuario autenticado

        $pdf = Pdf::loadView('crear-cv.index', compact('usuario'));
        return $pdf->stream('cv.pdf');
    }
}
