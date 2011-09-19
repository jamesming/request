<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	
$this->load->view('header/blueprint_css.php');  
$this->load->view('header/common_css.php');  

?>
<style>
	
	
#outer_edge{
	margin-top:20px;
}
#top_banner{
margin:0px 0px 20px 0px;
background:lightgray;	
padding:20px ;
}

#top_banner div.top_part{
font-size:20px;
font-weight:bold;	
}

#top_banner div.bottom_part{
font-size:12px;
}

.row{
	clear:both;	
	padding: 18px 0px 0px 24px
}
.label{
margin:3px 8px 0 0;
font-weight: bold;
}

#outer_edge input{
    padding: 4px;
    border: 1px solid darkgray
}

#outer_edge input[type=submit]{
	padding:5px 8px;
	background:orange;
	color:white;
	border:0px;
}

#outer_edge input.two_in_row{
    width: 303px;
}
#outer_edge input[name=need_to_aprove]{
	width: 681px;
}
#submit_row{
margin:50px 0px 0px 0px;	
}
</style>
</head>

<html>

<body>


<form 
	action='<?php echo base_url()    ?>index.php/forms/update'
	method='post'	
>	
<!--  				
  				<input name="table"  type="hidden" value="digital">
  				<input name="method"  type="hidden" value="update_digital">
-->
<div  id='outer_edge'  class='container  rounded_bg' >
	<div class="top">
		<div class="sub_top">&nbsp;</div>
	</div>
  <div class="middle">	
  	
  	
  	
  	<div  id='top_banner' class='row ' >
  		
  		
  		<div  class='top_part ' >
  			Creative Request Form - Digital
  		</div>
  		<div  class='bottom_part ' >
  			Please full out the form in it's entirety.  Please submit all forms 1-2 weeks in advance of delivery date.
  		</div>
  		
  	</div>
  	
  	
  	<div  class='row ' >
  		
		  	<div  class='column span-8 '    >
		  		
									<div class='float_left label' >Submission Date
									</div>
									
										<input name="submission_date"  type="text" value=""  >
									
		  		
		  		
		  	</div>
		  	
		  	<div  class='column span-8 '   >
		  		
									<div class='float_left label' >Project lead
									</div>
									
										<input name="duedate" type="text" value=""  >
									
		  		
		  	</div>
		  	
		  	<div  class='column span-7 last'   >
		  		
									<div class='float_left label' >Stand in contact
									</div>
									
										<input name="department"  type="text" value=""  >
									
		  		
		  	</div>  		
  		
  	</div>

  	<div  class='row ' >
  		
		  	<div  class='column span-11 '    >
		  		
									<div class='float_left label' >Submission Date
									</div>
									
										<input  class='two_in_row ' name="project_lead"  type="text" value=""  >
									
		  		
		  		
		  	</div>

		  	<div  class='column span-12 second_column'   >
		  		
									<div class='float_left label'   style='margin-left:72px'  >Project lead
									</div>
		  		
									
										<input  class='two_in_row ' name="stand_in_contact" type="text" value=""     >
											  		

		  		
		  	</div>
		  	
		
  		
  	</div>
  	
  	
  	<div  class='row ' >
  		
		  	<div  class='column span-24 '    >
		  		
									<div class='float_left label' >Who needs to approve this? (list all)
									</div>
									
										<input name="need_to_aprove"  type="text" value=""  >
								
		  		
		  		
		  	</div>

		
  		
  	</div>	
					
		<div  id='submit_row' class='clearfix row'  >	
			
			<input  class='rounded_border '  type="submit" value="submit">
			
		</div>

	</div>
	<div class="bottom"><div class="sub_bottom">&nbsp;</div></div>
</div>	
	
</form>
</body>
</html>

<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" language="Javascript">
	
	
	
	$(document).ready(function() {
			$('.middle').height(
			 $(window).height() -100
			);

			$('input:not(input[type="submit"])').val('test');		

  });
    

</script>
