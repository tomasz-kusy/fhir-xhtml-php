<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Th
 */
class Th extends FlowType
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
     * @var string $abbr
     */
    private $abbr = null;

    /**
     * @var mixed $axis
     */
    private $axis = null;

    /**
     * @var string[] $headers
     */
    private $headers = null;

    /**
     * @var string $scope
     */
    private $scope = null;

    /**
     * @var int $rowspan
     */
    private $rowspan = null;

    /**
     * @var int $colspan
     */
    private $colspan = null;

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
     * Gets as abbr
     *
     * @return string
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * Sets a new abbr
     *
     * @param string $abbr
     * @return self
     */
    public function setAbbr($abbr)
    {
        $this->abbr = $abbr;
        return $this;
    }

    /**
     * Gets as axis
     *
     * @return mixed
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Sets a new axis
     *
     * @param mixed $axis
     * @return self
     */
    public function setAxis($axis)
    {
        $this->axis = $axis;
        return $this;
    }

    /**
     * Adds as headers
     *
     * @return self
     * @param string $headers
     */
    public function addToHeaders($headers)
    {
        $this->headers[] = $headers;
        return $this;
    }

    /**
     * isset headers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHeaders($index)
    {
        return isset($this->headers[$index]);
    }

    /**
     * unset headers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHeaders($index)
    {
        unset($this->headers[$index]);
    }

    /**
     * Gets as headers
     *
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Sets a new headers
     *
     * @param string[] $headers
     * @return self
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Gets as scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as rowspan
     *
     * @return int
     */
    public function getRowspan()
    {
        return $this->rowspan;
    }

    /**
     * Sets a new rowspan
     *
     * @param int $rowspan
     * @return self
     */
    public function setRowspan($rowspan)
    {
        $this->rowspan = $rowspan;
        return $this;
    }

    /**
     * Gets as colspan
     *
     * @return int
     */
    public function getColspan()
    {
        return $this->colspan;
    }

    /**
     * Sets a new colspan
     *
     * @param int $colspan
     * @return self
     */
    public function setColspan($colspan)
    {
        $this->colspan = $colspan;
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

