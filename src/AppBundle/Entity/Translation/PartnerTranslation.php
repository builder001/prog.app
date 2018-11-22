<?php

namespace AppBundle\Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="partner_translations",uniqueConstraints={@ORM\UniqueConstraint(name="lookup_unique_idx",
 *     columns={"locale","object_class","field"})})
 */
class PartnerTranslation extends AbstractPersonalTranslation
{
    /**
     * PartnerTranslation constructor.
     * @param string $locale
     * @param string $field
     * @param string $value
     */
    public function __construct($locale,$field,$value)
    {
        $this->setLocale($locale);
        $this->setField($field);
        $this->setContent($value);
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Partner",inversedBy="translations")
     * @ORM\JoinColumn(name="object_class",referencedColumnName="id",onDelete="CASCADE")
     */
    protected $object;
}
