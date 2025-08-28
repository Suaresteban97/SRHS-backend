<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Vista publica para usuarios SDA
     */
    public function index (Request $request) {
        //$usuario = session("usuario");
        $version = date("Ymd");

        GeneralController::renderHeader([
            "titulo" => "Inicio",
            "version" => $version
        ]);

        echo view("components.public.index", [
            //"usuario" => $usuario
        ]);

        GeneralController::renderFooter([
            "scripts" => [
                "public/Index.js"
            ]
        ]);
    }
}
