<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing Map
 */
class Map
{

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var string $dir
     */
    private $dir = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var mixed $class
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
     * @var string $name
     */
    private $name = null;

    /**
     * @var \TKusy\FhirXhtml\P $p
     */
    private $p = null;

    /**
     * @var \TKusy\FhirXhtml\H1 $h1
     */
    private $h1 = null;

    /**
     * @var \TKusy\FhirXhtml\H2 $h2
     */
    private $h2 = null;

    /**
     * @var \TKusy\FhirXhtml\H3 $h3
     */
    private $h3 = null;

    /**
     * @var \TKusy\FhirXhtml\H4 $h4
     */
    private $h4 = null;

    /**
     * @var \TKusy\FhirXhtml\H5 $h5
     */
    private $h5 = null;

    /**
     * @var \TKusy\FhirXhtml\H6 $h6
     */
    private $h6 = null;

    /**
     * @var \TKusy\FhirXhtml\Div $div
     */
    private $div = null;

    /**
     * @var \TKusy\FhirXhtml\Ul $ul
     */
    private $ul = null;

    /**
     * @var \TKusy\FhirXhtml\Ol $ol
     */
    private $ol = null;

    /**
     * @var \TKusy\FhirXhtml\Dl $dl
     */
    private $dl = null;

    /**
     * @var \TKusy\FhirXhtml\Pre $pre
     */
    private $pre = null;

    /**
     * @var \TKusy\FhirXhtml\Hr $hr
     */
    private $hr = null;

    /**
     * @var \TKusy\FhirXhtml\Blockquote $blockquote
     */
    private $blockquote = null;

    /**
     * @var \TKusy\FhirXhtml\Address $address
     */
    private $address = null;

    /**
     * @var \TKusy\FhirXhtml\Table $table
     */
    private $table = null;

