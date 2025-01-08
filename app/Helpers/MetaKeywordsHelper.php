<?php 

namespace App\Helpers;

class MetaKeywordsHelper
{
    public static function generateKeywords($content, $limit = 20)
    {
        $words = preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower($content));
        $words = explode(' ', $words);
        
        $wordFrequency = array_count_values($words);
        arsort($wordFrequency);
        $topWords = array_slice(array_keys($wordFrequency), 0, $limit);
        
        return implode(', ', $topWords);
    }
}
