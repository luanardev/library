<?php
namespace Luanardev\Library\Enums;

enum Binary: string{
    case YES = 'Yes';
    case NO = 'No';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}



