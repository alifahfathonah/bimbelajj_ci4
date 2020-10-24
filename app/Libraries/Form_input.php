<?php

namespace App\Libraries;

//use App\Controllers\BaseController;

class Form_input
{
    public function input_text($fld, $label, $old, $validasi, $valasli, $tipe = 'text')
    {
        $class = ($validasi->hasError($fld)) ? 'form-control is-invalid' : 'form-control';
        $fdb = $fld . 'Feedback';
        $extra = [
            'id' => $fld,
            'class' => $class,
            'aria-describedby' => $fdb
        ];
        if ($valasli == NULL) {
            $valasli = '';
        }
        $val = ($old != null) ? $old : $valasli;
        $err = $validasi->getError($fld);

        $html = '<div class="form-group row">';
        $html .= form_label($label, $fld, ['class' => 'col-2 col-form-label']);
        $html .= '<div class="col-10">';
        $html .= form_input($fld, $val, $extra, $tipe);
        $html .= '<div id="' . $fdb . '" class="invalid-feedback">';
        $html .= $err . '</div>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}
