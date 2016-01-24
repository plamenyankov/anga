<?php

namespace MMA\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use MMA\Component;
use MMA\Http\Requests;
use MMA\Http\Controllers\Controller;
use MMA\Offer;

class HomeController extends Controller
{
    protected $offers;
    /**
     * HomeController constructor.
     */
    public function __construct(Offer $offer)
    {
        $this->offers = $offer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Component $component)
    {

        $header = $component->where('type','header')->first();
        $about = $component->where('type','about')->first();
        $offers = $this->offers->orderBy('updated_at','desc')->get();

        return view('welcome',compact('header','about','offers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
