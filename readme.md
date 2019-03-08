## Laravel Mail Testing Issue

1. Clone repository
2. Install PHP Dependencies: `composer install`
3. `php artisan serve` and visit http://localhost:8000/
    - verify that mailable was sent clicking on _FAKE INBOX_ link
4. Run `vendor/bin/phpunit` and test will fail... :(