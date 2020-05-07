<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing InlineType
 *
 * "Inline" covers inline or "text-level" elements
 * XSD Type: Inline
 */
class InlineType
{

    /**
     * @var \TKusy\FhirXhtml\A $a
     */
    private $a = null;

    /**
     * @var \TKusy\FhirXhtml\Br $br
     */
    private $br = null;

    /**
     * @var \TKusy\FhirXhtml\Span $span
     */
    private $span = null;

    /**
     * @var \TKusy\FhirXhtml\Bdo $bdo
     */
    private $bdo = null;

    /**
     * @var \TKusy\FhirXhtml\Map $map
     */
    private $map = null;

    /**
     * @var \TKusy\FhirXhtml\Img $img
     */
    private $img = null;

    /**
     * @var \TKusy\FhirXhtml\Tt $tt
     */
    private $tt = null;

    /**
     * @var \TKusy\FhirXhtml\I $i
     */
    private $i = null;

    /**
     * @var \TKusy\FhirXhtml\B $b
     */
    private $b = null;

    /**
     * @var \TKusy\FhirXhtml\Big $big
     */
    private $big = null;

    /**
     * @var \TKusy\FhirXhtml\Small $small
     */
    private $small = null;

    /**
     * @var \TKusy\FhirXhtml\Em $em
     */
    private $em = null;

    /**
     * @var \TKusy\FhirXhtml\Strong $strong
     */
    private $strong = null;

    /**
     * @var \TKusy\FhirXhtml\Dfn $dfn
     */
    private $dfn = null;

    /**
     * @var \TKusy\FhirXhtml\Code $code
     */
    private $code = null;

    /**
     * @var \TKusy\FhirXhtml\Q $q
     */
    private $q = null;

    /**
     * @var \TKusy\FhirXhtml\Samp $samp
     */
    private $samp = null;

    /**
     * @var \TKusy\FhirXhtml\Kbd $kbd
     */
    private $kbd = null;

    /**
     * @var \TKusy\FhirXhtml\VarXsd $var
     */
    private $var = null;

    /**
     * @var \TKusy\FhirXhtml\Cite $cite
     */
    private $cite = null;

    /**
     * @var \TKusy\FhirXhtml\Abbr $abbr
     */
    private $abbr = null;

    /**
     * @var \TKusy\FhirXhtml\Acronym $acronym
     */
    private $acronym = null;

    /**
     * @var \TKusy\FhirXhtml\Sub $sub
     */
    private $sub = null;

    /**
     * @var \TKusy\FhirXhtml\Sup $sup
     */
    private $sup = null;

