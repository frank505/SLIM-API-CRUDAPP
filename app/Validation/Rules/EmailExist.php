<?php


namespace App\Validation\Rules;


use App\Models\GuestEntry;
use Respect\Validation\Rules\AbstractRule;

class EmailExist extends AbstractRule
{

    public function validate($input): bool
    {
        // TODO: Implement validate() method.
        return GuestEntry::where('email',$input)->count === 0;
    }

}