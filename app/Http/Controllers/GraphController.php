<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        cookie('graph_id', null, -1);
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $graph = new Graph();
        // random name
        $graph->name = $request->name;
        
        $graph->graph = $request->data;
        $graph->tutorial_id = 1;
        $graph->user_id = auth()->user()->id;
        //$graph->user_id = 1;
        $graph->save();

        return "done";
    }

    /**
     * Display the specified resource.
     */
    public function get_graph($id)
    {
        $graph_id = $id;
        $cookie_e = 10;

        $cookie = cookie('graph_id', $graph_id, $cookie_e / 60);
        
        return redirect('/editors')->cookie($cookie);
    }

    public function show($id)
    {
        $graph = Graph::where('id', $id)->first();
        
        return $graph->graph;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Graph $graph)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Graph $graph)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graph $graph)
    {
        //
    }
}
