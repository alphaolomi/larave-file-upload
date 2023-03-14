<?php

namespace App\Imports;

use App\Models\Property;
use Maatwebsite\Excel\Concerns\ToModel;

class PropertyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Property([
            'name'     => $row[0],
            'address'    => $row[1],
        ]);
    }
}
