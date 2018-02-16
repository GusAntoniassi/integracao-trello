<?php
namespace App\Exception;

class InvalidArgumentException extends \Exception
{
    public function __construct(string $message = "Parâmetros inválidos", int $code = 400, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}