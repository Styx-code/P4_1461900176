<?php

namespace App\Exports;

use App\Models\buku as exportbuku;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return exportbuku::all();
    }
}
