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
    public function splitWords(): array
    {
        return preg_split("/[\s,]+/", "$this->content");
    }
    /*
     * Calculate the number of words
     */
    public function calculateWords(): int
    {
        return count(ReadTime::splitWords());
    }
    /*
     * Calculate minutes
     * 200 words per minute
     */
    public function calculateMinutes(): int
    {
        if (ReadTime::calculateWords()/200 < 1)
            return 1;
        return (ReadTime::calculateWords()/200);
    }
}
