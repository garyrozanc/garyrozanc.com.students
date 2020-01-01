<!DOCTYPE html>
<html>

	<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gary Rozanc Teaching Blog</title>
  <meta name="description" content="Gary is an Assistant Professor at the University of Maryland, Baltimore County. While Gary loves all things design, he specializes in teaching responsive web and user experience design.
">

  <!--<link rel="stylesheet" href="https://garyrozanc.com//students/css/main.css">-->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="canonical" href="https://garyrozanc.com//students/dashboard/uploads/index.php">
  <link rel="alternate" type="application/rss+xml" title="Gary Rozanc Teaching Blog" href="https://garyrozanc.com//students/feed.xml">
</head>

	
	<body id="top">
		
		<div class="wrap">
			<div class="upload">	
		<div class="upload-wrap">	
			<form action="upload.php" method="post" enctype="multipart/form-data" id="form">
				
				<!--
			    <input type="text" name="student_name" id="student_name" class="form-text-input" placeholder="Full Name">
			    -->
			    
			    <!--
		        <select name="project" id="project" class="form-select-area-drop">
		            <option value="" disabled selected>Select Homework or Project</option>
		            <option value="art336-web-dev">Art 336 Web Development Tools</option>
		            <option value="art336-hosting">Art 336 Web Hosting & Domain Name</option>
		            <option value="art336-layouts-part-1">Art 336 Tracing Layouts</option>
		            <option value="art336-final-project">Art 336 Final Project</option>
		        </select>  
				-->
				
			    <input id="uploadFile" placeholder="No File Selected" disabled="disabled" class="form-input-file-name">
			    
			    <div class="form-input-file-button">
			        <span>Select</span>
			        <input type="file" name="file1" id="file1" class="upload form-file-select">
			    </div>
			    
			    <script>
			        document.getElementById("file1").onchange = function () {
			            document.getElementById("uploadFile").value = this.value;
			        };
			    </script>
			
			    <input type="text" name="question" id="question" class="form-text-input" placeholder="What is 2 + 2?" autocomplete="off">
			
			    <input type="submit" name="submit" id="submit" class="upload-btn" value="Upload">
			
			    <div class="progress-container">
			        <div id="progressbar">
				        <div id="progress" style="width:0px;">UPLOAD</div>
				        <div id="status"></div>
			        </div>
			    </div>
			
			</form>
		</div>
		
		<script type="text/javascript">
		    var ajax = new XMLHttpRequest();
		    function $(id){
		        return document.getElementById(id);
		    }
		    function upload(e){
		        e.preventDefault();
		
		        //var student_name = $("student_name").value;
		        //var project = $("project").value;
		        var question = $("question").value;
		        var file = $("file1").files[0];
		
		        var formdata = new FormData();
		        //formdata.append('student_name', student_name);
		        //formdata.append('project', project);
		        formdata.append('question', question);
		        formdata.append('file1', file);
		
		        ajax.upload.addEventListener('progress', progressHandler, false);
		        ajax.addEventListener('load', completeHandler, false);
		        ajax.addEventListener('abort', abortHandler, false);
		        ajax.addEventListener('error', errorHandler, false);
		       	ajax.open('POST', 'upload.php');
		        ajax.send(formdata);
		    }
		
		    function progressHandler(e){
		        var percent = (e.loaded / e.total) * 100;
		        percent = Math.round(percent);
		        $('progress').style.width = Math.round(percent)+'%';
		        $('status').innerHTML = percent + '% Uploaded.';
		    }
		    function completeHandler(){
		        $('status').innerHTML = ajax.responseText;
		        $('progress').style.width = '0%';
		    }
		
		    function abortHandler(){
		        alert('File upload aborted.');
		    }
		
		    function errorHandler(){
		        alert('Upload error. Try again.');
		    }
		    $('form').addEventListener('submit', upload, false);
		</script>
	
	</div>
		
		
		</div>
		
		<!--<script src="https://garyrozanc.com//students/js/plugins.js"></script>-->
		<script src="../js/plugins.js"></script>
		
		<script>
			// Change URL
			var origin = localStorage.getItem('origin');
			var a = document.getElementById('origin');
			if (a) {
				a.href = origin;
			}
		</script>
	
	</body>

</html>
