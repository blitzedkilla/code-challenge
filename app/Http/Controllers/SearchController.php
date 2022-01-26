<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\Spoty;


class SearchController extends Controller
{
    
    public function index()
    {
        return view('index');
    }


    public function search(Request $request)
    {
        $spoty = new Spoty('da71c8295e8a4ab1a40525e72dfffd5d', '54517e9fd12e41639122a3e39418c1ab');
        $query = $request->get('query');
        $spoty->auth_spotify();
        $data = $spoty->search($query);

        return view('search', [
            'artists' => ($data->artists->items),
            'albums' => ($data->albums->items),
            'tracks' => ($data->tracks->items),
        ]);
    }

    public function detail($entity, $id)
    {
        $spoty = new Spoty('da71c8295e8a4ab1a40525e72dfffd5d', '54517e9fd12e41639122a3e39418c1ab');
        $spoty->auth_spotify();
        $data = $spoty->get($entity, $id);

        return view('detail', [
            'data' => ($data),
            'entity' => (substr($entity,0,-1)),
        ]);
    }	
}
