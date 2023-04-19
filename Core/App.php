<?php

namespace Core;
class app
{


public function configure ():void{
require_once __DIR__.'./../App/config.php';
require_once __DIR__.'./../App/router.php';

}
public function handleRequests ():void{
       echo (new Router())->handleRouter();
    }
}