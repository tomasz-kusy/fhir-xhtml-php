<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing A
 *
 * content is "Inline" except that anchors shouldn't be nested
 */
class A extends AContentType
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
     * @var string $charset
     */
    private $charset = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $href
     */
    private $href = null;

    /**
     * @var string $hreflang
     */
    private $hreflang = null;

    /**
     * @var string[] $rel
     */
    private $rel = null;

    /**
     * @var string[] $rev
     */
    private $rev = null;

    /**
     * @var string $shape
     */
    private $shape = null;

    /**
     * @var string $coords
     */
    private $coords = null;

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
     * Gets as charset
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Sets a new charset
     *
     * @param string $charset
     * @return self
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * Gets as hreflang
     *
     * @return string
     */
    public function getHreflang()
    {
        return $this->hreflang;
    }

    /**
     * Sets a new hreflang
     *
     * @param string $hreflang
     * @return self
     */
    public function setHreflang($hreflang)
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    /**
     * Adds as rel
     *
     * @return self
     * @param string $rel
     */
    public function addToRel($rel)
    {
        $this->rel[] = $rel;
        return $this;
    }

    /**
     * isset rel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRel($index)
    {
        return isset($this->rel[$index]);
    }

    /**
     * unset rel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRel($index)
    {
        unset($this->rel[$index]);
    }

    /**
     * Gets as rel
     *
     * @return string[]
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * Sets a new rel
     *
     * @param string[] $rel
     * @return self
     */
    public function setRel(array $rel)
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * Adds as rev
     *
     * @return self
     * @param string $rev
     */
    public function addToRev($rev)
    {
        $this->rev[] = $rev;
        return $this;
    }

    /**
     * isset rev
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRev($index)
    {
        return isset($this->rev[$index]);
    }

    /**
     * unset rev
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRev($index)
    {
        unset($this->rev[$index]);
    }

    /**
     * Gets as rev
     *
     * @return string[]
     */
    public function getRev()
    {
        return $this->rev;
    }

    /**
     * Sets a new rev
     *
     * @param string[] $rev
     * @return self
     */
    public function setRev(array $rev)
    {
        $this->rev = $rev;
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


}

