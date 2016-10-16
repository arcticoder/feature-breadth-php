<?php

// Convert this function to use the iterable pseudo type.
function iterate($iter)
{
    if ($iter instanceof Traversable || is_array($iter)) {
		foreach ($iter as $val) {
			echo "val == $val\n";
		}
	} else {		
		throw new Exception("Argument 1 passed to iterate() must be iterable");
	}
}

iterate(array(1,2,3));
iterate("string");