Kohana SwiftMailer Module
==========================

A simple SwiftMailer wrapper module for Kohana

### How to use it?

In order to initiate SwiftMailer in your application you have 2 options:

- Autoload it when during your app's boot-time by adding `SwiftMailer.php` to
your config foler with following option:

```php
return array
(
    // Auto-load module?
    'autoload'  => TRUE,
);
```

- Load it dynamically whenever you need it by running the Helper code:

```php
SwiftMailer::init();
```

### Notes

This module has been tested against Kohana 3.3.0.
