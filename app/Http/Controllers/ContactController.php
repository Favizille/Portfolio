<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ContactRequest;
use App\Notifications\ContactNotification;
use App\Repository\Eloquent\ContactRepository;

class ContactController extends Controller
{
    public function __construct(protected ContactRepository $contactRepository, protected User $user){}

    public function sendMessage(ContactRequest $request){
        $response = $this->contactRepository->sendMessage($request->validated);

        if(!$response['status'] == true){
            return redirect()->back()->withErrors('Failed to send messaage');
        }

        $user = $this->user->where('email', "favourgabriel50@gmaill.com");

        $user->notify(new ContactNotification($request));
        
        //Notification Facade Method
        // $users = User::all();
        // Notification::send($users, new DepositSuccessful($deposit->amount));
        
        return redirect()->back()->with('message', 'Message Sent Successfully');
    }

    public function markAsRead(){
        $user = $this->user->where('email', "favourgabriel50@gmaill.com");
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}
