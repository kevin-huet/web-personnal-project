<?php
    include('database_connect.php');
    $link = connect();
    $sql = "CREATE TABLE test1 (
        id INT,
        name VARCHAR(20),
        sizeImage FLOAT)";
    if ($link->query($sql) === TRUE)
        echo "Table created successfully";
    else
        echo $link->error;
    function calc_size($dir) {
        $size = calc_size_Rdir($dir);
        $filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB");
        return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2);
    }
    function calc_size_Rdir($dir_start) {
        $size = 0;
        $open = opendir($dir_start);
        while($file = readdir($open)) {
            if ($file != '.' && $file != '..') {
                if (is_dir($dir_start .'/'.$file)) {
                    $new_dir = $dir_start .'/'.$file;
                    $size = $size + calc_size_Rdir($new_dir);
                }
                else
                    $size = $size + filesize($dir_start .'/'.$file);
            }
        }
        return $size;
    }
    $dir = getcwd();
    $size = calc_size($dir);
    $link->query("INSERT INTO test1 VALUE(NULL, 'upload', $size)");
    echo $size;
    $link->close();
  ?>
