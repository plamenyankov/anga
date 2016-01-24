<?php

namespace MMA\Http\Controllers\Backend;
use MMA\Offer;

use MMA\Subscriber;
use MMA\User;
class DashboardController extends Controller{
    public function index(Offer $offer, User $user, Subscriber $subscriber){
        $offers = $offer->orderBy('updated_at','desc')->take(5)->get();
        $sub = $subscriber->orderBy('subscribed_at','desc')->paginate(10);
        $users = $user->whereNotNull('last_login_at')->orderBy('last_login_at','desc')->take(5)->get();
        return view('backend.dashboard',compact('offers','users','sub'));
    }
}