<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MidtransController extends Controller
{
    public function handleNotification(Request $request)
    {
        $payload = $request->all();
        
        // Validasi signature Midtrans
        $input = $payload['order_id'] . $payload['status_code'] . $payload['gross_amount'] . config('midtrans.server_key');

        $signature = openssl_digest($input, 'sha512');

        if ($signature !== $payload['signature_key']) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // Update status donatur & campaign
        $donatur = Donatur::where('transaksi_id', $payload['order_id'])->first();

        if ($donatur) {
            if (in_array(strtolower($payload['transaction_status']), ['settlement', 'capture'])) {
                $donatur->updateStatusAndCampaignTotal('SUCCESS');
            } elseif (strtolower($payload['transaction_status']) == 'pending') {
                $donatur->updateStatusAndCampaignTotal('PENDING');
            } elseif (in_array(strtolower($payload['transaction_status']), ['expire', 'cancel', 'deny'])) {
                $donatur->updateStatusAndCampaignTotal('FAILED');
            }
        }

        return response()->json(['message' => 'Notification handled successfully']);
    }
}
