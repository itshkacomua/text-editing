<?php
declare(ticks=1);

namespace Text;

/**
 * Text.
 *
 * @package text-editing
 * @author Andrey Kravchenko <progandrey@gmail.com>
 * @version 1.0.2
 */
class Text
{
    /**
     * @var string
     */
    protected $text;

    /**
     * Set text
     *
     * @param string $text
     */
    public function set(string $text): void
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
     * Text clipping
     * @param $strlen
     * @param $params
     */
    public function clipping(int $strlen, $params = ['clipping' => 'y', 'three_dots' => 'y'])
    {
        $text_strlen = mb_strlen($this->text);
        $arr_test_elements = ['b', 'span', 'p', 'i', 'div'];

        if ($params['clipping'] == 'y' && $text_strlen > $strlen) {
            $pos = mb_strpos($this->text, ' ', $strlen);

            if ($pos > 0)
                $return = mb_substr($this->text, 0, $pos);
            else
                $return = $this->text;
        } else
            $return = $this->text;

        if ($params['three_dots'] == 'y' && $text_strlen > $strlen)
            $return .= ' ...';

        /**
         * checks unopened items and closes them as needed.
         */
        foreach ($arr_test_elements AS $value) {
            $element = substr_count($return, '<' . $value . '>') - substr_count($return, '</' . $value . '>');
            if ($element > 0)
                $return .= self::GetSeveralHTMLElements($value, $element);
        }

        return $return;
    }

    /**
     * Method of adding closing elements
     * @param $element
     * @param int $number
     * @return string
     */
    public function GetSeveralHTMLElements($element, $number = 1)
    {
        $result = '';
        for ($i = 0; $i < $number; $i++)
            $result .= '</' . $element . '>';

        return $result;
    }

    /**
     * get Hash
     * @return bool|string
     */
    public function getHash()
    {
        return password_hash($this->text, PASSWORD_ARGON2I);
    }
}
