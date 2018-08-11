
we tried the code for displaying date using date picker it should display two times in a single page for from and to dates,but it is displaying only for from date and not for to date

<html>
<head>
    <link rel='stylesheet' id='admin-css'  href='admin.css' type='text/css' media='all' />
    <link rel='stylesheet' id='colors-fresh-css'  href='colors-fresh.css' type='text/css' media='all' />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
   
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function(){
	
        $( "#datepicker" ).datepicker();
        $("#icon").click(function() { 
            $("#datepicker").datepicker( "show" );
        })
    });
    </script>
</head>
<body>
    <input type="text" id="datepicker" name='from' size='9' value="" />  
    <img src='images/calender.PNG' id='icon' height='25px' width='25px'/ >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>
