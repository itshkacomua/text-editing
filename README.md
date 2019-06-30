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
require __DIR__.'/vendor/autoload.php';

use Text\Text;

$obj_text = new Text($text);
$obj_text->TextClipping($number_characters, $ending);
