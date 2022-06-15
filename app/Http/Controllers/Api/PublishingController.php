<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\publishing;
use Illuminate\Http\Request;

class PublishingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishings = publishing::all();
        return $publishings;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       publishing::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  publishing $publishing
     * @return \Illuminate\Http\Response
     */
    public function show(publishing $publishing)
    {
        return $publishing;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  publishing $publishing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publishing $publishing)
    {
        $publishing->update($request->all());

        return $publishing;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  publishing $publishing
     * @return \Illuminate\Http\Response
     */
    public function destroy(publishing $publishing)
    {
        $publishing->delete();
    }
}
