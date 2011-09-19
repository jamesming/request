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
  	
<?php     

$this->load->view('forms/top_section.php');
?>

  	
  	
  	<div   id='row6' class='row ' >
  		<div  class=' label' >What is it:
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
  	
			
			
			
  	<div   id='row7' class='row ' >
  		<div  class=' label' >Where is it going live:
  		</div>
  		<div  class='bottom_part ' >
  			
  			
  			<table>
 					<tr>
  					<td >SITV.COM
  					</td>
  					<td>
  					</td>
  					<td>Show Pg
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Video
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Contest
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>
  					</td>
  					<td>
  					</td>
  				</tr>



 					<tr>
  					<td>
  					</td>
  					<td>
  					</td>
  					<td>Get Si TV
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Movies
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Schedule
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>
  					</td>
  					<td>
  					</td>
  				</tr>



   				<tr>


  					<td colspan=2>Partner Sites, if so which?
  					</td>
  					<td colspan='8'><input name="partner_sites" id="" type="text" value="">
  					</td>
  										
  				</tr>   
  						
   				<tr>


  					<td colspan=2>Please Provide URL?
  					</td>
  					<td colspan='8'><input name="partner_url" id="" type="text" value="">
  					</td>
  										
  				</tr>   		
  			</table>
  			
  		</div>
  		
  	</div>
  	
			
  	<div   id='row8' class='row ' >
  		<div  class=' label' >Site Requirements:
  		</div>
  		<div  class='bottom_part ' >
  			
  			
  			<table>

  				
  				<tr>
  					<td>HP
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>SH
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>CT
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>INT
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Play
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Share
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  				</tr>
 
  				
  			</table>
  			
  		</div>
  		
  	</div>	
  	
  	
  	
  	
  	
  	<div  class='row  ' >
  		
  		<div  class='label' >
  			Logo(s)/Images required.&nbsp;&nbsp;Please attach to request.&nbsp;&nbsp;Indicate placement as appropiate.  Original EPS or AI, 300 DPI is preferred.
  		</div>
  		
  		<div   >
  			<textarea name='logos'></textarea>
  		</div>
  		
  	</div>
  	
  	
  	
  	<div  class='row  ' >
  		
  		<div  class='label' >
  			Copy - Please be sure that copy is approved and final before submitting request.&nbsp;&nbsp;If you need a copywriter to supply copy, please provide 2 weeks advance notice and bullets/goals.&nbsp;&nbsp; Please also specify any necessary FRONT vs. BACK side commitments we should b
  		</div>
  		
  		<div   >
  			<textarea name='copy'></textarea>
  		</div>
  		
  	</div>
  		
  	
  	<div  class='row  ' >
  		
  		<div  class='label' >
  			Additional notes/direction
  		</div>
  		
  		<div   >
  			<textarea name='copy'></textarea>
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
			
			$('#outer_edge div td:nth-child(odd)').css({
				'text-align':'right',
				'padding-right':'5px',
				'padding-top':'4px'
			})
			
			
			$('#outer_edge div#row6 td:nth-child(even), #outer_edge div#row7 td:nth-child(even)').css({
				width:'28px'
			})			
			
			$('#outer_edge div#row6 td:nth-child(odd), #outer_edge div#row7 td:nth-child(odd)').css({
				width:'142px'
			})
			
			
			
			$('#outer_edge div#row8 td:nth-child(even)').css({
				width:'32px'
			})			
			
			$('#outer_edge div#row8 td:nth-child(odd)').css({
				width:'118px'
			})				

  });
    

</script>
