<?php

namespace TKusy\FhirXhtml;

/**
 * Class representing FlowType
 *
 * "Flow" mixes block and inline and is used for list items etc.
 * XSD Type: Flow
 */
class FlowType
{

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

