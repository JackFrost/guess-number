# Игра "Угадай число"

Игра длится один раунд.
Попробуйте угать, что загадает Рандом.


## Требования

- PHP 8.2 и выше

## Установка

```bash
$ composer require jack-frost/guess-number
```

## Использование

```php
<?php

require 'vendor/autoload.php';

use \JackFrost\GuessNumber\GuessNumber;

$game = new GuessNumber();
echo $game->check(7); // Yes! or No..
```