--TEST--
Testing: suhosin.mail.protect=1 with valid long To
--SKIPIF--
<?php include "../skipifnotcli.inc"; ?>
--INI--
suhosin.log.sapi=255
suhosin.log.stdout=0
suhosin.log.script=0
suhosin.log.syslog=0
suhosin.mail.protect=1
sendmail_path=/usr/bin/true
--FILE--
<?php
	var_dump(mail("to\n long\r\n\tfoo", "subject", "msg"));
?>
--EXPECTF--
bool(true)