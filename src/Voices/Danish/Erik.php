<?php


namespace SergiX44\OddcastTTS\Voices\Danish;


use SergiX44\OddcastTTS\Voices\Voice;

class Erik implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 19;
    }

    public function getLanguageName(): string
    {
        return 'Danish';
    }

    public function getName(): string
    {
        return 'Erik';
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