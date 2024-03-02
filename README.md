# Toast Notifications for Laravel Livewire, AlpineJS, and Bootstrap 5

## Installation

You can install the package via composer:

```bash
composer require jecharlt/livewire-bootstrap-toaster
```

Configurations for the animation and style of the toast notifications can be configured directly within the toast view

You can publish the toast view with:

```bash
php artisan vendor:publish --tag="livewire-bootstrap-toaster-views"
```

## Usage

1. Include the following in your layout view
```php
<x-livewire-bootstrap-toaster::toast/> 
```

2. To trigger a toast notification, use the following command in your Livewire component
    - Note: both the message and title are user-defined and optional and supported types include: success, error, 
      info, warning

```php
$this->toast("message", "title", "type")
```



## Security Vulnerabilities

If you discover any security related issues, please reach out to me directly at [53029902b@gmail.com](mailto:53029902b@gmail.com)

## Credits

- [John Charlton](https://github.com/jecharlt)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
