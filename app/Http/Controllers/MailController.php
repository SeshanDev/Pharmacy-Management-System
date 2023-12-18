<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrecriptionModel;
use App\Mail\QuaotationMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    

    public function show(){
        $uniqueEmails = PrecriptionModel::select('email')->distinct()->get();

        foreach ($uniqueEmails as $email) {
        Mail::to($email->email)->send(new QuaotationMail());
    }
        
        return redirect('precribtion-list')->with('message', 'Quatation E-mail send Successfully');
    }

}
