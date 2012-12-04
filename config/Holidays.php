<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Holiday options.
| -------------------------------------------------------------------------
|  
| Observance  : If true, the observance dates will be used for Holidays that fall on weekends
| Easter      : Include Easter in the holidays  
| Good Friday : Include Good Friday in the holidays
*/
$config['observance']  = true;
$config['easter']      = false;
$config['good_friday'] = false;
/*
| -------------------------------------------------------------------------
| Extra Holidays
| -------------------------------------------------------------------------
|  
| The extra array will contain any extra holidays that should be includes. 
| There are three different types of days that can go in the array.
| All types will be combined in the extra array
| 
| Fixed    : Month and day for the holiday in an array with 2 parameters
|            1st param: month (1 - 12)
|            2nd param: day of month (1 - 31)
|            ex. New Year's Eve would be array(12, 31)
|
| Floating : Specific day of the month in an array with 3 parameters
|            1st param: day of week (0 - 6) 0 = sunday
|            2nd param: month (1 - 12)
|            3rd param: week of month (0 - 5) 5 = last week of month (even if the last week may be the 4th week)
|            ex. Last Wednesday of October would be array(3, 10, 5)
|
| Special  : Day in relation to another holiday 
|            1st param: positive or negative day of week (0 - 7) negative values indicate before, positive indicate after, for sunday, 0 = sunday before, 7 = sunday after
|            2nd param: day of week (0 - 6) for the holiday
|            3rd param: month (1 - 12)
|            4th param: week of month (0 - 5) 5 = last week of month (even if the last week may be the 4th week)
|            ex. The friday before Memorial Day would be array(-5, 1, 5, 5) (i.e., the Friday before the last Monday in May)
|            ex. The Friday after Thanksgiving would be array(+5, 4, 11, 4) (i.e., the Friday after the 4th Thursday in November)
|            ex. The Sunday after Thanksgiving would be array(+7, 4, 11, 4) (i.e., the Sunday after the 4th Thursday in November)
*/

/* An example extra holiday array: 
$config['extra']       = array(
    "New Year's Eve"          => array(12, 31),
    'Fri. after Thanksgiving' => array(+5, 4, 11, 4),
    'Fri. before Memorial'    => array(-5, 1, 5, 5)
);
*/
$config['extra'] = array();

