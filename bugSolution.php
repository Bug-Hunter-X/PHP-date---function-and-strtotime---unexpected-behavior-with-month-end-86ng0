```php
$date = new DateTime('2024-03-31');
$date->add(new DateInterval('P1D'));
$newDate = $date->format('Y-m-d');
// The above is correct and handles month rollovers correctly.
//This will print 2024-04-01
echo $newDate;
```