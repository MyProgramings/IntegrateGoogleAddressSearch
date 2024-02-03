<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('index', compact('maps'));
    }

    public function store(Request $request)
    {
        Map::create($request->all());
        return back();
    }

    public function show(Map $map)
    {
        // dd($map);
        return view('contries', compact('map'));
    }
}
