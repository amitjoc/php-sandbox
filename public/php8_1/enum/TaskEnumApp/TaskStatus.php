<?php

enum TaskStatus 
{
    case PENDING;
    case IN_PROGRESS;
    case BLOCKED;
    case COMPLETED;
    case ARCHIVED;

    public function isFinal(): bool
    {
        return in_array($this, [TaskStatus::COMPLETED, TaskStatus::ARCHIVED]);
    }

    public function emoji(): string 
    {
        $emoji = match ($this) 
                {
                    SELF::PENDING => '🚧',
                    SELF::IN_PROGRESS => '⏳',
                    SELF::BLOCKED => '⛔',
                    SELF::COMPLETED => '✅',
                    SELF::ARCHIVED => '🗃️',
                };

        return $emoji;
    }
}

// $taskStatusEmoji = TaskStatus::PENDING;
// echo $taskStatusEmoji->emoji();


// Enum: TaskCategory (string)
// - Cases: 
//   - WORK → "work"
//   - PERSONAL → "personal"
//   - SHOPPING → "shopping"
//   - HEALTH → "health"
// - Methods:
//   - icon(): string → Returns FontAwesome icon class
//   - estimatedHours(): int → Returns default time estimate per category