<?php

	class q2a_contact_page 
	{
		
		var $directory;
		var $urltoroot;
		
		function load_module($directory, $urltoroot)
		{
			$this->directory=$directory;
			$this->urltoroot=$urltoroot;
		}
		
		// for display in admin interface under admin/pages
		function suggest_requests() 
		{	
			return array(
				array(
					'title' => 'Contact', // title of page
					'request' => 'contact', // request name
					'nav' => 'M', // 'M'=main, 'F'=footer, 'B'=before main, 'O'=opposite main, null=none
				),
			);
		}
		
		
		// for url query
		function match_request($request)
		{
			if ($request=='contact')
			{
				return true;
			}

			return false;
		}
		
		
		function process_request($request)
		{
			
			$qa_content = qa_content_prepare();
			$qa_content['custom'] = '';
		
		
		$qa_content['title'] = 'Contact';
			
			$qa_content['custom'] .= '
			
			<div class="wrap-contact-form">
					
				<form action="" method="post">

<label>User name:</label>
<input type="text" name="name" placeholder="" required>

<label>Email Id: </label>
<input type="text" name="email" placeholder="" required>

<label>Mobile No: </label>
<input type="number" name="number" placeholder="" required>

<label> Contacting Reason:</label>
<select type="reason" name="rsason">
<option>Technical</option>
<option>Payment</option>
<option>Account Blocked</option>
</select>

<label>Your Message: </label>
<input type="message" name="message" placeholder="" required>

<input id="submit" name="submit" type="submit" value="Send Message">
</form>			
	</div> <!-- wrap-contact-form -->
			';
			
			$qa_content['custom'] .= '
				<style type="text/css">
				<style>
a{ color:#2D3E52
} label {
display:block;
margin-top:20px;
}
textarea {
width:100%;
height:150px;
background:#efefef;
border:1px solid #dedede;
padding:10px;
margin-top:3px;
font-size:0.9em;
color:#3a3a3a;
-moz-border-radius:5px;
-webkit-border-radius:5px;
border-radius:5px;
} 
input,select{
width:100%;
height:35px;
background:#efefef;
border:1px solid #dedede;
padding:10px;
margin-top:3px;
font-size:0.9em;
color:#3a3a3a;
-moz-border-radius:5px;
-webkit-border-radius:5px;
border-radius:5px;
}
input:focus, textarea:focus {
border:1px solid #97d6eb;
}
#submit {
width:100%;
height:38px;
border:none;
margin-top:20px;
cursor:pointer;color:white;
background:#0000ff
}

#submit:hover {
opacity:.9;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				</style>
			';
			
			return $qa_content;

		
		
		}
		
		
		
	};
	
/*
	Omit PHP closing tag to help avoid accidental output
*/	
