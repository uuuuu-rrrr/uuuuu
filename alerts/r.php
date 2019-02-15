<html>
<head>
	<title>Redirect..</title>
</head>
<body>
demo
<script type="text/javascript">

function ro() {
		window.location.reload();
		//window.top.res();
		
		parent.postMessage("res","*");
	}
	
function s() {
		window.location.reload();
	}


window.addEventListener('message', function(event) {
											
      //alert(`Received ${event.data} from ${event.origin}`);
	  
	  
	  if(event.data=="res2") {
		  
		  s()
	  }
	  
	   if(event.data=="roload") {
		  
		  ro()
	  }
  
    });

   parent.postMessage("res2","*");

	//window.top.res2();
</script>
</body>
</html>
