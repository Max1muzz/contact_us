<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        foreach ($data as &$value) {
            $value = htmlspecialchars(trim($value));
        }
        unset($value);
        //dd($data);
        Contact::create($data);
        return redirect()->route('contact.create')->with('status', 'Application sent!');
    }
}
