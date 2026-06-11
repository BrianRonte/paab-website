<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Phone:</strong> {{ $contact->phone ?? '—' }}</p>
<p><strong>Inquiry Type:</strong> {{ $contact->inquiry_type ?? '—' }}</p>
<p><strong>Subject:</strong> {{ $contact->subject }}</p>
<p><strong>Message:</strong></p>
<p>{{ $contact->message }}</p>
<hr>
<p style="color:#666;font-size:12px;">
    Received {{ $contact->created_at->format('d M Y, H:i') }} · IP {{ $contact->ip_address }}
</p>