    /**
     * Gets as a
     *
     * @return \TKusy\FhirXhtml\A
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Sets a new a
     *
     * @param \TKusy\FhirXhtml\A $a
     * @return self
     */
    public function setA(\TKusy\FhirXhtml\A $a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * Gets as br
     *
     * @return \TKusy\FhirXhtml\Br
     */
    public function getBr()
    {
        return $this->br;
    }

    /**
     * Sets a new br
     *
     * @param \TKusy\FhirXhtml\Br $br
     * @return self
     */
    public function setBr(\TKusy\FhirXhtml\Br $br)
    {
        $this->br = $br;
        return $this;
    }

    /**
     * Gets as span
     *
     * @return \TKusy\FhirXhtml\Span
     */
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * Sets a new span
     *
     * @param \TKusy\FhirXhtml\Span $span
     * @return self
     */
    public function setSpan(\TKusy\FhirXhtml\Span $span)
    {
        $this->span = $span;
        return $this;
    }

    /**
     * Gets as bdo
     *
     * @return \TKusy\FhirXhtml\Bdo
     */
    public function getBdo()
    {
        return $this->bdo;
    }

    /**
     * Sets a new bdo
     *
     * @param \TKusy\FhirXhtml\Bdo $bdo
     * @return self
     */
    public function setBdo(\TKusy\FhirXhtml\Bdo $bdo)
    {
        $this->bdo = $bdo;
        return $this;
    }

    /**
     * Gets as map
     *
     * @return \TKusy\FhirXhtml\Map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Sets a new map
     *
     * @param \TKusy\FhirXhtml\Map $map
     * @return self
     */
    public function setMap(\TKusy\FhirXhtml\Map $map)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * Gets as img
     *
     * @return \TKusy\FhirXhtml\Img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Sets a new img
     *
     * @param \TKusy\FhirXhtml\Img $img
     * @return self
     */
    public function setImg(\TKusy\FhirXhtml\Img $img)
    {
        $this->img = $img;
        return $this;
    }

    /**
     * Gets as tt
     *
     * @return \TKusy\FhirXhtml\Tt
     */
    public function getTt()
    {
        return $this->tt;
    }

    /**
     * Sets a new tt
     *
     * @param \TKusy\FhirXhtml\Tt $tt
     * @return self
     */
    public function setTt(\TKusy\FhirXhtml\Tt $tt)
    {
        $this->tt = $tt;
        return $this;
    }

    /**
     * Gets as i
     *
     * @return \TKusy\FhirXhtml\I
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Sets a new i
     *
     * @param \TKusy\FhirXhtml\I $i
     * @return self
     */
    public function setI(\TKusy\FhirXhtml\I $i)
    {
        $this->i = $i;
        return $this;
    }

    /**
     * Gets as b
     *
     * @return \TKusy\FhirXhtml\B
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Sets a new b
     *
     * @param \TKusy\FhirXhtml\B $b
     * @return self
     */
    public function setB(\TKusy\FhirXhtml\B $b)
    {
        $this->b = $b;
        return $this;
    }

    /**
     * Gets as big
     *
     * @return \TKusy\FhirXhtml\Big
     */
    public function getBig()
    {
        return $this->big;
    }

    /**
     * Sets a new big
     *
     * @param \TKusy\FhirXhtml\Big $big
     * @return self
     */
    public function setBig(\TKusy\FhirXhtml\Big $big)
    {
        $this->big = $big;
        return $this;
    }

    /**
     * Gets as small
     *
     * @return \TKusy\FhirXhtml\Small
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * Sets a new small
     *
     * @param \TKusy\FhirXhtml\Small $small
     * @return self
     */
    public function setSmall(\TKusy\FhirXhtml\Small $small)
    {
        $this->small = $small;
        return $this;
    }

    /**
     * Gets as em
     *
     * @return \TKusy\FhirXhtml\Em
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * Sets a new em
     *
     * @param \TKusy\FhirXhtml\Em $em
     * @return self
     */
    public function setEm(\TKusy\FhirXhtml\Em $em)
    {
        $this->em = $em;
        return $this;
    }

    /**
     * Gets as strong
     *
     * @return \TKusy\FhirXhtml\Strong
     */
    public function getStrong()
    {
        return $this->strong;
    }

    /**
     * Sets a new strong
     *
     * @param \TKusy\FhirXhtml\Strong $strong
     * @return self
     */
    public function setStrong(\TKusy\FhirXhtml\Strong $strong)
    {
        $this->strong = $strong;
        return $this;
    }

    /**
     * Gets as dfn
     *
     * @return \TKusy\FhirXhtml\Dfn
     */
    public function getDfn()
    {
        return $this->dfn;
    }

    /**
     * Sets a new dfn
     *
     * @param \TKusy\FhirXhtml\Dfn $dfn
     * @return self
     */
    public function setDfn(\TKusy\FhirXhtml\Dfn $dfn)
    {
        $this->dfn = $dfn;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return \TKusy\FhirXhtml\Code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param \TKusy\FhirXhtml\Code $code
     * @return self
     */
    public function setCode(\TKusy\FhirXhtml\Code $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as q
     *
     * @return \TKusy\FhirXhtml\Q
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Sets a new q
     *
     * @param \TKusy\FhirXhtml\Q $q
     * @return self
     */
    public function setQ(\TKusy\FhirXhtml\Q $q)
    {
        $this->q = $q;
        return $this;
    }

    /**
     * Gets as samp
     *
     * @return \TKusy\FhirXhtml\Samp
     */
    public function getSamp()
    {
        return $this->samp;
    }

    /**
     * Sets a new samp
     *
     * @param \TKusy\FhirXhtml\Samp $samp
     * @return self
     */
    public function setSamp(\TKusy\FhirXhtml\Samp $samp)
    {
        $this->samp = $samp;
        return $this;
    }

    /**
     * Gets as kbd
     *
     * @return \TKusy\FhirXhtml\Kbd
     */
    public function getKbd()
    {
        return $this->kbd;
    }

    /**
     * Sets a new kbd
     *
     * @param \TKusy\FhirXhtml\Kbd $kbd
     * @return self
     */
    public function setKbd(\TKusy\FhirXhtml\Kbd $kbd)
    {
        $this->kbd = $kbd;
        return $this;
    }

    /**
     * Gets as var
     *
     * @return \TKusy\FhirXhtml\VarXsd
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * Sets a new var
     *
     * @param \TKusy\FhirXhtml\VarXsd $var
     * @return self
     */
    public function setVar(\TKusy\FhirXhtml\VarXsd $var)
    {
        $this->var = $var;
        return $this;
    }

    /**
     * Gets as cite
     *
     * @return \TKusy\FhirXhtml\Cite
     */
    public function getCite()
    {
        return $this->cite;
    }

    /**
     * Sets a new cite
     *
     * @param \TKusy\FhirXhtml\Cite $cite
     * @return self
     */
    public function setCite(\TKusy\FhirXhtml\Cite $cite)
    {
        $this->cite = $cite;
        return $this;
    }

    /**
     * Gets as abbr
     *
     * @return \TKusy\FhirXhtml\Abbr
     */
    public function getAbbr()
    {
        return $this->abbr;
    }

    /**
     * Sets a new abbr
     *
     * @param \TKusy\FhirXhtml\Abbr $abbr
     * @return self
     */
    public function setAbbr(\TKusy\FhirXhtml\Abbr $abbr)
    {
        $this->abbr = $abbr;
        return $this;
    }

    /**
     * Gets as acronym
     *
     * @return \TKusy\FhirXhtml\Acronym
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Sets a new acronym
     *
     * @param \TKusy\FhirXhtml\Acronym $acronym
     * @return self
     */
    public function setAcronym(\TKusy\FhirXhtml\Acronym $acronym)
    {
        $this->acronym = $acronym;
        return $this;
    }

    /**
     * Gets as sub
     *
     * @return \TKusy\FhirXhtml\Sub
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Sets a new sub
     *
     * @param \TKusy\FhirXhtml\Sub $sub
     * @return self
     */
    public function setSub(\TKusy\FhirXhtml\Sub $sub)
    {
        $this->sub = $sub;
        return $this;
    }

    /**
     * Gets as sup
     *
     * @return \TKusy\FhirXhtml\Sup
     */
    public function getSup()
    {
        return $this->sup;
    }

    /**
     * Sets a new sup
     *
     * @param \TKusy\FhirXhtml\Sup $sup
     * @return self
     */
    public function setSup(\TKusy\FhirXhtml\Sup $sup)
    {
        $this->sup = $sup;
        return $this;
    }


}

