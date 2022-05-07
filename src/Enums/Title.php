<?php
namespace Luanardev\Library\Enums;

enum Title: string{
    case Prof = 'Prof';
    case Dr = 'Dr';
    case Mr = 'Mr';
    case Mrs = 'Mrs';
    case Miss = 'Miss';
    case Rev = 'Rev';
    case Hon = 'Hon';
    case Sir = 'Sir';
    case Lord = 'Lord';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}
