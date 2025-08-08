<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Helpers\AuthHelper;

class Dgi extends Controller
{
    public function index()
    {
        try {
            $this->view('dgi', []);
        } catch (\Exception $e) {
            AuthHelper::redirectWithMessage('/dgii/public/error', 'error', 'Error al cargar el dashboard de administrador.');
        }
    }
}
