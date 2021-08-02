<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
class emailController extends Controller
{
    public function mails() {
        $mails = Email::select('*')->get();
        dd($mails);
    }

    public function new_mail(Request $request) {

        $mail = new Email();
        $mail->name = $request->name;
        $mail->save();

        return response()->json($mail, 200);
    }
}
