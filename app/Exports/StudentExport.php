<?php

namespace App\Exports;

use App\Model\User\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection($id)
    {
        $id = $id;
        return Student::where('project_id',$id)->get();
    }
}
