<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Img
 */
class Img
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
     * @var string $src
     */
    private $src = null;

    /**
     * @var string $alt
     */
    private $alt = null;

    /**
     * @var string $longdesc
     */
    private $longdesc = null;

    /**
     * @var string $height
     */
    private $height = null;

    /**
     * @var string $width
     */
    private $width = null;

    /**
     * usemap points to a map element which may be in this document
     *  or an external document, although the latter is not widely supported
     *
     * @var string $usemap
     */
    private $usemap = null;

    /**
     * @var string $ismap
     */
    private $ismap = null;

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
     * Gets as src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Sets a new src
     *
     * @param string $src
     * @return self
     */
    public function setSrc($src)
    {
        $this->src = $src;
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

    /**
     * Gets as longdesc
     *
     * @return string
     */
    public function getLongdesc()
    {
        return $this->longdesc;
    }

    /**
     * Sets a new longdesc
     *
     * @param string $longdesc
     * @return self
     */
    public function setLongdesc($longdesc)
    {
        $this->longdesc = $longdesc;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param string $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as usemap
     *
     * usemap points to a map element which may be in this document
     *  or an external document, although the latter is not widely supported
     *
     * @return string
     */
    public function getUsemap()
    {
        return $this->usemap;
    }

    /**
     * Sets a new usemap
     *
     * usemap points to a map element which may be in this document
     *  or an external document, although the latter is not widely supported
     *
     * @param string $usemap
     * @return self
     */
    public function setUsemap($usemap)
    {
        $this->usemap = $usemap;
        return $this;
    }

    /**
     * Gets as ismap
     *
     * @return string
     */
    public function getIsmap()
    {
        return $this->ismap;
    }

    /**
     * Sets a new ismap
     *
     * @param string $ismap
     * @return self
     */
    public function setIsmap($ismap)
    {
        $this->ismap = $ismap;
        return $this;
    }


}

