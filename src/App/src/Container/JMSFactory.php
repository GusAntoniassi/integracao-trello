<?php
namespace App\Container;

/**
 * Description of JMSFactory
 *
 * @author lucas.patriarca
 */

use JMS\Serializer\Accessor\DefaultAccessorStrategy;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

class JMSFactory
{

    public function __invoke()
    {
        // 15 é uma bitmask de JSON_HEX_TAG + JSON_HEX_AMP + JSON_HEX_APOS + JSON_HEX_QUOT,
        // que são as opções do json_encode.
        // Referências: http://php.net/manual/pt_BR/function.json-encode.php e
        // https://github.com/schmittjoh/serializer/issues/265
        $bitmask = 15;
        $namingStrategy = new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy());
        $accessorStrategy = new DefaultAccessorStrategy();

        $serializationVisitor = new JsonSerializationVisitor($namingStrategy, $accessorStrategy);
        $serializationVisitor->setOptions($bitmask);

        $deserializationVisitor = new \JMS\Serializer\JsonDeserializationVisitor($namingStrategy);

        $serializer = SerializerBuilder::create()
            ->addDefaultSerializationVisitors()
            ->addDefaultDeserializationVisitors()
            ->setSerializationVisitor('json', $serializationVisitor)
            ->setDeserializationVisitor('json', $deserializationVisitor)
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->build();

        return $serializer;
    }
}