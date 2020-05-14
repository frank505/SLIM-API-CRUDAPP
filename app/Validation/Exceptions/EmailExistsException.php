<?php


namespace App\Validation\Exceptions;


use Respect\Validation\Exceptions\ValidationException;


class EmailExistsException extends ValidationException
{

    public static $defaultTemplates =
        [
         self::MODE_DEFAULT => [
             self::STANDARD => 'email is already taken'
         ]
        ];


}