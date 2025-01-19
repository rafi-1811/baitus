<?php

namespace App\Services;

class NewsContentService
{
    public function splitContent(string $body): array
    {
        // Pisahkan konten berdasarkan titik (.)
        $sentences = preg_split('/(?<=\.)\s+/', $body);

        // Jika hanya ada satu kalimat, bagi menjadi 4 bagian otomatis
        if (count($sentences) === 1) {
            // Jika hanya ada satu kalimat, bagi teks menjadi 4 bagian
            $length = strlen($body);
            $totalParts = 4;
            $partLength = ceil($length / $totalParts);

            $sentences = [
                substr($body, 0, $partLength), // Opening
                substr($body, $partLength, $partLength), // Pre Image
                substr($body, 2 * $partLength, $partLength), // Beside Image
                substr($body, 3 * $partLength) // Closing
            ];
        }

        // Siapkan array hasil untuk bagian-bagian konten
        $result = [
            'opening' => '',
            'pre_image' => '',
            'beside_image' => '',
            'closing' => ''
        ];

        // Distribusikan kalimat atau bagian ke dalam array hasil
        $totalSentences = count($sentences);

        if ($totalSentences > 0) {
            $result['opening'] = implode(' ', array_slice($sentences, 0, 2)); // Menggabungkan 2 kalimat pertama untuk opening

            if ($totalSentences > 2) {
                $result['pre_image'] = implode(' ', array_slice($sentences, 2, 2)); // Menggabungkan 2 kalimat berikutnya untuk pre image

                if ($totalSentences > 4) {
                    $result['beside_image'] = implode(' ', array_slice($sentences, 4, 2)); // Menggabungkan 2 kalimat berikutnya untuk beside image

                    if ($totalSentences > 6) {
                        $result['closing'] = implode(' ', array_slice($sentences, 6)); // Sisanya untuk closing
                    }
                }
            }
        }

        return $result;
    }
}
