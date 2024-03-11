<?php

namespace Forteach\FolderOne;

use Forteach\FolderTwo\FolderTwoFileOne;

class FolderOneFileOne {
    public function __construct()
    {
        echo "I'm Folder_1_file_1！！\n";
        new FolderTwoFileOne();
    }
}