<?php

namespace Atas\SsgSystemPhp;

class Post
{
    public string $title;
    public string $desc;
    public string $slug;
    public string $filename;
    public ?string $date = null;

    // When was the file modified last
    public int $lastModified;
}