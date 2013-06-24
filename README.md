# CodeIgniter-StringHelper
========================

String Helper for CodeIgniter that allow you to quickly format your string.

## string_lower, string_upper, string_title

```php
$string = string_upper('string');
// return 'STRING'.
```

## string_limit

```php
$string = string_limit('a brown dog jumped over a lazy fox', 10);
//return "a brown do..."
$string = string_limit('a brown dog jumped over a lazy fox', 10, '...more');
//return "a brown do...more"
```

## string_plural

```php
$string = string_plural('user', 1);
//return 'user'.
$string = string_plural('user', 10);
//return 'users'.
$string = string_plural('query', 2);
//return 'queries'.
```

## string_format

```php
$string = string_format('query in a box');
//return 'query_in_a_box'.
$string = string_format('query in a box', '-')
//return 'query-in-a-box'.
```

## reverse_date 
- Reformat MySQL datetime YYYY-MM-DD into DD-MM-YYYY. 

```php
$string = reverse_date('2010-10-12 11:12:19');
//return '12-10-2010'.
```