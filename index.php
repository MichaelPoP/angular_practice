<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Leadquizzes | Custom Client Quizzes</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .headline {
            
        }
        .dir {
            font-size: 20px;
            margin: 7px 0px 7px 0px;
            border:1.5px solid #AAC8FF;
            border-radius: 2px;
            padding:4px;
        }
        .dir:hover {
            background-color: #B4D3F9;
        }
        .list {
            height: 600px;
            overflow-y:auto;

        }

    </style>
</head>
<body>
    <center>
	<h1 class="headline">--- ALL ANGULAR APPS ---</h1>
    <div class="col-md-4">

    </div>
    <div class="list col-md-4">

    <?php 

	    $dir = '.';

	    $files = scandir($dir, 0);
	    foreach ($files as $value) {
	        if (is_dir($value) === TRUE){

	            echo "<a  class='dir glyphicon glyphicon-folder-close' href=./" . $value . ">  " . $value . "</a><br>";

	        } else {

	            echo "<a  class='dir glyphicon glyphicon-file' href=./" . $value . ">  " . $value . "</a><br>";

	        }
	        // print_r($value);
	        
	    }
	    // echo $files;

    ?>
    </div>
    <div class="col-md-4"></div>
	</center>
    <div class="col-lg-12">
        <span>Have questions about this webpage email me <a href="mailto:mike@yazamo.com">mike@yazamo.com</a></span>
    </div>
</body>

<script type="text/javascript">
        // function returnwasset(){
        //     alert('return sent');
        //     $.ajax({
        //         type: "POST",
        //         url: "directories.php",
        //         data: $value,
        //         success: function(data){
        //         	alert(data);
        //             //echo what the server sent back...
        //         }
        //     });
        // }
        // returnwasset();
    </script>
</html>
