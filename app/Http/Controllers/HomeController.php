<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Apartment;
use App\Models\Floor;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Notifications\KontaktNotification;
use Illuminate\Support\Facades\Log;
use Notification;
use Exception;
class HomeController extends Controller
{
    public function gallery(){
        $albums = Album::where('is_active', 1)->get();

        return view('galerija', ['albums' => $albums]);
    }

    public function floors(Request $request, $id){
        $floors = Floor::findOrFail($id);

        return view('tehnicki-prikaz', ['floors' => $floors]);
    }

    public function apartmant(Request $request, $id){
        $apartmant = Apartment::findOrFail($id);
        $floor = Floor::select('id', 'title')->get();
        return view('detail', ['apartmant' => $apartmant, 'floor' => $floor]);
    }

    public function contact(Request $request)
    {
        $request->validate([
            // 'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
            //     if (!app('captcha')->verifyResponse($value)) {
            //         $fail('Invalid reCAPTCHA response.');
            //     }
            // }],
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:300'],
        ]);   


        $html = '<b>Ime:</b> '.htmlspecialchars($request->input('name')).'<br>';
        $html .= '<b>Email:</b> '.htmlspecialchars($request->input('email')).'<br>';
        if($request->input('message')!='') $html .= '<b>Napomena:</b> '.htmlspecialchars($request->input('message')).'<br>';

        try {
             Notification::route('mail', 'acocoaj123@gmail.com')->notify(new KontaktNotification($html, $request->input('email'), $request->input('name')));
        } catch (Exception $e) {
            Log::info($e);
        }
        
        return redirect('thank-you');
    }
}
