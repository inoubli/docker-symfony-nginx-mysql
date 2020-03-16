<?php

declare(strict_types=1);

namespace JMS\Serializer\Tests\Fixtures\Discriminator;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\Discriminator(field = "type", map = {
 *    "car": "JMS\Serializer\tests\Fixtures\Discriminator\Car",
 *    "moped": "JMS\Serializer\tests\Fixtures\Discriminator\Moped",
 * })
 */
abstract class Vehicle
{
    /** @Serializer\Type("integer") */
    public $km;

    public function __construct($km)
    {
        $this->km = (int) $km;
    }
}
