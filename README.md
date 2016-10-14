# feature-breadth-php
Improve your language/framework feature breadth by release version: PHP

Familiarity and mastery of the latest features from a framework or language in an efficient manner is a challenge. I like the idea of having simple exercises organized by release version that incorporate minimal reliance on other language or framework features. This not only keeps the learning process itself streamlined but also allows a newcomer to that language/framework to get up to speed quickly with whatever project they're responsible for, by drilling down to the features they'll need most.

# Example
https://secure.php.net/manual/en/migration71.new-features.php

_PHP 7.1 - Symmetric array destructuring_

If I want to practice symmetric array destructuring, but also familiarize myself with the new features of PHP 7.1, I would traverse the feature-breadth-php hierarchy and look at the README for that folder and example problem:

_feature-breadth-php/7.1/symmetric-array-destructuring/README:_

"The shorthand array syntax ([]) may now be used to destructure arrays for assignments (including within foreach), as an alternative to the existing list() syntax, which is still supported."

_feature-breadth-php/7.1/symmetric-array-destructuring/example-cli.php:_

```
<?php
// Convert the following array iteration from list() style to [] style:
foreach ($data as list($id, $name)) {
    echo "index $id is $name\n";    
}
```

_feature-breadth-php/7.1/symmetric-array-destructuring/solution/solution-cli.php:_

```
<?php
foreach ($data as [$id, $name]) {
    echo "index $id is $name\n";    
}
