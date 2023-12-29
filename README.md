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

```php
1.  Include 

    <x-livewire-bootstrap-toaster::toast/> 

    or 

    @include("livewire-bootstrap-toaster::components.toast") 

    in your layout view

2.  Call $this->notify("message", "title", "type")
    - both message and title are user-defined and optional
    - supported types: success, error, info, warning 
```

## Security Vulnerabilities

If you discover any security related issues, please reach out to me directly at [53029902b@gmail.com](mailto:53029902b@gmail.com)

## Credits

- [John Charlton](https://github.com/jecharlt)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
