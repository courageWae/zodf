<?php

namespace App\Imports;

use App\Model\User\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            //
            'First Name' => $row['firstname'],
            'Last Name' => $row['lastname'],
            'E-mail' => $row['email'],
            'Phone' => $row['phone'],
            'Gender' => $row['gender'],
            'DOB' => $row['dob'],
            'Address' => $row['address'],
            'City' => $row['city'],
            'Country' => $row['country'],
        ]);
    }
}
