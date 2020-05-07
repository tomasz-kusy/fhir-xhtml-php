<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Dl
 */
class Dl
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
     * @var \TKusy\FhirXhtml\Dt[] $dt
     */
    private $dt = [
        
    ];

    /**
     * @var \TKusy\FhirXhtml\Dd[] $dd
     */
    private $dd = [
        
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
     * Adds as dt
     *
     * @return self
     * @param \TKusy\FhirXhtml\Dt $dt
     */
    public function addToDt(\TKusy\FhirXhtml\Dt $dt)
    {
        $this->dt[] = $dt;
        return $this;
    }

    /**
     * isset dt
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDt($index)
    {
        return isset($this->dt[$index]);
    }

    /**
     * unset dt
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDt($index)
    {
        unset($this->dt[$index]);
    }

    /**
     * Gets as dt
     *
     * @return \TKusy\FhirXhtml\Dt[]
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt
     *
     * @param \TKusy\FhirXhtml\Dt[] $dt
     * @return self
     */
    public function setDt(array $dt)
    {
        $this->dt = $dt;
        return $this;
    }

    /**
     * Adds as dd
     *
     * @return self
     * @param \TKusy\FhirXhtml\Dd $dd
     */
    public function addToDd(\TKusy\FhirXhtml\Dd $dd)
    {
        $this->dd[] = $dd;
        return $this;
    }

    /**
     * isset dd
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDd($index)
    {
        return isset($this->dd[$index]);
    }

    /**
     * unset dd
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDd($index)
    {
        unset($this->dd[$index]);
    }

    /**
     * Gets as dd
     *
     * @return \TKusy\FhirXhtml\Dd[]
     */
    public function getDd()
    {
        return $this->dd;
    }

    /**
     * Sets a new dd
     *
     * @param \TKusy\FhirXhtml\Dd[] $dd
     * @return self
     */
    public function setDd(array $dd)
    {
        $this->dd = $dd;
        return $this;
    }


}

