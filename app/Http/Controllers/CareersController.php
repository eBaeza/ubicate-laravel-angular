<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Career;

class CareersController extends Controller
{
    /**
     * Display a listing of the careers.
     *
     * @return JSON
     */
    public function getIndex()
    {
        $result = Career::with('universities')->select('id', 'name', 'area')->get();

        return response()->json( $result->toArray() );
    }

    /**
     * Display the specified career.
     * Responds to requests to GET /careers/by-id/{id}
     *
     * @param  int  $id
     * @return JSON
     */
    public function getById($id)
    {
        $result = Career::with('universities')->select('id', 'name', 'area')->find($id);

        return response()->json( $result->toArray() ); 
    }

    /**
     * Display careers by area
     * Responds to requests to GET /careers/by-area/{area}
     *
     * @param  string  $area
     * @return JSON
     */
    public function getByArea($area)
    {
        $result = Career::with('universities')->select('id', 'name', 'area')
                    ->where('area', $area)->get();

        return response()->json( $result->toArray() ); 
    }
}
