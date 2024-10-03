<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersTasksExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new ExportUser(),
            new ExportTask(),
        ];
    }
}
