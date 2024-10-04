<?php

namespace App\Enums;

enum StatusType: string
{
    case STARTED = "started";
    case DONE = "done";
    case IN_PROGRESS = "in_progress";
}