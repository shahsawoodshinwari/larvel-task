<?php

namespace App\Imports;

use App\Models\Attribute;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class ExcelImport implements OnEachRow, SkipsEmptyRows, WithHeadingRow
{
    /**
     * @param \Maatwebsite\Excel\Row $row
     */
    public function onRow(Row $row)
    {
        $rowData = $row->toArray();

        // extract headings from row
        $headings = array_keys($rowData);

        // create a product
        $product = Product::create();

        // loop through the headings to create database fields
        foreach ($headings as $heading) {
            // unexpectedly it imports some fields with numbers so we are skipping them
            if (is_numeric($heading)) continue;
            
            // create attribute if does not exist or get existing
            $attribute = Attribute::firstOrCreate([
                'name' => $heading,
            ]);

            // attach attribute to product and save its value
            $product->attributes()->attach($attribute, ['value' => $rowData[$heading]]);
        }
    }
}
