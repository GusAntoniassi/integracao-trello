<?php
namespace App\Service;

class TrelloService
{
    const API_URL = 'https://trello.com/1';
    const TIMES_ENDPOINT = '/members/ccgbot/organizations';
    const QUADROS_ENDPOINT = '/boards/';

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    /**
     * @var array
     */
    private $trelloConfig;

    public function __construct($client, $serializer, $trelloConfig)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->trelloConfig = $trelloConfig;
    }

    public function getTimes() {
        $url = self::API_URL . self::TIMES_ENDPOINT;
        $response = $this->client->get($url, [
            'query' => [
                'key' => $this->trelloConfig['auth']['key'],
                'token' => $this->trelloConfig['auth']['token']
            ]
        ]);

        try {
            $times = $this->serializer->deserialize($response->getBody()->getContents(), 'ArrayCollection<' . \App\Model\Trello\Time::class . '>', 'json');
        } catch (\Exception $e) {
            /**
             * @TODO: Melhorar essa exceção
             */
            throw new \Exception('Erro ao deserializar o retorno do trello - ' . $e->getMessage());
        }

        return $times;
    }

    public function criarQuadro() {
        
    }
}