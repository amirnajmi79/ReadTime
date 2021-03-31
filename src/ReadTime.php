<?php

namespace AmirNajmi\ReadTime;


class ReadTime
{
    public $content;
    /*
     * Remove tag in content
     */
    public function __construct($content)
    {
        $this->content = strip_tags($content);

    }
    /*
     * Separate words
     */
    private function splitWords(): array
    {
        return preg_split("/[\s,]+/", "$this->content");
    }
    /*
     * Calculate the number of words
     */
    private function calculateWords(): int
    {
        return count($this->splitWords());
    }
    /*
     * Calculate minutes
     * 200 words per minute
     */
    public function calculateMinutes(): int
    {
        if ($this->calculateWords()/200 < 1)
            return 1;
        return ($this->calculateWords()/200);
    }
}
