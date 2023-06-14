<?php

namespace App\exception\router;

use Exception;

class routeClassNotFound extends Exception{

    public function __construct($msg)
    {
        throw new Exception($msg);
    }
}

?>