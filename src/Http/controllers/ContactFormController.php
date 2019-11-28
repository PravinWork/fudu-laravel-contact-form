<?php
// FuduGo\Contactform\src\Http\Controllers\ContactFormController.php
namespace FuduGo\Contactform\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use FuduGo\Contactform\Models\ContactForm;

class ContactFormController extends Controller {

    public function index()
    {
       return view('Contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}