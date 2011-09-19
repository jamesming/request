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
</style>
</head>

<html>

<body>


<div  id='outer_edge'  class='container  rounded_bg' >
	<div class="top">
		<div class="sub_top">&nbsp;</div>
	</div>
  <div class="middle">	
  	
  	
  				<form 
  					action='<?php echo base_url()    ?>index.php/forms/update'
  					method='post'	
  				>	
  				
<!--  				
  				<input name="table"  type="hidden" value="digital">
  				<input name="method"  type="hidden" value="update_digital">
-->
  				
					<div  class='clearfix ' >
							<div class='float_left' >Submission Date
							</div>
							<div  class='float_left input_background input_150 ' >
								<input name="submission_date"  type="text" value=""  >
							</div>
					</div>
					
					
					<div  class='clearfix ' >
							<div class='float_left' >Project lead
							</div>
							<div  class='float_left input_background input_150 ' >
								<input name="project_lead" type="text" value=""  >
							</div>
					</div>  	
					  	
					<div  class='clearfix ' >
							<div class='float_left' >Stand in contact
							</div>
							<div  class='float_left input_background input_150 ' >
								<input name="stand_in_contact"  type="text" value=""  >
							</div>
					</div>  
					
					<div  class='clearfix '  >	
						
						<input type="submit" value="submit">
					</div>

	</div>
	<div class="bottom"><div class="sub_bottom">&nbsp;</div></div>
</div>	
	

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
