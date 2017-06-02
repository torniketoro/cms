<?php

namespace App\Models;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Entity;
use Ramsey\Uuid\Uuid;

/**
 * @Entity
 * @Table(name="test")
 */
class Test
{
    /**
     * @var \Ramsey\Uuid\Uuid
     *
     * @Id
     * @Column(type="uuid")
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}