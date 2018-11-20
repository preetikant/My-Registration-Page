<!DOCTYPE html>
<html>
<head>
	<title>view page</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body onload="viewStudent();">
		<form>
			<table border="1" id="showData">
				
					<tr>
						<td>
							Name
						</td>
						<td>
							Father_Name
						</td>
						<td>
							Postal_Address
						</td>
					</tr>
				
			</table>
		</form>

						<script type="text/javaScript">
							// we create a function of onloading the page and show json data in html
								function viewStudent(){
										//alert("dfdf");
										var url ="api.php";

											$.ajax({											
												url: url,
										        type: "POST",        
										        data: "action=ViewS",		
												dataType:"json",		
										        success: function(result) 
										        	{
												        	alert("hello");
								   				 	}
							   		 		});
							   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
										<script>
											$(document).ready(function(){
											   	$("#rr").onload(function(){
        													$("table").append("<tr><td>Preeti</td><td>Mr. Rajesh Kumar</td><td>Bareilly</td></tr>");
   																	 });
															});
										</script>
							<table border="1" id="showData">
									<tr>
										<td>
												Name
										</td>
										<td>
												Father_Name
										</td>
										<td>
												Postal_Address
										</td>
									</tr>
				
							</table>
           								 <button id="rr">Append row</button>
						 </script>
		</body>
</html>