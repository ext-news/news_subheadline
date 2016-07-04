<?php

namespace GeorgRinger\NewsSubheadline\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * @var string
     */
    protected $txNewsSubheadline;

    /**
     * @return string
     */
    public function getTxNewsSubheadline()
    {
        return $this->txNewsSubheadline;
    }

    /**
     * @return string
     */
    public function getSubheadline()
    {
        return $this->txNewsSubheadline;
    }

    /**
     * @param string $txNewsSubheadline
     */
    public function setTxNewsSubheadline($txNewsSubheadline)
    {
        $this->txNewsSubheadline = $txNewsSubheadline;
    }

}