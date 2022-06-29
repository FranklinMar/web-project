<?php

// interface ISingleton {
// 	public static function get_instance();
// }

// class Singleton implements ISingleton {


// class Singleton {
// 	protected static $instance;
	
// 	private function __construct() {}

//     public static function get_instance() {
//         if (self::$instance === null) {
//             self::$instance = new self();
//         }
//         return self::$instance;
//     }
// }

abstract class ISingleton {
	abstract public static function get_instance();
}

// class Logger extends Singleton {
class Logger extends ISingleton {
	private static $instance;
	private string $message;
	// private function __construct() {
	// 	return parent::get_instance();
	// }
	// public static function get_instance() {
	// 	return parent::get_instance();
	// }
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
		// $this->message = (($this->message !== null) ? $this->message.$str : $str).'<br>';
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
// echo "HELLO WORLD!"

?>