<?php


namespace SergiX44\OddcastTTS\Voices\Hungarian;


use SergiX44\OddcastTTS\Voices\Voice;

class Laszlo implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 29;
    }

    public function getLanguageName(): string
    {
        return 'Hungarian';
    }

    public function getName(): string
    {
        return 'Laszlo';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}