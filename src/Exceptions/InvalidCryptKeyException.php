<?php

namespace Accordous\D4sign\Exceptions;

class InvalidCryptKeyException extends \Exception
{
    protected $message = 'CryptKey not found.';
}
