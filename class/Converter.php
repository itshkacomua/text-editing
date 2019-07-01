<?php
declare(ticks=1);

namespace Text;

/**
 * Converter.
 *
 * @package text-editing
 * @author Andrey Kravchenko <progandrey@gmail.com>
 * @version 1.0
 */
class Converter
{
    public const ERRJR_TEXT = 'there is no such number ';

    /**
     * Array Roman numbers to Arabic.
     */
    public $romanNumbersInArabic = array(
        'I' => '1',
        'II' => '2',
        'III' => '3',
        'IV' => '4',
        'V' => '5',
        'VI' => '6',
        'VII' => '7',
        'VIII' => '8',
        'IX' => '9',
        'X' => '10',
        'XX' => '20',
        'XXX' => '30',
        'XL' => '40',
        'L' => '50',
        'LX' => '60',
        'LXX' => '70',
        'LXXX' => '80',
        'XC' => '90',
        'C' => '100',
    );

    /**
     * Array Arabic numbers to Roman.
     */
    public $arabicNumbersInRoman = array(
        '1' => 'I',
        '2' => 'II',
        '3' => 'III',
        '4' => 'IV',
        '5' => 'V',
        '6' => 'VI',
        '7' => 'VII',
        '8' => 'VIII',
        '9' => 'IX',
        '10' => 'X',
        '20' => 'XX',
        '30' => 'XXX',
        '40' => 'XL',
        '50' => 'L',
        '60' => 'LX',
        '70' => 'LXX',
        '80' => 'LXXX',
        '90' => 'XC',
        '100' => 'C',
    );

    /**
     * Converter Roman numbers to Arabic.
     */
    public function RomanNumbersInArabic(string $numbers)
    {
        return romanNumbersInArabic[$numbers] ?? ERRJR_TEXT . 'arabic';
    }

    /**
     * Converter Roman numbers to Arabic.
     */
    public function ArabicNumbersInRoman(string $numbers)
    {
        return arabicNumbersInRoman[$numbers] ?? ERRJR_TEXT . 'roman';
    }
}
