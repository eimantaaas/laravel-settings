<?php

namespace Spatie\LaravelSettings\Events;

use Spatie\LaravelSettings\Settings;

class SavingSettings
{
    public Settings $settings;

    public string $settingsClass;

    public array $properties;

    public function __construct(
        string $settingsClass,
        array $properties,
        Settings $settings
    ) {
        $this->settingsClass = $settingsClass;
        $this->properties = $properties;
        $this->settings = $settings;
    }
}