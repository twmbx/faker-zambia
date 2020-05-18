<?php

namespace FakerZambia\Provider\en_ZM;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{industry}} {{companySuffix}}',
        '{{lastName}} {{industry}} {{companySuffix}}',
        '{{epicName}} {{industry}} {{companySuffix}}',
        '{{epicName}} {{industry}} {{companySuffix}}',
        '{{lastName}} {{extraSuffix}} {{companySuffix}}',
        '{{epicName}} {{extraSuffix}} {{companySuffix}}',
        '{{epicName}} {{industry}} {{extraSuffix}} {{companySuffix}}',
    );

    protected static $epicNames = array(
        'Strong', 'Amazing Grace', 'Best', 'Finest', 'God Is Great', 'Super', 'Refined', 'Accomplished', 'Revered',
        'Visionary',
    );

    protected static $industries = array(
        'Industries', 'Media', 'Restaurant', 'Trading', 'Traders', 'Catering', 'Laboratories', 'Accounting', 'Tailoring',
        'Salon', 'Farms', 'Insurance', 'Finance', 'Manufacturing', 'Logistics', 'Services', 'Church', 'Pharmacy',
        'Spares', 'Engineering', 'Surveyers', 'Mining', 'Holdings', 'Tailoring', 'Fashion', 'Metal Works',
        'Schools', 'College', 'University', 'Training College', 'Hotel', 'Lodges', 'Investments', 'Imports', 'Imports & Exports'
    );

    protected static $extraSuffixes = array(
        'International', 'Zambia',
    );

    protected static $companySuffix = array('Ltd', 'Ltd', 'Ltd', 'Ltd', 'Ltd', 'Private Ltd', 'Private Ltd', 'PLC');

    public function epicName()
    {
        $names = static::$epicNames;
        return static::randomElement($names);
    }

    public function extraSuffix()
    {
        $suffixes = static::$extraSuffixes;
        return static::randomElement($suffixes);
    }

    public function industry()
    {
        $industries = static::$industries;
        return static::randomElement($industries);
    }
}
