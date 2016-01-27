<?php

namespace MMA\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use MMA\Http\Controllers\Controller;
use MMA\Http\Requests;
use MMA\Offer;

class OffersController extends Controller
{
    protected $offer;

    /**
     * OffersController constructor.
     */
    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Offer $offer)
    {
        $offers = $offer->paginate(10);

        return view('backend.offers.index', compact('offers'));
    }
    public function confirm($id){
        $offer = $this->offer->findOrFail($id);
        return view('backend.offers.confirm',compact('offer'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Offer $offer)
    {

        return view('backend.offers.form', compact('offer'));

    }

    public function file($id)
    {
        $offer = $this->offer->findOrFail($id);
        $file = $offer->filename;
        $offer->fill(['filename'=>''])->save();
        $store = Storage::delete('public/offers/' . $file);

        if ($store == 302) {
            $message = "File was deleted!";
        } else {
            $message = "Something went wrong!";
        }
        return redirect()->back()->with('status', $message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreOfferRequest $request, Offer $offer)
    {
        $active = $request->active ?: 0;
        $filename = '';
        $destinationPath = "offers/";
        $file = $request->file('filename');
        if ($file) {
            $filename = $file->getClientOriginalName();
            if (file_exists(public_path('offers/' . $filename))) {
                return redirect()->back()->withInput()->withErrors([' File already exists.']);
            }
            $request->file('filename')->move($destinationPath, $filename);
        }

        $offer->create(['title' => $request->title, 'body' => $request->body, 'active' => $active, 'filename' => $filename])->save();

        return redirect(route('backend.offers.index'))->with('status', 'Offer was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = $this->offer->findOrFail($id);
        return view('backend.offers.form', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateOfferRequest $request, $id)
    {
        $offer = $this->offer->findOrFail($id);
        $active = $request->active ?: 0;
        $filename = '';
        $destinationPath = "offers/";
        $file = $request->file('filename');
        if ($file) {
            $filename = $file->getClientOriginalName();
            if (file_exists(public_path('offers/' . $filename))) {
                return redirect()->back()->withInput()->withErrors([' File already exists.']);
            }
            $request->file('filename')->move($destinationPath, $filename);
        } else {
            $filename = $offer->filename;
        }
        $offer->fill(['title' => $request->title, 'body' => $request->body, 'active' => $active, 'filename' => $filename])->save();
        return redirect()->back()->with('status','Offer was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = $this->offer->findOrFail($id);
        if($offer->filename){
            unlink(public_path('offers/' . $offer->filename));
        }
        $offer->delete();
        return redirect(route('backend.offers.index'))->with('status','The offer has been deleted.');
    }
}
