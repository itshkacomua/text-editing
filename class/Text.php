<?php
declare(ticks=1);

namespace Text;

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

    /**
     * Text clipping method
     * @param $date_begin
     * @param $date_end
     */
    function СlippingЕext($text, $strlen, $params = ['clipping' => 'y', 'three_dots' => 'y'])
    {
        //$text=strip_tags($text);
        //$text=htmlspecialchars($text);
        $text_strlen = mb_strlen($text);
        $arr_test_elements = ['b', 'span', 'p', 'i', 'div'];

        if ($params['clipping'] == 'y' && $text_strlen > $strlen) {
            $pos = mb_strpos($text, ' ', $strlen);

            if ($pos > 0)
                $return = mb_substr($text, 0, $pos);
            else
                $return = $text;
            //$return = mb_substr($text, 0, strrpos(substr(htmlspecialchars($text),0, $strlen), ' '));
        } else
            $return = $text;

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
    function GetSeveralHTMLElements($element, $number = 1)
    {
        $result = '';
        for ($i = 0; $i < $number; $i++)
            $result .= '</' . $element . '>';

        return $result;
    }
}
