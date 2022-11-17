<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "nis" => "3103120120",
            "phone" => "085777710458",
            "nama" => "Juan Putra Hardiansyah",
            "kelas" => "XII RPL 4",

        ];
    }
}
