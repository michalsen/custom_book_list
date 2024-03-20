# custom_book_list

Demo of custom route and query of content.

phpstan results

```
 ------ -----------------------------------------------------------------------------------
 Line   custom_book_list/src/Controller/CustomBookListController.php
 ------ -----------------------------------------------------------------------------------
  39     Unsafe usage of new static().
         💡 See: https://phpstan.org/blog/solving-phpstan-error-unsafe-usage-of-new-static
  53     \Drupal calls should be avoided in classes, use dependency injection instead
  80     \Drupal calls should be avoided in classes, use dependency injection instead
  91     Variable $image_url might not be defined.
```