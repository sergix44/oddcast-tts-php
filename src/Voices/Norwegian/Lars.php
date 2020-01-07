<?php


namespace SergiX44\OddcastTTS\Voices\Norwegian;


use SergiX44\OddcastTTS\Voices\Voice;

class Lars implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 20;
    }

    public function getLanguageName(): string
    {
        return 'Norwegian';
    }

    public function getName(): string
    {
        return 'Lars';
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