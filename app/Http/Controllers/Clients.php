<?php

namespace App\Http\Controllers;

use App\Models\Post as Client;
use Illuminate\Http\Request;

class Clients extends Controller
{
    public function index(){
        $Clients = Client::get();
        return view('index', ['clients' => $Clients]);
    }
}
