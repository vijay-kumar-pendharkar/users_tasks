<?php

namespace App\Exports;

use App\Models\Task; 
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportTask implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Task::all(); 
    }

    public function headings(): array
    {
        return [
            'Id',
            'Title',
            'Description',
            'User_Id',
            'Task_type',
            
           
        ];
    }
}
