<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class Ckeditor extends AbstractHandler
{
    protected $codename = 'ckeditor';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('admin.formfields.ckeditor', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}