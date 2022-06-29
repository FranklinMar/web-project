<?php

abstract class ISingleton {
	abstract public static function get_instance();
}

class Logger extends ISingleton {
	private static $instance;
	private string $message;
	

	private function __construct() {
		$this->message = "";
	}

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

	public function add_message (string $str) {
		if ($str === null){
			$str = '';
		}
		$this->message .= $str.'<br>';
	}
	
	public function get_message() {
		return $this->message;
	}
}

$log = Logger::get_instance();

$log->add_message("Hello World!");
$log->add_message("This is PHP OOP!");

echo $log->get_message().'<br><br>';

print_r($log);

$logNew = Logger::get_instance();

print_r($logNew);

echo '<br><br>'.$logNew->get_message();

?>