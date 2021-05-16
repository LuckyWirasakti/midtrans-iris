# iris

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/wirasakti/iris.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/wirasakti/iris.svg?style=flat-square)](https://packagist.org/packages/wirasakti/iris)

## Install
`composer require wirasakti/iris`

## Config
```
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Iris Midtrans Payout
    |--------------------------------------------------------------------------
    |
    | This option controls the default payout connection that gets used while
    | using this iris library. This connection is used when another is
    | not explicitly specified when executing a given iris function.
    |
    */

    'url' => env('IRIS_BASE_URL', 'https://app.sandbox.midtrans.com/iris/api/v1/'),
    'auth' => [
        'creator' => [
            'username' => env('IRIS_CREATOR_USERNAME', ''),
            'password' => env('IRIS_CREATOR_PASSWORD', ''),
        ],
        'approver' => [
            'username' => env('IRIS_APPROVER_USERNAME', ''),
            'password' => env('IRIS_APPROVER_PASSWORD', ''),
        ]
    ]
];
```

## Usage
Write a few lines about the usage of this package.
```
<?php

use Illuminate\Support\Facades\Route;
use Wirasakti\Iris\Facades\Bank;
use Wirasakti\Iris\Facades\Beneficiary;
use Wirasakti\Iris\Facades\Payout;
use Wirasakti\Iris\Facades\Transaction;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('tes', function () {
    return Payout::detailPayout('ytfbs8af9ghz40xhab');
    return Payout::rejectPayout([
        'reference_nos' => ['ytfbs8af9ghz40xhab','ne7k76urb0pag5aa2f'],
        'reject_reason' => 'Reason to reject payouts'
    ]);
    return Payout::approvePayout([
        'reference_nos' => ['cjm5qvc3pkz3awttxk', 'sayqgg81gzhny899ch'],
        'otp' => '031378'
    ]);
    return Payout::createPayout([
        'payouts' => [
            0 => [
                'beneficiary_name' => 'Jon Snow',
                'beneficiary_account' => '1172993826',
                'beneficiary_bank' => 'bni',
                'beneficiary_email' => 'beneficiary@example.com',
                'amount' => '100000.00',
                'notes' => 'Payout April 17',
            ],
            1 => [
                'beneficiary_name' => 'John Doe',
                'beneficiary_account' => '112673910288',
                'beneficiary_bank' => 'mandiri',
                'amount' => '50000.00',
                'notes' => 'Payout May 17',
            ],
        ],
    ]);
    return Beneficiary::updateBeneficiary('johnbca',[
        "name" => "John BCA",
        "account" => "33452784",
        "bank" => "bca",
        "alias_name" => "johnbca",
        "email" => "beneficiary@example.com"
    ]);
    return Beneficiary::createBeneficiary([
        "name" => "John Doe",
        "account" => "33452784",
        "bank" => "bca",
        "alias_name" => "johnbca",
        "email" => "beneficiary@example.com"
    ]);
    return Beneficiary::list();
    return Bank::setBank('gopay')->setAccount('08123450000')->validateAccount();
    return Bank::listBank();
    return Transaction::setFromDate('2021-05-05')->setToDate('2021-05-15')->history();
});
```

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [lucky wirasakti](https://github.com/wirasakti)
- [All Contributors](https://github.com/wirasakti/iris/contributors)

## Security
If you discover any security-related issues, please email lucky.wirasakti@icloud.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
