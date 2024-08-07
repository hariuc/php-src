--TEST--
Bug #69802 (Reflection on Closure::__invoke borks type hint class name)
--FILE--
<?php
$f = function(stdClass $x): stdClass {};
$r = new ReflectionMethod($f, '__invoke');
var_dump($r->getParameters()[0]->getName());
var_dump($r->getParameters()[0]->getClass());
echo $r->getParameters()[0], "\n";
echo $r->getReturnType()->getName(), "\n";
echo $r,"\n";
?>
--EXPECTF--
string(1) "x"

Deprecated: Method ReflectionParameter::getClass() is deprecated since 8.0, use ReflectionParameter::getType() instead in %s on line %d
object(ReflectionClass)#4 (1) {
  ["name"]=>
  string(8) "stdClass"
}
Parameter #0 [ <required> stdClass $x ]
stdClass
Method [ <internal> public method __invoke ] {

  - Parameters [1] {
    Parameter #0 [ <required> stdClass $x ]
  }
  - Return [ stdClass ]
}
