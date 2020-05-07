<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Tr
 */
class Tr
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
     * @var \TKusy\FhirXhtml\Th[] $th
     */
    private $th = [
        
    ];

    /**
     * @var \TKusy\FhirXhtml\Td[] $td
     */
    private $td = [
        
    ];

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

    /**
     * Adds as th
     *
     * @return self
     * @param \TKusy\FhirXhtml\Th $th
     */
    public function addToTh(\TKusy\FhirXhtml\Th $th)
    {
        $this->th[] = $th;
        return $this;
    }

    /**
     * isset th
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTh($index)
    {
        return isset($this->th[$index]);
    }

    /**
     * unset th
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTh($index)
    {
        unset($this->th[$index]);
    }

    /**
     * Gets as th
     *
     * @return \TKusy\FhirXhtml\Th[]
     */
    public function getTh()
    {
        return $this->th;
    }

    /**
     * Sets a new th
     *
     * @param \TKusy\FhirXhtml\Th[] $th
     * @return self
     */
    public function setTh(array $th)
    {
        $this->th = $th;
        return $this;
    }

    /**
     * Adds as td
     *
     * @return self
     * @param \TKusy\FhirXhtml\Td $td
     */
    public function addToTd(\TKusy\FhirXhtml\Td $td)
    {
        $this->td[] = $td;
        return $this;
    }

    /**
     * isset td
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTd($index)
    {
        return isset($this->td[$index]);
    }

    /**
     * unset td
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTd($index)
    {
        unset($this->td[$index]);
    }

    /**
     * Gets as td
     *
     * @return \TKusy\FhirXhtml\Td[]
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Sets a new td
     *
     * @param \TKusy\FhirXhtml\Td[] $td
     * @return self
     */
    public function setTd(array $td)
    {
        $this->td = $td;
        return $this;
    }


}

