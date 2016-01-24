<?php

namespace MMA\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MMA\Http\Requests;
use MMA\Http\Controllers\Controller;
use MMA\Subscriber;
use NZTim\Mailchimp\Mailchimp;

class SubscribeController extends Controller
{
    protected $mailchimp;
    protected $listId = 'd471dd7c52';
    protected $subscribe;
    public function __construct(Mailchimp $mailchimp, Subscriber $subscriber)
    {
        $this->mailchimp = $mailchimp;
        $this->subscribe = $subscriber;
    }
    public function mail(Request $request){
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $message1 = $request->get('message');
        $subscribe = $request->get('subscribe');
        if($subscribe == 'true') {
            $this->mailchimp->subscribe('d471dd7c52', $email, [], false);
        }
        $to = "p.s.yankov@abv.bg";

        Mail::send('emails.subscribe', ['msg'=>$message1,'email'=>$email,'phone'=>$phone,'name'=>$name], function ($message)use ($email,$to,$name) {
            $message->from($email,'Anga Group website');
            $message->to($to)->subject('New message from '.$name);
        });
            $user = $this->subscribe->where('email',$request->email)->first();
        if(!$user) {
            $this->subscribe->create($request->only('name', 'phone', 'email', 'subscribed_at'))->save();
        }else{
            $this->subscribe->where('email',$request->email)->update($request->only('name', 'phone', 'subscribed_at'));
        }
        return 1;
    }
    public function mailchimp(Request $request){

            $this->mailchimp->subscribe('d471dd7c52', $request->email, [], false);
            $this->subscribe->create($request->only('email', 'subscribed_at'))->save();
        return 1;
    }
    public function test(){
        dd($this->subscribe->where('email','plamenyankov"yahoo.com')->first());
    }
}
