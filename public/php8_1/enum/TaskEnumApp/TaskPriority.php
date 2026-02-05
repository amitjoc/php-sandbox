<?php

enum TaskPriority 
{
    case LOW;
    case MEDIUM;
    case HEIGH;
    case CRITICAL;

    public function color(): string 
    {
        $color = match ($this->name) // instead of $this->name we can use also self keyword
                        {
                            'LOW' => 'GREEN',
                            'MEDIUM'=> 'YELLOW',
                            'HEIGH' => 'ORANGE',
                            "CRITICAL" => 'RED',
                        };

        return $color;
    } 

    public function hexColor(): string
    {
        $hex_color = match ($this) 
                {
                    SELF::LOW => '#00AC46',
                    SELF::MEDIUM => '#FFC107',
                    SELF::HEIGH => '#FD8C00',
                    SELF::CRITICAL => '#DC0000',

                };

        return $hex_color;
    }

    public function order(): int 
    {
        $return_order = match($this->name)
                        {
                            'LOW' => 1,
                            'MEDIUM' => 2,
                            'HEIGH' => 3,
                            'CRITICAL' => 4,
                        };

        return $return_order;
    }

    public function isUrgent(): bool 
    {
        return in_array($this,[SELF::HEIGH, SELF::CRITICAL]); 
    }
}


/** 
 * Simple test for working
 * TODO: have to write Phpunit Test
 * 
*/
// $LowTaskPriority = TaskPriority::LOW;
// $MediumTaskPriority = TaskPriority::MEDIUM;
// $HeighTaskPriority = TaskPriority::HEIGH;
// $CriticalTaskPriority = TaskPriority::CRITICAL;

// var_dump($MediumTaskPriority->isUrgent());
// echo "<br />";
// echo "Color of Lower Priority Tasks:" .  $LowTaskPriority->color();     echo "<hr />";
// echo "Color of Medium Priority Tasks:" .  $MediumTaskPriority->color(); echo "<hr />";
// echo "Color of Medium Priority Tasks:" .  $HeighTaskPriority->color(); echo "<hr />";
// echo "Color of Medium Priority Tasks:" .  $CriticalTaskPriority->color(); echo "<hr />";


// Enum: TaskStatus
// - Cases: PENDING, IN_PROGRESS, BLOCKED, COMPLETED, ARCHIVED
// - Methods:
//   - canTransitionTo(TaskStatus $status): bool
//     • Defines valid state transitions as enum logic
//   - isFinal(): bool → Returns true for COMPLETED, ARCHIVED
//   - emoji(): string → Returns representative emoji
