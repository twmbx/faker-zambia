<?php

namespace FakerZambia\Provider\en_ZM;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Aaron', 'Andrew', 'Daniel', 'Dexter', 'Dominic', 'Donald', 'Edwin', 'Elijah', 'Henry', 'Isaac', 'Jackson', 'James', 'Jeremy', 'Joe', 'John',
        'Kabwe', 'Kalonje', 'Kelvin', 'Kingsley', 'Michael', 'Peter', 'Richard', 'Sam', 'Samson', 'Samuel', 'Sylvester', 'Wilfred',  'Moses',
        'Nicholas', 'Nick', 'Patrick', 'Paul', 'Peter', 'Philip', 'Phillip', 'Raymond', 'Richard', 'Robert', 'Ronald', 'Sam', 'Samuel',
        'Sean', 'Shane', 'Shaun', 'Shawn', 'Simon',  'Stanley', 'Stephen', 'Steve', 'Steven', 'Terence', 'Theo', 'Thomas', 'Timothy', 'Trevor',
        'Victor', 'Vincent', 'Wayne', 'Wesley', 'William', 'Vishal', 'Alinuswe', 'Alfonso', 'Andrew', 'Blessing', 'Brian', 'Cephas', 'Francis',
        'Israel', 'Japhet', 'Jessen', 'Liswaniso', 'Moonga', 'Musonda', 'Robby', 'Ryan', 'Stephen', 'Tundwa',

        // below are unknown gender firstnames
        'Bupe', 'Bwalya', 'Chanda', 'Chansa', 'Chilufya', 'Chisanga', 'Chungu', 'Mulenga', 'Mwelwa', 'Nchimunya', 'Temwani', 'Twaambo',
    );

    protected static $firstNameFemale = array(
        'Agnes', 'Asha', 'Bridget', 'Chipo', 'Edith', 'Elizabeth', 'Gloria', 'Helen', 'Jackie', 'Jessy', 'Judy',
        'Kate', 'Lillian', 'Linda', 'Lombe', 'Margeret', 'Mary', 'Mildred', 'Miyanda', 'Monica', 'Mutinta', 'Natasha', 'Nsofwa',
        'Patricia', 'Promise', 'Tamara', 'Thandiwe', 'Kamota',

        // below are unknown gender firstnames
        'Bupe', 'Bwalya', 'Chanda', 'Chansa', 'Chilufya', 'Chisanga', 'Chungu', 'Mulenga', 'Mwelwa', 'Nchimunya', 'Temwani', 'Twaambo',
    );

    protected static $lastName = array(
        'Banda', 'Bwalya', 'Chanda', 'Chisenga', 'Chitambo', 'Chungu', 'Daka', 'Govendar', 'Kabamba', 'Kabula', 'Kabwe', 'Kafwimbi',
        'Kalunga', 'Kamanga', 'Kamuya', 'Katebe', 'Kateule', 'Kazembe', 'Kopapo', 'Kunda', 'Lombola', 'Lubasi', 'Lunga', 'Malambo',
        'Mangani', 'Masumba', 'Matipa', 'Mbawo', 'Mhone', 'Mofya', 'Mukanyiso', 'Mulanda', 'Mulila', 'Mulilo', 'Mumba', 'Mumbi',
        'Musakabantu', 'Musonda', 'Musuka', 'Mutambo', 'Mwamba', 'Mwansa', 'Mwape', 'Mwenya', 'Ngosa', 'Nkhoma', 'Patel', 'Phiri',
        'Sibeso', 'Siwelwa', 'Sondashi', 'Suresh', 'Tembo', 'Thakur', 'Vashi', 'Zulu', 'Mwamulima', 'Chama', 'Banda', 'Gondwe',
        'Mwangelwa', 'Simwanza', 'Mbewe', 'Chisanga', 'Sakala', 'Siamutwa', 'Mayondi', 'Mukela', 'Chowe', 'Kabamba', 'Sunga',
        'Kasakula', 'Kambone', 'Siyubo',
    );
}
