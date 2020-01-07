<?php


namespace SergiX44\OddcastTTS\Voices\Japanese;


use SergiX44\OddcastTTS\Voices\Voice;

class Show implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 12;
    }

    public function getLanguageName(): string
    {
        return 'Japanese';
    }

    public function getName(): string
    {
        return 'Show';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 3;
    }
}