<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public static function renderHeader($variables = []) {
        $variables["usuario"] = session("usuario");

        if (!isset($variables["module"]) || $variables["module"] == "") {
            $variables["module"] = 0;
        }

        echo view("templates.header", $variables);
    }

    public static function renderFooter($variables = []) {
        echo view("templates.footer", $variables);
    }
}
