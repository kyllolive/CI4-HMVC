<?php

namespace Modules\auth\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $folder_directory = "Modules\\auth\\Views\\";

    public function index()
    {
        return view($this->folder_directory . 'index');
    }
}