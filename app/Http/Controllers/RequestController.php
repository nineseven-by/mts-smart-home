<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Http\Requests\MailingRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\SuggestionRequest;
use App\Mail\ConsultationMail;
use App\Mail\OrderMail;
use App\Models\Consultation;
use App\Models\Mailing;
use App\Models\Order;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function orderRequest(OrderRequest $request){
        $data = $request->validated();
        $order = new Order($data);
        $order->save();
        Mail::to(config('mail.recipients'))->send(new OrderMail($order));
        
        return response()->json('Success');
    }

    public function consultationRequest(ConsultationRequest $request){
        $data = $request->validated();
        $consultation = new Consultation($data);
        $consultation->save();
        Mail::to(config('mail.recipients'))->send(new ConsultationMail($consultation));
        
        return response()->json('Success');
    }

    public function mailingRequest(MailingRequest $request){
        $data = $request->validated();
        $data['news'] = intval($data['news']);
        $data['promotions'] = intval($data['promotions']);
        $mailing = new Mailing($data);
        $mailing->save();
        
        return response()->json('Success');
    }

    public function suggestionRequest(SuggestionRequest $request){
        $data = $request->validated();
        $mailing = new Suggestion($data);
        $mailing->save();
        
        return response()->json('Success');
    }
}
