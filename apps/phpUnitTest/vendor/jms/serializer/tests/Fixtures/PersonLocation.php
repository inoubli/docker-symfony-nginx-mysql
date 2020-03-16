<?php

declare(strict_types=1);

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("person_location")
 */
class PersonLocation
{
    /**
     * @Type("JMS\Serializer\tests\Fixtures\Person")
     */
    public $person;

    /**
     * @Type("string")
     */
    public $location;
}
