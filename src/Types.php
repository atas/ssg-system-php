<?php

namespace Atas\SsgSystemPhp;

class Post {
    public string $title;
    public string $desc;
    public string $slug;
    public string $filename;

    // When was the file modified last
    public int $lastModified;
}

class PageMeta
{
    public ?string $title = null;
    public string $type = "website";
    public string $desc = "";
    public string $selectedTab = "";
    public string $og_image;
}

class ProcessedPageMeta
{
    public ?string $title = null;
    public string $desc = "";
    public string $type = "website";
    public string $og_image;
    public string $og_image_width;
    public string $og_image_height;
}

class ConvertedMarkdown {
    public string $content;
    public object $meta;
}

class SiteConfig {
    public string $siteTopH1;
    public string $siteTopAboutLine1;
    public string $siteTopAboutLine2;
    public string $prodHostname;
    public string $email;
    public string $fullTitle;
    public string $appendedTitle;
    public string $siteDesc;
    public string $linkedinUrl;
    public string $twitterUrl;
    public string $githubUrl;
    public string $location;
    public string $defaultOpengraphImage;
}
