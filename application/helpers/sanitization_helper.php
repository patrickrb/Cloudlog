<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('remove_emojis')) {
    /**
     * Removes emojis from a string by allowing only specific Unicode ranges.
     *
     * @param string $text The input text from which emojis will be removed.
     * @return string Text with emojis removed.
     */
    function remove_non_alphanumeric($text) {
        // This regex allows only alphanumeric characters
        $regex = '/[^a-zA-Z0-9]/';
        
        // Replace all non-alphanumeric characters with an empty string
        $sanitized_text = preg_replace($regex, '', $text);
        
        // Return the sanitized string
        return $sanitized_text;
    }
}
