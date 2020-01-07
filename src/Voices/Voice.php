<?php


namespace SergiX44\OddcastTTS\Voices;


interface Voice
{
    public function getID(): int;

    public function getLanguageID(): int;

    public function getLanguageName(): string;

    public function getName(): string;

    public function getGender(): string;

    public function getEngine(): int;

}