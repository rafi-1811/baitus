<?php

namespace App\Services;

class NewsContentService
{
    public function splitContent(string $body): array
    {
        // Pisahkan konten berdasarkan paragraf (double newline)
        $paragraphs = array_filter(explode("\n\n", $body));
        
        $result = [
            'opening' => '',      
            'pre_image' => '',    
            'beside_image' => '', 
            'closing' => ''       
        ];
        
        $totalParagraphs = count($paragraphs);
        
        if ($totalParagraphs > 0) {
            $result['opening'] = $paragraphs[0];
            
            if ($totalParagraphs > 1) {
                $result['pre_image'] = $paragraphs[1];
                
                if ($totalParagraphs > 2) {
                    $result['beside_image'] = $paragraphs[2];
                    
                    if ($totalParagraphs > 3) {
                        $result['closing'] = implode("\n\n", array_slice($paragraphs, 3));
                    }
                }
            }
        }
        
        return $result;
    }
}