<?php
namespace App\Container;

class GuzzleFactory
{
    public function __invoke(\Interop\Container\ContainerInterface $container) {
        return new \GuzzleHttp\Client([
            'verify' => getcwd() . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'cacert.pem'
        ]);
    }
}