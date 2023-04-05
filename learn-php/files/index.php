<?php

    // $pharases = readfile('content.txt');
    // echo $pharases;

    // $file = "content.txt";

    // if(file_exists($file)) {

    //     $handle = fopen($file, 'a+');

        //echo fread($handle, filesize($file));

        //read a sinle line
        //echo fgets($handle);
        
        // while(!feof($handle)) {
        //     echo fgets($handle);
        // }

        //echo fgetc($handle);

        // fwrite($handle, "\nTop of Courses.");

        // fclose($handle);

        // //read file
        // echo readfile($file);

        // //size of file
        // echo filesize($file);
        // echo '<br />';
        // //absulte path
        // echo realpath($file);

        // //copy file
        // copy($file, 'data.txt');

        // // rename file
        // rename('data.txt', 'my_file.txt');

        // //delete file
        // unlink('my_file.txt');


    // }else {
    //     echo "file does not exist !";
    // }


    // mkdir('storage');

    // touch('storage/index.txt');
    
    unlink('storage/index.txt');
    rmdir('storage');
?>