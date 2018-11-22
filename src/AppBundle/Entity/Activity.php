<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Translation\ActivityTranslation;
use Gedmo\Translatable\Translatable;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ActivityRepository")
 * @Gedmo\TranslationEntity(class="AppBundle\Entity\Translation\ActivityTranslation")
 * @ORM\Table(name="activity")
 */
class Activity implements Translatable
{
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Gedmo\Translatable()
     * @ORM\Column(type="text")
     */
    private $content;
    /**
     * @Gedmo\Locale()
     */
    private $locale;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Translation\ActivityTranslation", mappedBy="object",
     *     cascade={"persist","remove"})
     */
    private $translations;

    public function __construct()
    {
        $this->translations = new ArrayCollection();
    }

    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

    public function getTranslations()
    {
        return $this->translations;
    }

    public function addTranslation(ActivityTranslation $a)
    {
        if (!$this->translations->contains($a)){
            $this->translations[] = $a;
            $a->setObject($this);
        }
    }

    public function removeTranslation(ActivityTranslation $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     * @param string $content
     * @return Activity
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
