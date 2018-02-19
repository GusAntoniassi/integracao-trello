<?php
namespace App\Response;

use Zend\Diactoros\Response\JsonResponse;

class SuccessResponse extends JsonResponse
{
    /**
     * @param string $message
     * @param int $status
     * @param array $headers
     * @param int $encodingOptions
     */
    public function __construct($message, $status = 200, array $headers = array(), $encodingOptions = self::DEFAULT_JSON_FLAGS)
    {
        $data = [
            'status' => 'sucesso',
            'mensagem' => $message
        ];

        parent::__construct($data, $status, $headers, $encodingOptions);
    }
}