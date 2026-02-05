# enum Points

- Case are case sensitive 
- Case are kind of key value which are having name and value 


## Project Overview  
A minimal task management system demonstrating the exclusive use of PHP enumerations (enums) for data modeling, state management, and business logic.

## Core Requirements  
- Use only PHP 8.1+ enumeration features (no classes, arrays, or traditional constants)  
- Zero database or external storage dependencies  
- All data persisted in memory using enum structures only


## Enumeration Specifications

### 1. Task Priority Enum  

Enum: TaskPriority
- Cases: LOW, MEDIUM, HIGH, CRITICAL
- Methods:
  - color(): string → Returns hex color code for UI representation
  - order(): int → Returns sorting weight (1-4)
  - isUrgent(): bool → Returns true for HIGH and CRITICAL