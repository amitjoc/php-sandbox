<?php 

echo "Current Php Version " . phpversion();
echo "<br />";
echo "Enum Feature 8.1<pre>";

/** 
 * Types of Enums
 * 
 * 
 */

enum Status
{
    case DRAFT;
    case PUBLISHED;
    CASE ARCHIVED;
}

echo "<hr />";
//echo Status::DRAFT; // enum values are object by default so can not be used like this
// echo Status::DRAFT->name; // to use enum as value you have to use name properties  
// echo "<br />";
// echo "<br />";
// print_r(Status::DRAFT);
// echo "<br />";
// print_r(Status::cases());

// Backed type with int
enum LogLevel: int
{
    case INFO = 1;
    case DEBUG = 2;
    case WARNING = 3;
    case ERROR = 4;

}

echo "<hr />";
// print_r(LogLevel::cases());
echo LogLevel::WARNING->name; // will print WARNING
echo "<br />";
echo LogLevel::WARNING->value; // will print 3
