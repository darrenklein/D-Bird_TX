<?php

session_start();

$_SESSION['credential'] = "***";
$_SESSION['password'] = $_POST['password'];

if ($_SESSION['password'] == $_SESSION['credential']){
    echo "<head>
	<script src='http://code.jquery.com/jquery-2.1.0.min.js'></script>
	<!--DATEPICKER-->
    	<link rel='stylesheet' href='http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css'>
    	<script src='http://code.jquery.com/ui/1.10.4/jquery-ui.js'></script>
    </head>
    
    <body>
    
    <div id='top_bar' style='width: 100%'>
        <strong style='float: left; width: 75%'>D-Bird Texas - Administrator Access</strong>
        <a href='log_out.php' style='float: left; width: 25%'>Log out</a>
    </div>

    <div>
        Define search parameters to view and download data
        <ul>
            <li>Click 'Submit' to view all records</li>
            <li>Optional - Select start and end dates to view a specific date range</li>
        </ul>
    </div>

    <form action='data.php' name='admin_form' method='post'>
        
        
        	<label for='start_date'>Start date</label></br>
       	        <input type='text' class='datefield' id='start_date' name='start_date' /></p>
       	        <label for='end_date'>End date</label></br>
            	<input type='text' class='datefield' id='end_date' name='end_date' /></p>
        
                <input type='submit' id='submit' value='Submit' />
    </form>
    
    <script>
       	$(function() {
            $('.datefield').datepicker({maxDate: '+0D' , dateFormat: 'yy-mm-dd' });
        });
        
        $('#submit').click(function(){
        	var start_date = document.forms['admin_form']['start_date'].value;
        	var end_date = document.forms['admin_form']['end_date'].value;
        	
        	if(start_date != '' && end_date == ''){
        		alert('Please select an end date.');
        		return false;
        	};
            
            if(start_date > end_date){
                alert('Start date cannot be later than end date');
                return false;
            };
        });
    </script>
</body>";
}
else{
    /*LOOPS BACK TO LOG_IN IF ANYONE ATTEMPTS TO ACCESS ADMIN/PHP DIRECTLY... AND ON INCORRECT PASSWORDS, OF COURSE*/
    header("Location: log_in.php");
}

?>