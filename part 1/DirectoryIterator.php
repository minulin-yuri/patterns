<?php

foreach (new DirectoryIterator('E:\OpenServer') as $fileInfo) {
    if ($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "<br>\n";
    /* если необходимо вывести только каталоги 
    if ($fileInfo->isDir()) {
    	echo $fileInfo->getFilename() . "<br>\n";
    } 
    */
}
