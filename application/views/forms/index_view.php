<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	
$this->load->view('header/blueprint_css.php');  
$this->load->view('header/common_css.php');  

?>

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

  	<div id='row2' class='row '  >
  		
		  	<div  class='column span-11 '    >
		  		
									<div class='float_left label' >Project lead
									</div>
									
										<input  name="project_lead"  type="text" value=""  >
									
		  		
		  		
		  	</div>

		  	<div  class='column span-12 second_column'   >
		  		
									<div class='float_left label'   style='margin-left:72px'  >Project lead
									</div>
		  		
									
										<input  name="stand_in_contact" type="text" value=""     >
											  		

		  		
		  	</div>
		  	
		
  		
  	</div>
  	
  	
  	<div  class='row ' >
  		
		  	<div  class='column span-24 '    >
		  		
									<div class='float_left label' >Who needs to approve this? (list all)
									</div>
									
										<input name="need_to_aprove"  type="text" value=""  >
								
		  		
		  		
		  	</div>

		
  		
  	</div>	
  	
  	
  	<div id='row4' class='row ' >
  		
		  	<div  class='column span-11 '    >
		  		
									<div class='float_left label' >Project Name
									</div>
									
										<input  class='two_in_row ' name="project_name"  type="text" value=""  >
									
		  		
		  		
		  	</div>

		  	<div  class='column span-12 second_column'   >
		  		
									<div class='float_left label'   style='margin-left:72px'  >Headline
									</div>
		  		
									
										<input  class='two_in_row ' name="headline" type="text" value=""     >
											  		

		  		
		  	</div>
		  	
		
  		
  	</div>
  	
  	
  	<div  id='row5' class='row  ' >
  		
  		<div  class='label' >
  			Who's the audience?  What's the objective?
  		</div>
  		
  		<div   >
  			<textarea name='audience_objective'></textarea>
  		</div>
  		
  	</div>
  	
  	
  	<div   id='row6' class='row ' >
  		<div  class=' label' >What is it?
  		</div>
  		<div  class='bottom_part ' >
  			
  			
  			<table>
  				
   				<tr>
  					<td>Banner
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>What Size?
  					</td>
  					<td colspan='7'><input name="whatsize" id="" type="text" value="">
  					</td>
  										
  				</tr>   		
  				
  				
  				
  				<tr>
  					<td>Feature Image
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>HP
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>SH
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Interactive Quiz
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Blog Image
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  				</tr>
  				<tr>
  					<td>Episode Summary Page
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Host/Judge Pg.
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Cast Pg.
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Profile Pg.
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Photo Slideshow
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  				</tr>  		
  				
   				<tr>
  					<td>About
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>RSVP Page
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Media Kit
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Size
  					</td>
  					<td colspan='3'>
  						<input name="size" id="" type="" value="">
  					</td>  					
  				</tr>   				
  				
  				<tr>
  					<td>Interactive
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Quiz
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Game
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td colspan='4'>
  					</td>
  				</tr>  
  				
  				
   				<tr>
  					<td>Other (Please Specify)
  					</td>
  					<td colspan='9'><input name="other" id="" type="text" value="">
  					</td>
  										
  				</tr>   
  						
  				
  			</table>
  			
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

			$('input:not(input[type="submit"])').val('test');		
			
			
			$('#outer_edge div#row6 td:nth-child(even)').css({
				width:'28px'
			})
			
			$('#outer_edge div#row6 td:nth-child(odd)').css({
				'text-align':'right',
				'padding-right':'5px',
				width:'142px',
				'padding-top':'4px'
			})
			

  });
    

</script>
