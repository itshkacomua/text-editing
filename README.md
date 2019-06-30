text-editing

Advanced text editor, text clipping, conversion, etc.
=======

### Installation via Composer:

```bash
composer require itshkacomua/text-editing
```

### Basic usage example
```php
<?php
require __DIR__.'/../vendor/autoload.php';

use GDText\Box;

$text = new Box($text);
$text->getText($number);
