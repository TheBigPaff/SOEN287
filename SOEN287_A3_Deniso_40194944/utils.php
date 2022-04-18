<?php 
function get_contents($filename){
    $myfile = fopen($filename, "r");
    $content = fread($myfile,filesize($filename));
    fclose($myfile);
    return explode("\\|", $content);
}

function getHome(){
    $filename = "../index.txt";
    $contents = ["", ""];
    if(file_exists($filename)){
        $contents = get_contents($filename);
    }

    return $contents;
}

function getResume(){
    $filename = "../resume.txt";
    $contents = ["","","","",""];
    if(file_exists($filename)){
        $contents = get_contents($filename);
    }

    return $contents;
}

function getProjects(){
    $filename = "../projects.txt";
    $contents = [""];
    if(file_exists($filename)){
        $contents = get_contents($filename);
    }

    return $contents;
}

function getSocial(){
    $filename = "../social.txt";
    $contents = ["","","",];
    if(file_exists($filename)){
        $contents = get_contents($filename);
    }

    return $contents;
}
?>