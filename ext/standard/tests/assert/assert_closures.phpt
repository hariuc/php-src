--TEST--
assert() - basic - accept closures as callback.
--INI--
assert.active = 1
assert.warning = 1
assert.bail = 0
assert.exception=0
--FILE--
<?php
assert_options(ASSERT_CALLBACK, function () { echo "Hello World!\n"; });
assert(0);
?>
--EXPECTF--
Deprecated: PHP Startup: assert.exception INI setting is deprecated in Unknown on line 0

Deprecated: Constant ASSERT_CALLBACK is deprecated since 8.3, as assert_options() is deprecated in %s on line %d

Deprecated: Function assert_options() is deprecated since 8.3 in %s on line %d
Hello World!

Warning: assert(): assert(0) failed in %s on line %d
