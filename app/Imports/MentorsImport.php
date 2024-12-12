<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Mentor;

class MentorsImport implements ToModel
{
    public function model(array $row)
    {
        return new Mentor([
            'name' => $row[1],
            'position' => $row[2],
            'address' => $row[3],
            'gender' => $row[4],
            'phone_number' => $row[5],
        ]);
    }
}