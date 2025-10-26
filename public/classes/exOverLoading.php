<?php
//
//class MyTestClass
//{
//    public function greetMessage($message)
//    {
//        echo "Hello " . $message;
//    }
//    public function greetMessage($message,$name)
//    {
//        echo "Hello " .$message .'--' . $name;
//    }
//}
//
//$obj = new MyTestClass();
//$obj->greetMessage('GoodMorning');  // will generate the error

class MyClassWithOverLoading
{
    public function __call($functionName,$argument)
    {
        $argumentCount = count($argument);
        if($functionName == 'area') {
            switch ($argumentCount) {
                case 0:
                    return 'Error: missing arguments';
                case 1:
                    return ($argument[0] * $argument[0]); // square
                case 2:
                    return ($argument[0] * $argument[1]); // rectangle
            }
        }else {
            return (3.14 * $argument[0]);  // circle area
        }
    }

}

$obj = new MyClassWithOverLoading();
echo 'Area of Square: ' .       $obj->area(2) . PHP_EOL;
echo 'Area of Rectangle: ' .    $obj->area(2,8) . PHP_EOL;
echo 'Area of Circle: '  .      $obj->circleArea(2) . PHP_EOL;
