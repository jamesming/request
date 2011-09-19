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
