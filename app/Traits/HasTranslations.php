<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait HasTranslations
{
    /**
     * Mengambil teks berdasarkan locale aplikasi (id/en).
     * Fallback ke 'id' atau 'en' jika bahasa yang diminta tidak ada.
     *
     * @param string $field
     * @return string
     */
    public function getTrans(string $field)
    {
        $locale = App::getLocale(); // Mendapatkan bahasa aktif ('id' atau 'en')
        
        // Decode JSON dari database
        $data = json_decode($this->attributes[$field] ?? '{}', true);

        // Prioritas: Bahasa Aktif -> ID -> EN -> Kosong
        return $data[$locale] ?? $data['id'] ?? $data['en'] ?? '';
    }
}