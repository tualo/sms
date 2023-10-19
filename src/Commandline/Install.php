<?php
namespace Tualo\Office\DS\Commandline;
use Tualo\Office\Basic\ICommandline;
use Tualo\Office\Basic\CommandLineInstallSQL;

class Install extends CommandLineInstallSQL  implements ICommandline{
    public static function getDir():string {   return dirname(__DIR__,1); }
    public static $shortName  = 'sms';
    public static $files = [
        'sms_environment' => 'setup sms_environment  ',
        'sms_environment.ds' => 'setup sms_environment  ds ',

    ];
    
}