<html>
	<head>
			<title>
				
			</title>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<style>
			body{
				background-image: url(1.jpg);
				padding-top: 10;
				border: groove green 20px;
			}
			#registeration{

			}
	</style>
	<body>
	<div id="registeration">
		<form id="myForm" name="StudentRegistration" method="POST">
			<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center" cellpacing="5">
				<tr>
					<td colspan=2>
						<center><font size=4><b>Student Registration Form</b></font></center> 
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" id="name" size="30" class="form-control clearFields"></td>   <!--- 1id-->
				</tr>
				<tr>
					<td>Father_Name</td>
					<td><input type="text" name="fathername" id="fathername" size="30" class="form-control clearFields"></td>    <!--- 2id-->

				</tr>
				<tr>
					<td>Postal Address</td>
					<td><input type="text" name="paddress" id="paddress" size="30" class="form-control clearFields"></td>	<!--- 3id-->
				</tr><br><br>
				<tr>
				<td colspan="2"><span id="message" style="color: red;">
					
				</span></td>		
				</tr>		
				<tr>
						<td><input type="reset" onclick="submit();"></td>
						<td colspan="2"><input type="button" onclick="validate();" value="Submit Form"/></td>
					</tr>
					<br><br>


					<!--##################################################-->
					<tr>
						<td>
							<a href="http://localhost/online1/viewStudent" >click me</a>
						</td>
					</tr>
					<!--##################################################-->


				</table>
			</form>
		</div>
			<script type="text/javaScript">
			
							function validate()
							{			
												var name=document.getElementById("name").value; 	
												var fathername=document.getElementById("fathername").value;
												var paddress =document.getElementById("paddress").value;	
												var url ="api.php";
									$.ajax
											({
												url: url,
										        type: "POST",        
										        data: "&action=register_enquiry&name="+name+"&fathername="+fathername+"&paddress="+paddress,		
												dataType:"json",		
										        success: function(result) 
										        	{
												        	document.getElementById("myForm").reset();
												        //###################################################################################
												        	if(result.status=="1")
												        		//alert(result.message);
												        	document.getElementById("message").innerHTML=result.message;
												        	else  if(result.status=="0")
												        		document.getElementById("message").innerHTML=result.message;
												        	else  if(result.status=="2")
												        		document.getElementById("message").innerHTML=result.message;

								   				 	}
							   		 		});
							}			
			</script>			
	</body>
</html>	