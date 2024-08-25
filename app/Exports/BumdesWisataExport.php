<?php

namespace App\Exports;

use App\Models\BumdesWisata;
use Maatwebsite\Excel\Concerns\FromCollection;

class BumdesWisataExport implements FromCollection
{
    public function collection()
    {
        return BumdesWisata::all();
    }
}
