<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Col
 *
 * col elements define the alignment properties for cells in
 *  one or more columns.
 *
 *  The width attribute specifies the width of the columns, e.g.
 *
 *  width=64 width in screen pixels
 *  width=0.5* relative width of 0.5
 *
 *  The span attribute causes the attributes of one
 *  col element to apply to more than one column.
 */
class Col
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
     * @var int $span
     */
    private $span = null;

    /**
     * @var string $width
     */
    private $width = null;

    /**
     * @var string $align
     */
    private $align = null;

    /**
     * @var string $char
     */
    private $char = null;

    /**
     * @var string $charoff
     */
    private $charoff = null;

    /**
     * @var string $valign
     */
    private $valign = null;

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
     * Gets as span
     *
     * @return int
     */
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * Sets a new span
     *
     * @param int $span
     * @return self
     */
    public function setSpan($span)
    {
        $this->span = $span;
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
     * Gets as align
     *
     * @return string
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * Sets a new align
     *
     * @param string $align
     * @return self
     */
    public function setAlign($align)
    {
        $this->align = $align;
        return $this;
    }

    /**
     * Gets as char
     *
     * @return string
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * Sets a new char
     *
     * @param string $char
     * @return self
     */
    public function setChar($char)
    {
        $this->char = $char;
        return $this;
    }

    /**
     * Gets as charoff
     *
     * @return string
     */
    public function getCharoff()
    {
        return $this->charoff;
    }

    /**
     * Sets a new charoff
     *
     * @param string $charoff
     * @return self
     */
    public function setCharoff($charoff)
    {
        $this->charoff = $charoff;
        return $this;
    }

    /**
     * Gets as valign
     *
     * @return string
     */
    public function getValign()
    {
        return $this->valign;
    }

    /**
     * Sets a new valign
     *
     * @param string $valign
     * @return self
     */
    public function setValign($valign)
    {
        $this->valign = $valign;
        return $this;
    }


}

