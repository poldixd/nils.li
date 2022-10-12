<?php

namespace App\Enums;

enum ProjectStatusEnum: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
}