PHP-i18n
===

Collection (currently, ahem... one) of functions that are useful for
localization. It&#039;s purpose is to make the output of multilingual strings a
more organized and streamlined process.

### Sample Language Definition

``` php
<?php

    // default language designation
    $lang = 'en';

    // if a request is being made for a french uri
    if (preg_match('/^\/fr\//', $_SERVER['REQUEST_URI'])) {
        $lang = 'fr';
    }

    // set constant
    define('LANG', $lang);

```

### Sample Output

``` php
<?php

    echo __('English String', 'French String');

```
