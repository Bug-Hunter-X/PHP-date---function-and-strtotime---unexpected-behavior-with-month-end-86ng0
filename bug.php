```php
$date = '2024-03-10';
$newDate = date('Y-m-d', strtotime('+1 day', strtotime($date)));
//The above code is wrong if the date is '2024-03-31' and expects 2024-04-01.
//It will return 2024-04-00. This can also happen for months with 30 days
```