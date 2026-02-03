<?php

interface IVoice
{
    public function voice($animalType);
}
interface IAnimalVoice extends IVoice {
    public function voice($animalType);
}

interface IBirdVoice extends IVoice
{
    public function voice($animalType);
}

class animal implements IVoice, IAnimalVoice {

    public function voice($animalType)
    {
        // TODO: Implement voice() method.
    }
}


echo "<pre>";
print_r(class_implements('animal'));