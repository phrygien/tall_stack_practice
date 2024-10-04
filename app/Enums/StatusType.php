<?php

namespace App\Enums;

enum StatusType: string
{
    public const STARTED = "started";
    public const DONE = "done";
    public const IN_PROGRESS = "in_progress";
}