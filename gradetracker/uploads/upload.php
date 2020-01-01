<?php
    $project = $_POST['project'];
    $student_name = trim($_POST['student_name']);
    $student_name = ucwords($student_name);
    $student_name = str_replace(" ", "-", $student_name);
	$rand = substr(md5(time()),0,4);
    $question = $_POST['question'];

	function getext($img){
		$name = strtolower($img);
		$data = explode(".", $name);
		$ext = count($data) -1;
		return $data[$ext];
	}

    if ($question == '4') {
        if(isset($_FILES)){
            $allowed = array('zip','pdf','jpg','jpeg','tif','tiff','png','ai','psd','sketch','xd');
            $ext = getext($_FILES['file1']['name']);
            $size = $_FILES['file1']['size'];
            if(in_array($ext, $allowed)){
                if($size < 41943040){
                    $name = $_FILES['file1']['name'];
                    //$name = $rand.".".$name;
                    //$name = $name;
                    $name = pathinfo($name, PATHINFO_FILENAME).".".substr(md5(time()),0,4).".".$ext;
                    if(move_uploaded_file($_FILES['file1']['tmp_name'], $name)){
                        echo "<span class=\"alert-green\">Your file has been uploaded.</span>";
                    }else{
                        echo "<span class=\"alert-red\">Upload error, please try again.</span>";
                    }
                }else{
                    echo "<span class=\"alert-red\">Files must be under 40MB.</span>";
                }
            }else{
                echo "<span class=\"alert-red\">File type not selected or supported.</span>";
            }
        }else{
            echo "not";
        }
        
    }else{
        echo "<span class=\"alert-red\">2 + 2 is not &#8220;".$question."&#8221;</span>";
    }
?>