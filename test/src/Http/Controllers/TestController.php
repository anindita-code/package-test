<?php

namespace Anindita\Test\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Anindita\Test\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Anindita\Test\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        return view('test::test');
    }
    public function submit(Request $request)
    {
        $new = New Contact;
        $new->email = $request->email;
        $new->name = $request->name;
        $new->save();
        $user = Contact::findOrFail($new->id);
        Mail::to('anindita@uaguria.com')->send(new TestEmail($user)); //send email
        return redirect::back();
    }
}
