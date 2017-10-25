<?php

namespace SAS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Welcome
 *
 * @ORM\Table(name="welcome")
 * @ORM\Entity(repositoryClass="SAS\CoreBundle\Repository\WelcomeRepository")
 */
class Welcome
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=75)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="small_content", type="text")
     */
    private $smallContent;

    /**
     * @var string
     *
     * @ORM\Column(name="long_content", type="text")
     */
    private $longContent;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=75)
     */
    private $img;


    /**
     * Get id
     *
     * @return int
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
     * @return Welcome
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

    /**
     * Set smallContent
     *
     * @param string $smallContent
     *
     * @return Welcome
     */
    public function setSmallContent($smallContent)
    {
        $this->smallContent = $smallContent;

        return $this;
    }

    /**
     * Get smallContent
     *
     * @return string
     */
    public function getSmallContent()
    {
        return $this->smallContent;
    }

    /**
     * Set longContent
     *
     * @param string $longContent
     *
     * @return Welcome
     */
    public function setLongContent($longContent)
    {
        $this->longContent = $longContent;

        return $this;
    }

    /**
     * Get longContent
     *
     * @return string
     */
    public function getLongContent()
    {
        return $this->longContent;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Welcome
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}

