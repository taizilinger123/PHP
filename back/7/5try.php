<?php

function test($e)
{
    echo $e->getMessage();
}

set_exception_handler('test');

throw new Exception('现在有异常了');