    /**
     * @var \TKusy\FhirXhtml\Area[] $area
     */
    private $area = [
        
    ];

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
     * Gets as class
     *
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * @param mixed $class
     * @return self
     */
    public function setClass($class)
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as p
     *
     * @return \TKusy\FhirXhtml\P
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Sets a new p
     *
     * @param \TKusy\FhirXhtml\P $p
     * @return self
     */
    public function setP(\TKusy\FhirXhtml\P $p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * Gets as h1
     *
     * @return \TKusy\FhirXhtml\H1
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * Sets a new h1
     *
     * @param \TKusy\FhirXhtml\H1 $h1
     * @return self
     */
    public function setH1(\TKusy\FhirXhtml\H1 $h1)
    {
        $this->h1 = $h1;
        return $this;
    }

    /**
     * Gets as h2
     *
     * @return \TKusy\FhirXhtml\H2
     */
    public function getH2()
    {
        return $this->h2;
    }

    /**
     * Sets a new h2
     *
     * @param \TKusy\FhirXhtml\H2 $h2
     * @return self
     */
    public function setH2(\TKusy\FhirXhtml\H2 $h2)
    {
        $this->h2 = $h2;
        return $this;
    }

    /**
     * Gets as h3
     *
     * @return \TKusy\FhirXhtml\H3
     */
    public function getH3()
    {
        return $this->h3;
    }

    /**
     * Sets a new h3
     *
     * @param \TKusy\FhirXhtml\H3 $h3
     * @return self
     */
    public function setH3(\TKusy\FhirXhtml\H3 $h3)
    {
        $this->h3 = $h3;
        return $this;
    }

    /**
     * Gets as h4
     *
     * @return \TKusy\FhirXhtml\H4
     */
    public function getH4()
    {
        return $this->h4;
    }

    /**
     * Sets a new h4
     *
     * @param \TKusy\FhirXhtml\H4 $h4
     * @return self
     */
    public function setH4(\TKusy\FhirXhtml\H4 $h4)
    {
        $this->h4 = $h4;
        return $this;
    }

    /**
     * Gets as h5
     *
     * @return \TKusy\FhirXhtml\H5
     */
    public function getH5()
    {
        return $this->h5;
    }

    /**
     * Sets a new h5
     *
     * @param \TKusy\FhirXhtml\H5 $h5
     * @return self
     */
    public function setH5(\TKusy\FhirXhtml\H5 $h5)
    {
        $this->h5 = $h5;
        return $this;
    }

    /**
     * Gets as h6
     *
     * @return \TKusy\FhirXhtml\H6
     */
    public function getH6()
    {
        return $this->h6;
    }

    /**
     * Sets a new h6
     *
     * @param \TKusy\FhirXhtml\H6 $h6
     * @return self
     */
    public function setH6(\TKusy\FhirXhtml\H6 $h6)
    {
        $this->h6 = $h6;
        return $this;
    }

    /**
     * Gets as div
     *
     * @return \TKusy\FhirXhtml\Div
     */
    public function getDiv()
    {
        return $this->div;
    }

    /**
     * Sets a new div
     *
     * @param \TKusy\FhirXhtml\Div $div
     * @return self
     */
    public function setDiv(\TKusy\FhirXhtml\Div $div)
    {
        $this->div = $div;
        return $this;
    }

    /**
     * Gets as ul
     *
     * @return \TKusy\FhirXhtml\Ul
     */
    public function getUl()
    {
        return $this->ul;
    }

    /**
     * Sets a new ul
     *
     * @param \TKusy\FhirXhtml\Ul $ul
     * @return self
     */
    public function setUl(\TKusy\FhirXhtml\Ul $ul)
    {
        $this->ul = $ul;
        return $this;
    }

    /**
     * Gets as ol
     *
     * @return \TKusy\FhirXhtml\Ol
     */
    public function getOl()
    {
        return $this->ol;
    }

    /**
     * Sets a new ol
     *
     * @param \TKusy\FhirXhtml\Ol $ol
     * @return self
     */
    public function setOl(\TKusy\FhirXhtml\Ol $ol)
    {
        $this->ol = $ol;
        return $this;
    }

    /**
     * Gets as dl
     *
     * @return \TKusy\FhirXhtml\Dl
     */
    public function getDl()
    {
        return $this->dl;
    }

    /**
     * Sets a new dl
     *
     * @param \TKusy\FhirXhtml\Dl $dl
     * @return self
     */
    public function setDl(\TKusy\FhirXhtml\Dl $dl)
    {
        $this->dl = $dl;
        return $this;
    }

    /**
     * Gets as pre
     *
     * @return \TKusy\FhirXhtml\Pre
     */
    public function getPre()
    {
        return $this->pre;
    }

    /**
     * Sets a new pre
     *
     * @param \TKusy\FhirXhtml\Pre $pre
     * @return self
     */
    public function setPre(\TKusy\FhirXhtml\Pre $pre)
    {
        $this->pre = $pre;
        return $this;
    }

    /**
     * Gets as hr
     *
     * @return \TKusy\FhirXhtml\Hr
     */
    public function getHr()
    {
        return $this->hr;
    }

    /**
     * Sets a new hr
     *
     * @param \TKusy\FhirXhtml\Hr $hr
     * @return self
     */
    public function setHr(\TKusy\FhirXhtml\Hr $hr)
    {
        $this->hr = $hr;
        return $this;
    }

    /**
     * Gets as blockquote
     *
     * @return \TKusy\FhirXhtml\Blockquote
     */
    public function getBlockquote()
    {
        return $this->blockquote;
    }

    /**
     * Sets a new blockquote
     *
     * @param \TKusy\FhirXhtml\Blockquote $blockquote
     * @return self
     */
    public function setBlockquote(\TKusy\FhirXhtml\Blockquote $blockquote)
    {
        $this->blockquote = $blockquote;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \TKusy\FhirXhtml\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \TKusy\FhirXhtml\Address $address
     * @return self
     */
    public function setAddress(\TKusy\FhirXhtml\Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as table
     *
     * @return \TKusy\FhirXhtml\Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Sets a new table
     *
     * @param \TKusy\FhirXhtml\Table $table
     * @return self
     */
    public function setTable(\TKusy\FhirXhtml\Table $table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * Adds as area
     *
     * @return self
     * @param \TKusy\FhirXhtml\Area $area
     */
    public function addToArea(\TKusy\FhirXhtml\Area $area)
    {
        $this->area[] = $area;
        return $this;
    }

    /**
     * isset area
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArea($index)
    {
        return isset($this->area[$index]);
    }

    /**
     * unset area
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArea($index)
    {
        unset($this->area[$index]);
    }

    /**
     * Gets as area
     *
     * @return \TKusy\FhirXhtml\Area[]
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * @param \TKusy\FhirXhtml\Area[] $area
     * @return self
     */
    public function setArea(array $area)
    {
        $this->area = $area;
        return $this;
    }


}

