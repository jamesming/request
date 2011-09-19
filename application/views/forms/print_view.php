<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	
$this->load->view('header/blueprint_css.php');  
$this->load->view('header/common_css.php');  

?>
<style>
#outer_edge div td input[type=text]{
margin-bottom:5px;	
}
#outer_edge div#row6 td input[name=size]{
		width:468px
}
#outer_edge div#row7 td input[name=size2]{
		width:622px
}
#outer_edge div#row8 td input[name=size3]{
    margin-right: 15px;
    width: 153px;
}
#outer_edge div#row9 td {
border:1px dotted;	
}
#outer_edge div#row9 td input[name=publication]{
    width: 585px;
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
  	
<?php     

$this->load->view('forms/top_section.php');
?>

  	
  	<div   id='row6' class='row ' >
  		<div  class=' label' >Deliverable:
  		</div>
  		<div  class='bottom_part ' >
  			
  			
  			<table>

  				
  				<tr>
  					<td colspan=2>Event
  					</td>
  					<td>
  					</td>
  					<td>Digital Invite
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Step and Repeat
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Poster
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Flyer
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Roll Up Banner
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  				</tr>
 
  				<tr>
  					<td colspan=2>
  					</td>
  					<td>
  					</td>
  					<td>Print Invite
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Size
  					</td>
  					<td colspan='7'><input name="size" id="" type="text" value="">
  					</td>
  				</tr>		
  			</table>
  			
  		</div>
  		
  	</div>	
  	
  	
  	<div   id='row7' class='row ' >

  		<div  class='bottom_part ' >
  			
  			
  			<table>

  				
  				<tr>
  					<td colspan=2>Mailer
  					</td>
  					<td>
  					</td>
  					<td>DVD Label
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>DVD Insert
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Folder
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Premium
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Mailing Label
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  				</tr>
 
  				<tr>
  					<td colspan=2>
  					</td>
  					<td>
  					</td>
  					<td>Size
  					</td>
  					<td colspan='9'><input name="size2" id="" type="text" value="">
  					</td>
  				</tr>		
  			</table>
  			
  		</div>
  		
  	</div>	
  		
  		
  	<div   id='row8' class='row ' >

  		<div  class='bottom_part ' >
  			
  			
  			<table>

  				
  				<tr>
  					<td colspan=2>Digital
  					</td>
  					<td>
  					</td>
  					<td>RSVP Page
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Online Banner
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Media Kit
  					</td>
  					<td><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>Size
  					</td>
  					<td colspan=3><input name="size3" id="" type="text" value="">
  					</td>
  				</tr>
 
  				
  			</table>
  			
  		</div>
  		
  	</div>	
  	
  	
  	
 	
  	<div   id='row9' class='row ' >

  		<div  class='bottom_part ' >
  			
  			
  			<table>
  				<tr>
  					<td colspan=2>Ads
  					</td>
  					<td>
  					</td>
  					<td>Publication
  					</td>
  					<td colspan='10'><input name="size2" id="" type="text" value="">
  					</td>
  				</tr>			
  				<tr>
  					<td colspan=2>
  					</td>
  					<td>
  					</td>
  					<td>Issue Date
  					</td>
  					<td colspan=3><input name="" id="" type="text" value="">
  					</td>
  					
  					<td>Placement
  					</td>
  					<td colspan=6><input name="" id="" type="text" value="">
  					</td>
  					
  				</tr>
 
  				<tr>
  					<td colspan=2>
  					</td>
  					<td>
  					</td>
  					<td>Size
  					</td>
  					<td colspan=3><input name="" id="" type="text" value="">
  					</td>
  					
  					<td>Color:B&W
  					</td>
  					<td colspan=4><input name="" id="" type="checkbox" value="">
  					</td>
  					<td>4 Color
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
			
			

			
			$('#outer_edge div#row6 td:nth-child(even),#outer_edge div#row7 td:nth-child(even),#outer_edge div#row8 td:nth-child(even),#outer_edge div#row9 td:nth-child(even)').css({
				width:'32px'
			})			
			
			$('#outer_edge div#row6 td:nth-child(odd),#outer_edge div#row7 td:nth-child(odd),#outer_edge div#row8 td:nth-child(odd),#outer_edge div#row9 td:nth-child(odd)').css({
				width:'118px'
			})		
			

			
					

  });
    

</script>
