<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index(Request $r) {

        $searchValue = '';
        if(count( $r->all() ) <= 0 || empty($r->client)) {
            $clients = Client::get();
        } else {
            $clients = Client::where('name', 'LIKE', '%' . $r->client . '%')->get(); // collection
            $searchValue = $r->client;
        }

        return view('clients.overview', [
            'klanten' => $clients,
            'search' => $searchValue
        ]);

    }
}
