<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class ExcelImport implements OnEachRow, WithHeadingRow
{
    /**
     * @param \Maatwebsite\Excel\Row $row
    */
    public function onRow(Row $row)
    {
        $rowData = $row->toArray();
        print_r($rowData);
    }
}
