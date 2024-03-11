<?php

include '../folder_2/folder_2_file_1.php';


class Folder_1_file_1{
    public function __construct()
    {
        echo "I'm Folder_1_file_1！！\n";
        new Folder_2_file_1();
    }
}
