<?php

if(php_sapi_name() !== 'cli') die('Run with Command Prompt.'); 
/**
 *
 *   *
 *   **
 *   ***
 *   ****
 */
function patternOne($length)
{
    for($row = 1; $row <= $length; $row++) {

        for($col = 1; $col <= $row; $col++) {
            echo '*';
        }

        echo PHP_EOL;
    }
}
exec('cls');
patternOne(5);

sleep(5);

/**
 *
 *   *****
 *    ****
 *     ***
 *      **
 *       *
 * */

function patternTwo($length)
{
    for($row=1; $row<=$length;$row++) {
        for($col=1; $col<=$length;$col++) {
            if($col<$row) {
                echo ' ';
            }else {
                echo '*';
            }
        }
        echo PHP_EOL;
    }
}

patternTwo(5);
