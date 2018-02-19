<?php
namespace App\Exception;

class UniqueConstraintViolationException extends \Exception
{
    public function __construct(string $message = "Registro já existente", int $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}