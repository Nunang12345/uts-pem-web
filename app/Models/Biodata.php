<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'peran',
        'deskripsi',
        'foto',
    ];

    /**
     * Inisial nama untuk avatar pengganti foto.
     */
    public function inisial(): string
    {
        $kata = preg_split('/\s+/', trim($this->nama));

        $inisial = mb_substr($kata[0], 0, 1);
        if (count($kata) > 1) {
            $inisial .= mb_substr(end($kata), 0, 1);
        }

        return mb_strtoupper($inisial);
    }
}
