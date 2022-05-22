# PersianGD
Codeigniter library to solve Persian problem with GD

This library helps you to use Persian characters with GD in codeignietr 4.x

## Installation
***
1. [Download](https://github.com/amirhossein45/PersianGD/archive/refs/heads/main.zip) the source files
2. Copy the folder `Libraries` to `app` folder of your CodeIgniter installation
3. That's it! Start using with the examples below 

## Quick Start 
***
Let's get started :)
First, we will load the PersianGD Library into the system

```php
use App\Libraries\PersianGD;
```

That was easy!

Now let's create object of PersianGD

```php
$gd = new PersianGD();
```

OK, now we can get text ready to use with gd


```php
$str = 'سلام امیر';
$tx = $gd->convert_to_persian($str);
```

You have reached the end of the Quick Start Guide, but please take a look at the Example code section

## Example code

```php
<?php

namespace App\Controllers;

use Config\Services;
use App\Libraries\PersianGD;

class Home extends BaseController
{
    public function index()
    {

        $str = 'سلام امیر';

        $gd = new PersianGD();
        $tx = $gd->convert_to_persian($str);

        $image = Services::image('gd')
        ->withFile(WRITEPATH . 'uploads/image/mypic.jpg')
        ->text($tx, [
            'color'      => '#fff',
            'opacity'    => 0,
            'withShadow' => false,
            'hAlign'     => 'center',
            'vAlign'     => 'bottom',
            'fontPath'   => APPPATH . 'Fonts/BRoya.ttf',
            'fontSize'   => 20
        ])
        ->save(WRITEPATH . 'uploads/image/img.jpg');

        return view('welcome_message');
    }
}

```
