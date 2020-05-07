<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Area
 */
class Area
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string[] $class
     */
    private $class = null;

    /**
     * @var string $style
     */
    private $style = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var string $dir
     */
    private $dir = null;

    /**
     * @var string $accesskey
     */
    private $accesskey = null;

    /**
     * @var int $tabindex
     */
    private $tabindex = null;

    /**
     * @var string $shape
     */
    private $shape = null;

    /**
     * @var string $coords
     */
    private $coords = null;

    /**
     * @var string $href
     */
    private $href = null;

    /**
     * @var string $nohref
     */
    private $nohref = null;

    /**
     * @var string $alt
     */
    private $alt = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as class
     *
     * @return self
     * @param string $class
     */
    public function addToClass($class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * @return string[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * @param string[] $class
     * @return self
     */
    public function setClass(array $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Sets a new style
     *
     * @param string $style
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as dir
     *
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Sets a new dir
     *
     * @param string $dir
     * @return self
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
        return $this;
    }

    /**
     * Gets as accesskey
     *
     * @return string
     */
    public function getAccesskey()
    {
        return $this->accesskey;
    }

    /**
     * Sets a new accesskey
     *
     * @param string $accesskey
     * @return self
     */
    public function setAccesskey($accesskey)
    {
        $this->accesskey = $accesskey;
        return $this;
    }

    /**
     * Gets as tabindex
     *
     * @return int
     */
    public function getTabindex()
    {
        return $this->tabindex;
    }

    /**
     * Sets a new tabindex
     *
     * @param int $tabindex
     * @return self
     */
    public function setTabindex($tabindex)
    {
        $this->tabindex = $tabindex;
        return $this;
    }

    /**
     * Gets as shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Sets a new shape
     *
     * @param string $shape
     * @return self
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Gets as coords
     *
     * @return string
     */
    public function getCoords()
    {
        return $this->coords;
    }

    /**
     * Sets a new coords
     *
     * @param string $coords
     * @return self
     */
    public function setCoords($coords)
    {
        $this->coords = $coords;
        return $this;
    }

    /**
     * Gets as href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as nohref
     *
     * @return string
     */
    public function getNohref()
    {
        return $this->nohref;
    }

    /**
     * Sets a new nohref
     *
     * @param string $nohref
     * @return self
     */
    public function setNohref($nohref)
    {
        $this->nohref = $nohref;
        return $this;
    }

    /**
     * Gets as alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Sets a new alt
     *
     * @param string $alt
     * @return self
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }


}

