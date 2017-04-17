<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
	
	<div id="hi">
		testing please work <br>
	</div>
	
	</body>
</html>



<?php
	 $dom = new DOMDocument();
        $dom->load("domtry.html");

        $divs = $dom->getElementsByTagName('div');
		$value = $divs->nodeValue;
		echo $value;
?>