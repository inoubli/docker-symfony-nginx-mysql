<?php

declare(strict_types=1);

namespace JMS\Serializer\Tests\Fixtures\Doctrine\SingleTableInheritance;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *     "student" = "JMS\Serializer\tests\Fixtures\Doctrine\SingleTableInheritance\Student",
 *     "teacher" = "JMS\Serializer\tests\Fixtures\Doctrine\SingleTableInheritance\Teacher",
 * })
 */
abstract class Person extends AbstractModel
{
    /** @ORM\Id @ORM\GeneratedValue(strategy = "AUTO") @ORM\Column(type = "integer") */
    private $id;
}
