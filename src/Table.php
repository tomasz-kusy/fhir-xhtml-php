<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Table
 */
class Table
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
     * @var string $summary
     */
    private $summary = null;

    /**
     * @var string $width
     */
    private $width = null;

    /**
     * @var int $border
     */
    private $border = null;

    /**
     * @var string $frame
     */
    private $frame = null;

    /**
     * @var string $rules
     */
    private $rules = null;

    /**
     * @var string $cellspacing
     */
    private $cellspacing = null;

    /**
     * @var string $cellpadding
     */
    private $cellpadding = null;

    /**
     * @var \TKusy\FhirXhtml\Caption $caption
     */
    private $caption = null;

    /**
     * @var \TKusy\FhirXhtml\Col[] $col
     */
    private $col = [
        
    ];

    /**
     * @var \TKusy\FhirXhtml\Colgroup[] $colgroup
     */
    private $colgroup = [
        
    ];

    /**
     * @var \TKusy\FhirXhtml\Thead $thead
     */
    private $thead = null;

    /**
     * @var \TKusy\FhirXhtml\Tfoot $tfoot
     */
    private $tfoot = null;

    /**
     * @var \TKusy\FhirXhtml\Tbody[] $tbody
     */
    private $tbody = [
        
    ];

    /**
     * @var \TKusy\FhirXhtml\Tr[] $tr
     */
    private $tr = [
        
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
     * Gets as summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * @param string $summary
     * @return self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
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
     * Gets as border
     *
     * @return int
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Sets a new border
     *
     * @param int $border
     * @return self
     */
    public function setBorder($border)
    {
        $this->border = $border;
        return $this;
    }

    /**
     * Gets as frame
     *
     * @return string
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * Sets a new frame
     *
     * @param string $frame
     * @return self
     */
    public function setFrame($frame)
    {
        $this->frame = $frame;
        return $this;
    }

    /**
     * Gets as rules
     *
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Sets a new rules
     *
     * @param string $rules
     * @return self
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * Gets as cellspacing
     *
     * @return string
     */
    public function getCellspacing()
    {
        return $this->cellspacing;
    }

    /**
     * Sets a new cellspacing
     *
     * @param string $cellspacing
     * @return self
     */
    public function setCellspacing($cellspacing)
    {
        $this->cellspacing = $cellspacing;
        return $this;
    }

    /**
     * Gets as cellpadding
     *
     * @return string
     */
    public function getCellpadding()
    {
        return $this->cellpadding;
    }

    /**
     * Sets a new cellpadding
     *
     * @param string $cellpadding
     * @return self
     */
    public function setCellpadding($cellpadding)
    {
        $this->cellpadding = $cellpadding;
        return $this;
    }

    /**
     * Gets as caption
     *
     * @return \TKusy\FhirXhtml\Caption
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Sets a new caption
     *
     * @param \TKusy\FhirXhtml\Caption $caption
     * @return self
     */
    public function setCaption(\TKusy\FhirXhtml\Caption $caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * Adds as col
     *
     * @return self
     * @param \TKusy\FhirXhtml\Col $col
     */
    public function addToCol(\TKusy\FhirXhtml\Col $col)
    {
        $this->col[] = $col;
        return $this;
    }

    /**
     * isset col
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCol($index)
    {
        return isset($this->col[$index]);
    }

    /**
     * unset col
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCol($index)
    {
        unset($this->col[$index]);
    }

    /**
     * Gets as col
     *
     * @return \TKusy\FhirXhtml\Col[]
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Sets a new col
     *
     * @param \TKusy\FhirXhtml\Col[] $col
     * @return self
     */
    public function setCol(array $col)
    {
        $this->col = $col;
        return $this;
    }

    /**
     * Adds as colgroup
     *
     * @return self
     * @param \TKusy\FhirXhtml\Colgroup $colgroup
     */
    public function addToColgroup(\TKusy\FhirXhtml\Colgroup $colgroup)
    {
        $this->colgroup[] = $colgroup;
        return $this;
    }

    /**
     * isset colgroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColgroup($index)
    {
        return isset($this->colgroup[$index]);
    }

    /**
     * unset colgroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColgroup($index)
    {
        unset($this->colgroup[$index]);
    }

    /**
     * Gets as colgroup
     *
     * @return \TKusy\FhirXhtml\Colgroup[]
     */
    public function getColgroup()
    {
        return $this->colgroup;
    }

    /**
     * Sets a new colgroup
     *
     * @param \TKusy\FhirXhtml\Colgroup[] $colgroup
     * @return self
     */
    public function setColgroup(array $colgroup)
    {
        $this->colgroup = $colgroup;
        return $this;
    }

    /**
     * Gets as thead
     *
     * @return \TKusy\FhirXhtml\Thead
     */
    public function getThead()
    {
        return $this->thead;
    }

    /**
     * Sets a new thead
     *
     * @param \TKusy\FhirXhtml\Thead $thead
     * @return self
     */
    public function setThead(\TKusy\FhirXhtml\Thead $thead)
    {
        $this->thead = $thead;
        return $this;
    }

    /**
     * Gets as tfoot
     *
     * @return \TKusy\FhirXhtml\Tfoot
     */
    public function getTfoot()
    {
        return $this->tfoot;
    }

    /**
     * Sets a new tfoot
     *
     * @param \TKusy\FhirXhtml\Tfoot $tfoot
     * @return self
     */
    public function setTfoot(\TKusy\FhirXhtml\Tfoot $tfoot)
    {
        $this->tfoot = $tfoot;
        return $this;
    }

    /**
     * Adds as tbody
     *
     * @return self
     * @param \TKusy\FhirXhtml\Tbody $tbody
     */
    public function addToTbody(\TKusy\FhirXhtml\Tbody $tbody)
    {
        $this->tbody[] = $tbody;
        return $this;
    }

    /**
     * isset tbody
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTbody($index)
    {
        return isset($this->tbody[$index]);
    }

    /**
     * unset tbody
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTbody($index)
    {
        unset($this->tbody[$index]);
    }

    /**
     * Gets as tbody
     *
     * @return \TKusy\FhirXhtml\Tbody[]
     */
    public function getTbody()
    {
        return $this->tbody;
    }

    /**
     * Sets a new tbody
     *
     * @param \TKusy\FhirXhtml\Tbody[] $tbody
     * @return self
     */
    public function setTbody(array $tbody)
    {
        $this->tbody = $tbody;
        return $this;
    }

    /**
     * Adds as tr
     *
     * @return self
     * @param \TKusy\FhirXhtml\Tr $tr
     */
    public function addToTr(\TKusy\FhirXhtml\Tr $tr)
    {
        $this->tr[] = $tr;
        return $this;
    }

    /**
     * isset tr
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTr($index)
    {
        return isset($this->tr[$index]);
    }

    /**
     * unset tr
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTr($index)
    {
        unset($this->tr[$index]);
    }

    /**
     * Gets as tr
     *
     * @return \TKusy\FhirXhtml\Tr[]
     */
    public function getTr()
    {
        return $this->tr;
    }

    /**
     * Sets a new tr
     *
     * @param \TKusy\FhirXhtml\Tr[] $tr
     * @return self
     */
    public function setTr(array $tr)
    {
        $this->tr = $tr;
        return $this;
    }


}

