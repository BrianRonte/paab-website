<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Homepage
     */
    public function home()
    {
        $latestNews = News::published()
                         ->orderBy('published_at', 'desc')
                         ->take(3)
                         ->get();
        
        return view('pages.home', compact('latestNews'));
    }

    // =============================================
    // ABOUT SECTION
    // =============================================

    public function aboutOverview()
    {
        return view('pages.about.overview');
    }

    public function aboutMandate()
    {
        return view('pages.about.mandate');
    }

    public function aboutBoard()
    {
        return view('pages.about.board');
    }

    public function aboutConstituentBodies()
    {
        return view('pages.about.constituent-bodies');
    }

    // =============================================
    // SERVICES SECTION
    // =============================================

    public function servicesRegistration()
    {
        return view('pages.services.registration');
    }

    public function servicesLicensing()
    {
        return view('pages.services.licensing');
    }

    public function servicesPracticeReview()
    {
        return view('pages.services.practice-review');
    }

    // Note: verify-practitioner is now handled by FirmController

    // =============================================
    // OTHER PAGES
    // =============================================

    /**
     * Standards page
     */
    public function standards()
    {
        return view('pages.standards');
    }

    /**
     * Resources page
     */
    public function resourcesPage()
    {
        return view('pages.resources');
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function contactSubmit(Request $request)
{
    $validated = $request->validate([
        'name'         => 'required|string|max:255',
        'email'        => 'required|email|max:255',
        'phone'        => 'nullable|string|max:50',
        'inquiry_type' => 'nullable|string|max:100',
        'subject'      => 'required|string|max:255',
        'message'      => 'required|string|max:5000',
        'privacy'      => 'accepted',
    ]);

    // Source of truth — always saved
    $contact = ContactMessage::create([
        'name'         => $validated['name'],
        'email'        => $validated['email'],
        'phone'        => $validated['phone'] ?? null,
        'inquiry_type' => $validated['inquiry_type'] ?? null,
        'subject'      => $validated['subject'],
        'message'      => $validated['message'],
        'ip_address'   => $request->ip(),
    ]);

    // Best-effort notification — a mail failure must not lose the message
    try {
        Mail::to('info@paab.org.zw')->send(new ContactFormSubmitted($contact));
    } catch (\Throwable $e) {
        report($e);
    }

    return redirect()->route('contact')
        ->with('success', 'Thank you for your message. We will get back to you soon!');
}

}