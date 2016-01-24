<?php

namespace MMA\Http\Controllers\Backend;

use Illuminate\Http\Request;

use MMA\Http\Requests;
use MMA\Http\Controllers\Controller;
use MMA\Component;
class ComponentsController extends Controller
{

    public function header(Component $component)
    {
        $component =  $component->findOrFail(2);
        return view('backend.component.index', compact('component'));
    }


    public function about(Component $component)
    {
        $component =  $component->findOrFail(1);

        return view('backend.component.index', compact('component'));


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

    public function update(Request $request,Component $component)
    {
        $com = $component->findOrFail($request->id);
        $com->fill($request->only('title','body'))->save();
        return redirect()->back()->with('status', strtoupper($com->type).' has been updated.');
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
