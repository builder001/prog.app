<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Translation\PublishTranslation;
use Gedmo\Translatable\Translatable;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PublishRepository")
 * @Gedmo\TranslationEntity(class="AppBundle\Entity\Translation\PublishTranslation")
 * @ORM\Table(name="publish")
 */
class Publish implements Translatable
{
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $slug;
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Translation\PublishTranslation", mappedBy="object",
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

    public function addTranslation(PublishTranslation $p)
    {
        if (!$this->translations->contains($p)) {
            $this->translations[] = $p;
            $p->setObject($this);
        }
    }

    public function removeTranslation(PublishTranslation $translation)
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

    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Publish
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
