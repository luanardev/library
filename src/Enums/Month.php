<?php
namespace Luanardev\Library\Enums;

enum Month: string{
    case January = 'January';
    case February = 'February';
    case March = 'March';
    case April = 'April';
    case May = 'May';
    case June = 'June';
    case July = 'July';
    case August = 'August';
    case September = 'September';
    case October = 'October';
    case November = 'November';
    case December = 'December';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
 
}
