--TEST--
invalid object raise exception() function
--EXTENSIONS--
enchant
--FILE--
<?php
$broker = enchant_broker_init();
if (is_object($broker)) {
	echo "OK\n";
	@enchant_broker_free($broker);
	try {
		@enchant_broker_free($broker);
	} catch (ValueError $e) {
		echo $e->getMessage()."\n";
	}
} else {
	exit("init failed\n");
}
echo "OK\n";
?>
--EXPECT--
OK
Invalid or uninitialized EnchantBroker object
OK
