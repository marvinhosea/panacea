<?php


namespace Panacea\Exception;

use Exception;

class NotReachable extends Exception
{
    protected $message = "An error occurred, unable to reach Panacea service";
}
