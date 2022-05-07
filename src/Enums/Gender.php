<?php
namespace Luanardev\Library\Enums;

enum Gender: string{
    case Male = 'Male';
    case Female = 'Female';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}



