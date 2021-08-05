<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return [
            "NIS" => 3103119081,
            "Name" => "Grahandhika Gustam Awansyah Putra",
            "Gender" => "Laki-laki",
            "Phone" => 6281225936018,
            "Class" => "XII RPL 3",
        ];
    }
}
