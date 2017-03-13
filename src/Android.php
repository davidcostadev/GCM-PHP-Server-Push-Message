<?php

namespace NotificationPhonegap;

// use GCMPushMessage;


final class Android {

    private static $_instance;

    private $Api;

    public function __construct () {
        $this->Push = new GCMPushMessage();
    }

    private static function instance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function setDevices($key) {
        $this->Push->setDevices($key);
    }

    public static function setKey($key) {
        self::instance()
        ->Push->setKey($key);
    }

    public static function recipients(array $devices) {
        self::instance()
            ->setDevices($devices);
    }

    public static function simple($message) {
        $self = self::instance();

        $response = $self->Push->send($message);

        echo $response;

    }
}
