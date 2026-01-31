<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Here you can save to database or send email
        // For now, just redirect with success
        return back()->with('success', 'تم إرسال رسالتك بنجاح! سنتواصل معك قريباً.');
    }

    public function consultation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'project_type' => 'required|string',
            'area' => 'nullable|numeric',
            'message' => 'nullable|string|max:1000',
        ]);

        // Save or send email
        return back()->with('success', 'تم طلب الاستشارة بنجاح! سنتواصل معك خلال 24 ساعة.');
    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Save email
        return back()->with('success', 'تم الاشتراك في النشرة البريدية بنجاح!');
    }
}
