<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MySQL Functions Demo</title>
<style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
    h1 { text-align: center; }
    table { border-collapse: collapse; width: 100%; background: #fff; margin-top: 20px; }
    th, td { border: 1px solid #ddd; padding: 10px; text-align: left; vertical-align: top; }
    th { background-color: #4CAF50; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    code { background: #eee; padding: 2px 5px; display: block; }
    a { color: #007BFF; text-decoration: none; }
    a:hover { text-decoration: underline; }
</style>
</head>

<body>
<h1>MySQL Functions Demo</h1>
<table>
<tr>
<th>SQL Function</th>
<th>Description</th>
<th>Example Code</th>
<th>Example Output</th>
</tr>

<?php
$functions = [
    // STRING FUNCTIONS
    ["ASCII","Returns ASCII value of a character","SELECT ASCII(text_value) FROM demo_data","string/ascii.php"],
    ["CHAR_LENGTH","Returns length of a string","SELECT CHAR_LENGTH(text_value) FROM demo_data","string/char_length.php"],
    ["CHARACTER_LENGTH","Returns length of a string","SELECT CHARACTER_LENGTH(text_value) FROM demo_data","string/character_length.php"],
    ["CONCAT","Concatenate strings","SELECT CONCAT(text_value,'-',number_value) FROM demo_data","string/concat.php"],
    ["CONCAT_WS","Concatenate with separator","SELECT CONCAT_WS(' | ', text_value, number_value) FROM demo_data","string/concat_ws.php"],
    ["FIELD","Returns index of value in list","SELECT FIELD(text_value,'Hello','World') FROM demo_data","string/field.php"],
    ["FIND_IN_SET","Position of string in comma list","SELECT FIND_IN_SET('SQL','PHP,SQL,HTML')","string/find_in_set.php"],
    ["FORMAT","Formats a number","SELECT FORMAT(number_value,2) FROM demo_data","string/format.php"],
    ["INSERT","Insert string into string","SELECT INSERT(text_value,1,0,'NEW ') FROM demo_data","string/insert.php"],
    ["INSTR","Position of substring","SELECT INSTR(text_value,'SQL') FROM demo_data","string/instr.php"],
    ["LCASE","Lowercase string","SELECT LCASE(text_value) FROM demo_data","string/lcase.php"],
    ["LEFT","Extract left characters","SELECT LEFT(text_value,5) FROM demo_data","string/left.php"],
    ["LENGTH","Length in bytes","SELECT LENGTH(text_value) FROM demo_data","string/length.php"],
    ["LOCATE","Position of substring","SELECT LOCATE('SQL', text_value) FROM demo_data","string/locate.php"],
    ["LOWER","Lowercase string","SELECT LOWER(text_value) FROM demo_data","string/lower.php"],
    ["LPAD","Left pad string","SELECT LPAD(text_value,20,'*') FROM demo_data","string/lpad.php"],
    ["LTRIM","Remove leading spaces","SELECT LTRIM('   Hello')","string/ltrim.php"],
    ["MID","Substring from position","SELECT MID(text_value,2,5) FROM demo_data","string/mid.php"],
    ["POSITION","Position of substring","SELECT POSITION('SQL' IN text_value) FROM demo_data","string/position.php"],
    ["REPEAT","Repeat string","SELECT REPEAT(text_value,2) FROM demo_data","string/repeat.php"],
    ["REPLACE","Replace substring","SELECT REPLACE(text_value,'SQL','MySQL') FROM demo_data","string/replace.php"],
    ["REVERSE","Reverse string","SELECT REVERSE(text_value) FROM demo_data","string/reverse.php"],
    ["RIGHT","Extract right characters","SELECT RIGHT(text_value,5) FROM demo_data","string/right.php"],
    ["RPAD","Right pad string","SELECT RPAD(text_value,20,'*') FROM demo_data","string/rpad.php"],
    ["RTRIM","Remove trailing spaces","SELECT RTRIM('Hello   ')","string/rtrim.php"],
    ["SPACE","Returns string of spaces","SELECT CONCAT('Hello',SPACE(5),'World')","string/space.php"],
    ["STRCMP","Compare strings","SELECT STRCMP('abc','abc')","string/strcmp.php"],
    ["SUBSTR","Substring from position","SELECT SUBSTR(text_value,2,5) FROM demo_data","string/substr.php"],
    ["SUBSTRING","Substring from position","SELECT SUBSTRING(text_value,2,5) FROM demo_data","string/substring.php"],
    ["SUBSTRING_INDEX","Substring before delimiter","SELECT SUBSTRING_INDEX(text_value,' ',1) FROM demo_data","string/substring_index.php"],
    ["TRIM","Trim spaces","SELECT TRIM('   Hello   ')","string/trim.php"],
    ["UCASE","Uppercase string","SELECT UCASE(text_value) FROM demo_data","string/ucase.php"],
    ["UPPER","Uppercase string","SELECT UPPER(text_value) FROM demo_data","string/upper.php"],

    // NUMERIC FUNCTIONS
    ["ABS","Absolute value","SELECT ABS(number_value) FROM demo_data","numeric/abs.php"],
    ["ACOS","Arc cosine","SELECT ACOS(0.5)","numeric/acos.php"],
    ["ASIN","Arc sine","SELECT ASIN(0.5)","numeric/asin.php"],
    ["ATAN","Arc tangent","SELECT ATAN(1)","numeric/atan.php"],
    ["ATAN2","Arc tangent of two numbers","SELECT ATAN2(1,2) AS result","numeric/atan2.php"],
    ["AVG","Average value","SELECT AVG(number_value) FROM demo_data","numeric/avg.php"],
    ["CEIL","Ceiling value","SELECT CEIL(number_value) AS result FROM demo_data","numeric/ceil.php"],
    ["CEILING","Ceiling value","SELECT CEILING(number_value) AS result FROM demo_data","numeric/ceiling.php"],
    ["COS","Cosine","SELECT COS(0)","numeric/cos.php"],
    ["COT","Cotangent","SELECT COT(1)","numeric/cot.php"],
    ["COUNT","Count records","SELECT COUNT(*) FROM demo_data","numeric/count.php"],
    ["DEGREES","Radians to degrees","SELECT DEGREES(PI()) AS result","numeric/degrees.php"],
    ["DIV","Integer division","SELECT 10 DIV 3 AS result","numeric/div.php"],
    ["EXP","Exponential e^x","SELECT EXP(2) AS result","numeric/exp.php"],
    ["FLOOR","Floor value","SELECT FLOOR(number_value) AS result FROM demo_data","numeric/floor.php"],
    ["GREATEST","Greatest value","SELECT GREATEST(1,5,3) AS result","numeric/greatest.php"],
    ["LEAST","Least value","SELECT LEAST(1,5,3)","numeric/least.php"],
    ["LN","Natural logarithm","SELECT LN(2)","numeric/ln.php"],
    ["LOG","Logarithm","SELECT LOG(10)","numeric/log.php"],
    ["LOG10","Log base 10","SELECT LOG10(100)","numeric/log10.php"],
    ["LOG2","Log base 2","SELECT LOG2(8)","numeric/log2.php"],
    ["MAX","Maximum value","SELECT MAX(number_value) FROM demo_data","numeric/max.php"],
    ["MIN","Minimum value","SELECT MIN(number_value) FROM demo_data","numeric/min.php"],
    ["MOD","Modulo","SELECT MOD(10,3) AS result","numeric/mod.php"],
    ["PI","Value of PI","SELECT PI()","numeric/pi.php"],
    ["POW","Power","SELECT POW(2,3) AS result","numeric/pow.php"],
    ["POWER","Power","SELECT POWER(2,3)","numeric/power.php"],
    ["RADIANS","Degrees to radians","SELECT RADIANS(180)","numeric/radians.php"],
    ["RAND","Random number","SELECT RAND()","numeric/rand.php"],
    ["ROUND","Round number","SELECT ROUND(number_value,1) AS result FROM demo_data","numeric/round.php"],
    ["SIGN","Sign of number","SELECT SIGN(number_value) AS result FROM demo_data","numeric/sign.php"],
    ["SIN","Sine","SELECT SIN(1)","numeric/sin.php"],
    ["SQRT","Square root","SELECT SQRT(16)","numeric/sqrt.php"],
    ["SUM","Sum of values","SELECT SUM(number_value) FROM demo_data","numeric/sum.php"],
    ["TAN","Tangent","SELECT TAN(1)","numeric/tan.php"],
    ["TRUNCATE","Truncate number","SELECT TRUNCATE(number_value,1) AS result FROM demo_data","numeric/truncate.php"],


    // DATE FUNCTIONS
    ["ADDDATE","Add interval to date","SELECT ADDDATE(date_value, INTERVAL 10 DAY) FROM demo_data","date/adddate.php"],
    ["ADDTIME","Add interval to time","SELECT ADDTIME('10:00:00','02:30:00')","date/addtime.php"],
    ["CURDATE","Current date","SELECT CURDATE()","date/curdate.php"],
    ["CURRENT_DATE","Current date","SELECT CURRENT_DATE()","date/current_date.php"],
    ["CURRENT_TIME","Current time","SELECT CURRENT_TIME()","date/current_time.php"],
    ["CURRENT_TIMESTAMP","Current datetime","SELECT CURRENT_TIMESTAMP()","date/current_timestamp.php"],
    ["CURTIME","Current time","SELECT CURTIME()","date/curtime.php"],
    ["DATE","Extract date","SELECT DATE(created_at) FROM demo_data","date/date.php"],
    ["DATEDIFF","Difference in days","SELECT DATEDIFF(CURDATE(), date_value) FROM demo_data","date/datediff.php"],
    ["DATE_ADD","Add interval to date","SELECT DATE_ADD(date_value, INTERVAL 1 MONTH) FROM demo_data","date/date_add.php"],
    ["DATE_FORMAT","Format date","SELECT DATE_FORMAT(created_at,'%Y-%m-%d') FROM demo_data","date/date_format.php"],
    ["DATE_SUB","Subtract interval","SELECT DATE_SUB(date_value, INTERVAL 5 DAY) FROM demo_data","date/date_sub.php"],
    ["DAY","Day of month","SELECT DAY(date_value) FROM demo_data","date/day.php"],
    ["DAYNAME","Day name","SELECT DAYNAME(date_value) FROM demo_data","date/dayname.php"],
    ["DAYOFMONTH","Day of month","SELECT DAYOFMONTH(date_value) FROM demo_data","date/dayofmonth.php"],
    ["DAYOFWEEK","Day of week index","SELECT DAYOFWEEK(date_value) FROM demo_data","date/dayofweek.php"],
    ["DAYOFYEAR","Day of year","SELECT DAYOFYEAR(date_value) FROM demo_data","date/dayofyear.php"],
    ["EXTRACT","Extract part of date","SELECT EXTRACT(MONTH FROM date_value) FROM demo_data","date/extract.php"],
    ["FROM_DAYS","Return date from days","SELECT FROM_DAYS(738000)","date/from_days.php"],
    ["HOUR","Hour from time","SELECT HOUR('15:30:00')","date/hour.php"],
    ["LAST_DAY","Last day of month","SELECT LAST_DAY(date_value) FROM demo_data","date/last_day.php"],
    ["LOCALTIME","Current datetime","SELECT LOCALTIME()","date/localtime.php"],
    ["LOCALTIMESTAMP","Current datetime","SELECT LOCALTIMESTAMP()","date/localtimestamp.php"],
    ["MAKEDATE","Make date from year and day","SELECT MAKEDATE(2026,37)","date/makedate.php"],
    ["MAKETIME","Make time from h,m,s","SELECT MAKETIME(5,30,0)","date/maketime.php"],
    ["MICROSECOND","Microsecond part","SELECT MICROSECOND(NOW(6))","date/microsecond.php"],
    ["MINUTE","Minute part","SELECT MINUTE('15:45:30')","date/minute.php"],
    ["MONTH","Month part","SELECT MONTH(date_value) FROM demo_data","date/month.php"],
    ["MONTHNAME","Month name","SELECT MONTHNAME(date_value) FROM demo_data","date/monthname.php"],
    ["NOW","Current datetime","SELECT NOW()","date/now.php"],
    ["PERIOD_ADD","Add months to period","SELECT PERIOD_ADD(202601,2)","date/period_add.php"],
    ["PERIOD_DIFF","Difference between periods","SELECT PERIOD_DIFF(202602,202601)","date/period_diff.php"],
    ["QUARTER","Quarter of year","SELECT QUARTER(date_value) FROM demo_data","date/quarter.php"],
    ["SECOND","Second part","SELECT SECOND('15:45:30')","date/second.php"],
    ["SEC_TO_TIME","Seconds to time","SELECT SEC_TO_TIME(3600)","date/sec_to_time.php"],
    ["STR_TO_DATE","String to date","SELECT STR_TO_DATE('06-02-2026','%d-%m-%Y')","date/str_to_date.php"],
    ["SUBDATE","Subtract interval from date","SELECT SUBDATE(date_value,INTERVAL 5 DAY) FROM demo_data","date/subdate.php"],
    ["SUBTIME","Subtract interval from time","SELECT SUBTIME('10:00:00','02:30:00')","date/subtime.php"],
    ["SYSDATE","Current datetime","SELECT SYSDATE()","date/sysdate.php"],
    ["TIME","Extract time","SELECT TIME(created_at) FROM demo_data","date/time.php"],
    ["TIME_FORMAT","Format time","SELECT TIME_FORMAT('15:30:00','%h:%i %p')","date/time_format.php"],
    ["TIME_TO_SEC","Time to seconds","SELECT TIME_TO_SEC('01:30:00')","date/time_to_sec.php"],
    ["TIMEDIFF","Time difference","SELECT TIMEDIFF('12:00:00','10:00:00')","date/timediff.php"],
    ["TIMESTAMP","Datetime from date","SELECT TIMESTAMP(date_value) FROM demo_data","date/timestamp.php"],
    ["TO_DAYS","Days since 0000-00-00","SELECT TO_DAYS(date_value) FROM demo_data","date/to_days.php"],
    ["WEEK","Week number","SELECT WEEK(date_value) FROM demo_data","date/week.php"],
    ["WEEKDAY","Weekday number","SELECT WEEKDAY(date_value) FROM demo_data","date/weekday.php"],
    ["WEEKOFYEAR","Week of year","SELECT WEEKOFYEAR(date_value) FROM demo_data","date/weekofyear.php"],
    ["YEAR","Year part","SELECT YEAR(date_value) FROM demo_data","date/year.php"],
    ["YEARWEEK","Year and week","SELECT YEARWEEK(date_value) FROM demo_data","date/yearweek.php"],

    // ADVANCED FUNCTIONS
    ["BIN","Binary representation","SELECT BIN(10)","advanced/bin.php"],
    ["BINARY","Convert to binary string","SELECT BINARY 'mysql'","advanced/binary.php"],
    ["CASE","Conditional case","SELECT CASE WHEN number_value>500 THEN 'High' ELSE 'Low' END FROM demo_data","advanced/case.php"],
    ["CAST","Cast type","SELECT CAST(number_value AS CHAR) FROM demo_data","advanced/cast.php"],
    ["COALESCE","First non-null","SELECT COALESCE(NULL,text_value) FROM demo_data","advanced/coalesce.php"],
    ["CONNECTION_ID","Connection ID","SELECT CONNECTION_ID()","advanced/connection_id.php"],
    ["CONV","Convert number base","SELECT CONV(15,10,2)","advanced/conv.php"],
    ["CONVERT","Convert type","SELECT CONVERT(number_value, CHAR) FROM demo_data","advanced/convert.php"],
    ["CURRENT_USER","Current user","SELECT CURRENT_USER()","advanced/current_user.php"],
    ["DATABASE","Current database","SELECT DATABASE()","advanced/database.php"],
    ["IF","Conditional function","SELECT IF(number_value>500,'High','Low') FROM demo_data","advanced/if.php"],
    ["IFNULL","Return value if null","SELECT IFNULL(NULL,'Default')","advanced/ifnull.php"],
    ["ISNULL","Check null","SELECT ISNULL(NULL)","advanced/isnull.php"],
    ["LAST_INSERT_ID","Last insert ID","SELECT LAST_INSERT_ID()","advanced/last_insert_id.php"],
    ["NULLIF","Return NULL if equal","SELECT NULLIF(5,5)","advanced/nullif.php"],
    ["SESSION_USER","Session user","SELECT SESSION_USER()","advanced/session_user.php"],
    ["SYSTEM_USER","System user","SELECT SYSTEM_USER()","advanced/system_user.php"],
    ["USER","Current user","SELECT USER()","advanced/user.php"],
    ["VERSION","MySQL version","SELECT VERSION()","advanced/version.php"]
];

foreach($functions as $f){
    echo "<tr>
    <td>{$f[0]}</td>
    <td>{$f[1]}</td>
    <td><code>{$f[2]}</code></td>
    <td><a href='{$f[3]}' target='_blank'>View Output</a></td>
    </tr>";
}
?>

</table>
</body>
</html>
