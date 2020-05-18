<?php

namespace FakerZambia\Provider\en_ZM;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+260{{areaCode}}######',
        '0{{areaCode}}######',
    );

    protected static $cellphoneFormats = array(
        '+260{{cellphoneCode}}#######',
        '260{{cellphoneCode}}#######',
        '0{{cellphoneCode}}#######',
    );

    protected static $specialFormats = [];

    protected static $tollFreeAreaCodes = [];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Zambia
     */
    public static function areaCode()
    {
        $digits[] = 21;
        $digits[] = self::numberBetween(1, 9);

        return implode('', $digits);
    }

    public static function cellphoneCode()
    {
        $codes = [95, 96, 97, 76, 77];
        return self::randomElement($codes);
    }

    public function mobileNumber()
    {
        $format = static::randomElement(self::$cellphoneFormats);

        return self::numerify($this->generator->parse($format));
    }
}
