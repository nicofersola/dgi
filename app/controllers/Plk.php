<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Helpers\AuthHelper;

class plk extends Controller
{
    public function index()
    {
        try {
            $this->view('eso', []);
        } catch (\Exception $e) {
            AuthHelper::redirectWithMessage('/dgii/public/error', 'error', 'Error al cargar el dashboard de administrador.');
        }
    }
}
