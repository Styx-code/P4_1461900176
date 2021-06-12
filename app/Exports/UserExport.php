<?php

namespace App\Exports;

use App\Models\user as exportuser;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return exportuser::all();
    }
}
