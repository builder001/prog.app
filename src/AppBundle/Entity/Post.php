<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Translation\PostTranslation;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PostRepository")
 * @Gedmo\TranslationEntity(class="AppBundle\Entity\Translation\PostTranslation")
 * @ORM\Table(name="post")
 */
class Post implements Translatable
{
    const NUM_ITEMS = 10;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;
    /**
     * @Gedmo\Translatable
     * @ORM\Column(type="text")
     */
    private $content;
    /**
     * @Gedmo\Locale
     */
    private $locale;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Translation\PostTranslation", mappedBy="object",
     *     cascade={"persist", "remove"})
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

    public function addTranslation(PostTranslation $p)
    {
        if (!$this->translations->contains($p)) {
            $this->translations[] = $p;
            $p->setObject($this);
        }
    }

    public function removeTranslation(PostTranslation $translation)
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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
     * @return Post
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
