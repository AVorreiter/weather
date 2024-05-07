<?php

namespace avorreiter\weather;

class Day
{
    private string $tag = '';
    private string $weather = '';

    public function getWeather(): string
    {
        return $this->weather;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function __construct($tag, $weather)
    {
        $this->tag = $tag;
        $this->weather = $weather;
    }

}