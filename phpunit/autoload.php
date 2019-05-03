<?php
$dir = 'Test/mocks';
if ($handle = opendir($dir)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            require_once("$dir/" . "$entry");
            //echo "$entry\n";
        }
    }

    closedir($handle);
}
