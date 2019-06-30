<?php
declare(ticks=1);

namespace Text;

class Text
{
    /**
     * @var string
     */
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Set text
     *
     * @param string $text
     */
    public function set(string $text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     * @return string|string
     */
    public function get()
    {
        return $this->text;
    }

    /**
     * Text Clipping
     */
    public function TextClipping(int $number_characters, $ending)
    {
        $num = strlen($this->text);

        if ($number_characters < $num) {
            return substr($this->text, 0, $number_characters) . ($ending ?? ' ...');
        } else {
            return $this->text;
        }
    }
}