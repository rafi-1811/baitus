<?php

namespace App\Mail;

use App\Models\Donatur;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Donatur $donatur)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('officialyayasan@baitussaadahamanah.org', "Yayasan Baitus Sa'adah Amanah"),
            subject: 'Terima Kasih atas donasi Anda',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.email',
            with: [
                'id' => $this->donatur->transaksi_id,
                'nama' => $this->donatur->nama,
                'jumlah' => $this->donatur->jumlah,
                'tanggal' => $this->donatur->created_at->locale('id')->translatedFormat('d F Y'),
            ]
        );
    }
}
