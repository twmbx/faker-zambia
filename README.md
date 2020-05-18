# Faker Zambia :zambia:

A PHP provider for [fzaninotto/Faker](https://github.com/fzaninotto/Faker) that adds the ability to generate fake data for the Zambian context.
This package enables the developer to generate Zambian Names, Companies and Phone Numbers.

## Requirements
- PHP 7.2.5
- [fzaninotto/Faker](https://github.com/fzaninotto/Faker)

## Installation
``` bash
    composer require twmbx/faker-zambia
```

## Usage
``` php
    require_once './vendor/autoload.php';

    use Faker\Factory as Faker;
    use FakerZambia\Provider\en_ZM\Person as Zambian;
    use FakerZambia\Provider\en_ZM\Company as ZambianCompany;
    use FakerZambia\Provider\en_ZM\PhoneNumber as ZambianPhone;

    $faker = Faker::create('en_ZM');
    $faker->addProvider(new Zambian($faker));
    $faker->addProvider(new ZambianCompany($faker));
    $faker->addProvider(new ZambianPhone($faker));

    // fake people
    echo $faker->name;            // Peter Malambo
    echo $faker->firstName        // Chanda
    echo $faker->firstNameMale    // Moses
    echo $faker->firstNameFemale; // Patricia
    echo $faker->lastName;        // Kalunga

    // fake companies
    echo $faker->company;         // Siamutwa Imports Ltd

    // fakes phone numbers
    echo $faker->phoneNumber;     // 0212224773 | +260212224773
    echo $faker->mobileNumber;    // 0763028036 | +260763028036
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

Made with :heart: in :zambia:
