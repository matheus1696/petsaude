<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EvaluetionDataRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        $dateAfter = date('Y-m-d',strtotime('-1 month')); 
        $dateBefore = date('Y-m-d',strtotime('+2 month'));

        if ($value >= $dateBefore || $value <= $dateAfter ) {
            $fail('A :attribute deve ser posterior a '.  date('d/m/Y',strtotime($dateAfter)) .' deve ser anterior a '. date('d/m/Y',strtotime($dateBefore)));
        }
    }
}
