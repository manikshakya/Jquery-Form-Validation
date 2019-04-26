<?php
	
	if(isset($_POST['hit'])){
		echo 'hi';
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title> Affiliate Website</title>
	<meta charset = "utf-8" />
	<script src = "jquery-1.11.2.js"></script>
	<script type="text/javascript" src="jquery.validate.js"></script>
</head>
<style type="text/css">
	#myForm{
		width: 620px;
	}
	#signupForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
	}

	/**********************************

	Use: cmxform template

	***********************************/
	form.cmxform fieldset {
		margin-bottom: 10px;
	}

	form.cmxform legend {
		padding: 0 2px;
		font-weight: bold;
		_margin: 0 -7px; /* IE Win */
	}

	form.cmxform label {
		display: inline-block;
		line-height: 1.8;
		vertical-align: top;
		cursor: hand;
	}

	form.cmxform fieldset p {
		list-style: none;
		padding: 5px;
		margin: 0;
	}

	form.cmxform fieldset fieldset {
		border: none;
		margin: 3px 0 0;
	}

	form.cmxform fieldset fieldset legend {
		padding: 0 0 5px;
		font-weight: normal;
	}

	form.cmxform fieldset fieldset label {
		display: block;
		width: auto;
	}

	form.cmxform label { width: 150px; } /* Width of labels */
	form.cmxform fieldset fieldset label { margin-left: 103px; } /* Width plus 3 (html space) */
	form.cmxform label.error {
		margin-left: 103px;
		width: 220px;
	}

	form.cmxform input.submit {
		margin-left: 103px;
	}

	/*\*//*/ form.cmxform legend { display: inline-block; } /* IE Mac legend fix */

	/**********************************

	Name: cmxform Styles

	***********************************/
	form.cmxform {
		width: 370px;
		font-size: 1.0em;
		color: #333;
	}

	form.cmxform legend {
		padding-left: 0;
	}

	form.cmxform legend, form.cmxform label {
		color: #333;
	}

	form.cmxform fieldset {
		border: none;
		border-top: 1px solid #C9DCA6;
		background: url(../images/cmxform-fieldset.gif) left bottom repeat-x;
		background-color: #F8FDEF;
	}

	form.cmxform fieldset p, form.cmxform fieldset fieldset {
		padding: 5px 10px 7px;
		background: url(../images/cmxform-divider.gif) left bottom repeat-x;
	}

	form.cmxform label.error, label.error {
		/* remove the next line when you have trouble in IE6 with labels in list */
		color: red;
		font-style: italic;
		margin-left: 5px;
	}
	div.error { display: none; }
	input, select {	
		border: 1px solid black;
		width: 180px;
	}
	input.checkbox { border: none; }
	input:focus { border: 1px dotted black; }
	input.error { border: 1px dotted red; }
	form.cmxform .gray * { color: gray; }

	#terms{
		width: 15px;
		float: left;
	}
	#forterms{
		width: 320px;
		font-size: 13px;
	}
	#submit{
		border: none;
		width: 144px;
		clear: both;
	}
	

</style>

<body>
	<form id="myForm" class="cmxform" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<fieldset>
			<p>
				<label for="username"> Username: </label>
				<input type="text" name="username" id="username" /><br/>
			</p>
			<p> 
				<label for="password"> Password: </label>
				<input type="password" name="password" id="password" /><br/>
			</p>
			<p> 
				<label for="repassword"> Retype Password: </label>
				<input type="password" name="repassword" id="repassword" /><br/>
			</p>
			<p> 
				<label for="firstname"> Firstname: </label>
				<input type="text" name="firstname" id="firstname" /><br/>
			</p>
			<p> 
				<label for="lastname"> Lastname: </label>
				<input type="text" name="lastname" id="lastname" /><br/>
			</p>
			<p> 
				<label for="email"> Email: </label>
				<input type="text" name="email" id="email" /><br/>
			</p>
			<p>
				<label for="date"> Date of Birth: </label>
				<input type="text" name="date" id="date" />
			</p>
			<p>
				<label for="terms" id="forterms"> By clicking Sign Up, you agree to our Terms and Conditions. </label>
				<input type="checkbox" name="terms" id="terms" value="terms" />
			</p>
			<p>
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="TTLGKPNU7P43Q">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" id="submit" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</p>

		</fieldset>	
	</form>

	<div id="1"></div>
	<div id="2"></div>
	
	<script type="text/javascript">
		
		$(document).ready(function(){
			 
			$('#myForm').validate({
				rules: {
					username: {
						required: true,
						minlength: 6
					},
					password: {
						required: true,
						minlength: 8
					},
					repassword: {
						required: true,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					firstname: {
						required: true
					},
					lastname: {
						required: true
					},
					countries: {
						required: true
					},
					date: {
						required: true
					},
					terms: {
						required: true
					}
				},

				messages: {
					username: {
						required: "Please enter your username.",
						minlength: "Atleast 6 characters"
					},
					password: {
						required: "Please enter a password",
						minlength: "Atleast 8 characters"
					},
					repassword: {
						required: "Retype your password",
						equalTo: "Password do not match"
					},
					email: {
						email: "Please enter a valid email"
					},
					firstname: {
						required: "Enter your firstname"
					},
					lastname: {
						required: "Enter your lastname"
					},
					countries: {
						required: "Select your Country"
					},
					date: {
						required: "Enter your Date of Birth"
					},
					terms: {
						required: "Please agree to our Terms and Condition"
					}
				}
			});
		});
	</script>


</body>
</html>




