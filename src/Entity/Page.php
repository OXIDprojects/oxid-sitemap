<?php

namespace IvobaOxid\OxidSiteMap\Entity;

class Page
{
    private $url;
    private $priority;
    private $lastmod;
    private $changefreq;

    /**
     * Page constructor.
     * @param string $url
     * @param string $priority
     * @param string $lastmod
     * @param string $changefreq
     */
    public function __construct(string $url, string $priority, string $lastmod, string $changefreq)
    {
        $this->url        = $url;
        $this->priority   = $priority;
        $this->lastmod    = $lastmod;
        $this->changefreq = $changefreq;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function getLastmod(): string
    {
        return $this->lastmod;
    }

    public function getChangefreq(): string
    {
        return $this->changefreq;
    }
}
