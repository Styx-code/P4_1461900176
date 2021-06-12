<?php

namespace App\Exports;

use App\Models\jenis_buku as exportjenisbuku;
use Maatwebsite\Excel\Concerns\FromCollection;

class JenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return exportjenisbuku::all();
    }
}
