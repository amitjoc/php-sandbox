<?php

enum TaskCategory 
{
    case WORK;
    case PERSONAL;
    case SHOPPING;
    case HEALTH;

    public function emoji(): string 
    {
        return match($this) 
                {
                    SELF::WORK => '💼',
                    SELF::PERSONAL => '🤵',
                    SELF::SHOPPING => '🛒',
                    SELF::HEALTH => '🩺',

                };
    }

    public function estimatedHours(): int 
    {
        return match($this) {
            SELF::WORK => 5,
            SELF::PERSONAL => 3,
            SELF::SHOPPING => 1,
            SELF::HEALTH =>2,
        };
    }
}


$workTaskCategory = TaskCategory::HEALTH;
echo $workTaskCategory->estimatedHours();
echo $workTaskCategory->emoji();