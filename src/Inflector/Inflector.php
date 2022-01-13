<?php

namespace GoetasWebservices\Xsd\XsdToPhp\Inflector;

use Doctrine\Inflector\InflectorFactory;

class Inflector
{
    public static function camelize(string $word): string
    {
        return InflectorFactory::create()->build()->camelize($word);
    }

    public static function classify(string $word): string
    {
        return InflectorFactory::create()->build()->classify($word);
    }
}
