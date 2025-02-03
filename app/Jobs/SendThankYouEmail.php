<?php

namespace App\Jobs;

use App\Models\Donatur;
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendThankYouEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected Donatur $donatur)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->donatur->email)
        ->send(new ThankYouMail($this->donatur));
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('Gagal mengirim email ke donatur: ' . $this->donatur->transaksi_id, [
            'message' => $exception->getMessage()
        ]);
    }
}
