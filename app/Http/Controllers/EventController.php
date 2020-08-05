<?php

namespace App\Http\Controllers;

use App\category;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=event::join('categories','events.category_id','=','categories.id')
                    ->join('cities','events.city_id','=','cities.id')
                    ->select('categories.*','events.*','cities.*','categories.id as categories_id_table','events.id as events_id_table','cities.id as cities_id_table')
                    ->orderby('events.id','desc')
                    ->get();
        $categories=category::get();
        return view('welcome',compact('data','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->cat==1)
        {
            $data=event::join('categories','events.category_id','=','categories.id')
                        ->join('cities','events.city_id','=','cities.id')
                        ->select('categories.*','events.*','cities.*','categories.id as categories_id_table','events.id as events_id_table','cities.id as cities_id_table')
                        ->where([
                            ['events.event','like','%'.$request->event.'%'],
                            ])
                        ->orderby('events.id','desc')
                        ->get();
        }
        else
        {
            $data=event::join('categories','events.category_id','=','categories.id')
                        ->join('cities','events.city_id','=','cities.id')
                        ->select('categories.*','events.*','cities.*','categories.id as categories_id_table','events.id as events_id_table','cities.id as cities_id_table')
                        ->where([
                            ['events.event','like','%'.$request->event.'%'],
                            ['events.category_id','=',$request->cat]
                            ])
                        ->orderby('events.id','desc')
                        ->get();
        }


        $categories=category::get();
        return view('welcome',compact('data','categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        //
    }
}
