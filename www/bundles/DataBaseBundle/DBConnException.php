<?php
class DBConnException extends Exception {
    public function __construct($message = 'couldnt connect to DB', $code = 321, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
?>
