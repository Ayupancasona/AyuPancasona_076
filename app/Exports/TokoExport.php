<?php

namespace App\Exports;

use App\Toko;
use Maatwebsite\Excel\Concerns\FromCollection;

class TokoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Toko::all();
    }
}
