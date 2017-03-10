<?php

namespace NotificationPhonegap;

use GCMPushMessage;


Class Android {
	public static function test() {
		var_dump(class_exists('GCMPushMessage'));
	}
}