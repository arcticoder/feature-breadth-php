# feature-breadth-php
Improve your language/framework feature breadth by release version: PHP

Familiarity and mastery of the latest features from a framework or language in an efficient manner is a challenge. I like the idea of having simple exercises organized by release version that incorporate minimal reliance on other language or framework features. This not only keeps the learning process itself streamlined but also allows a newcomer to that language/framework to get up to speed quickly with whatever project they're responsible for, by drilling down to the features they'll need most.

# Example
https://secure.php.net/manual/en/migration71.new-features.php

_PHP 7.1 - Symmetric array destructuring_

If I want to practice and familiarize myself with the new features of PHP 7.1, but also , I would traverse feature-breadth-php hierarchy to the 7.1 directory, and then find the feature I wanted from within that folder. In this example it's symmetric-array-destructuring. Then I look at the README for that folder and example problem:

_feature-breadth-php/7.1/symmetric-array-destructuring/README:_

"The shorthand array syntax ([]) may now be used to destructure arrays for assignments (including within foreach), as an alternative to the existing list() syntax, which is still supported."

_feature-breadth-php/7.1/symmetric-array-destructuring/example-cli.php:_

```
<?php
$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

// Convert the following array iteration from list() style to [] style:
foreach ($data as list($id, $name)) {
    echo "index $id is $name\n";    
}
```

_feature-breadth-php/7.1/symmetric-array-destructuring/solution/solution-cli.php:_

```
<?php
$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

foreach ($data as [$id, $name]) {
    echo "index $id is $name\n";    
}
