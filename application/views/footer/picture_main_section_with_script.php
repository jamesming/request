<style>
#picture_div{
	background:#F8F6F6;
	
	<?php if( isset($website_data['picture'][0]->id)  ){?>
		
  background-image: url(<?php echo base_url();    ?>uploads/pictures/<?php  echo $website_data['user_id']   ?>/<?php echo $website_data['picture'][0]->id; ?>/image.png);
 
	<?php } ?>
 
  
  background-repeat: no-repeat;
  width: 406px;
  height: 270px;
  margin-right: 10px;
  border:1px dashed gray;
  text-align:center;
  padding:110px 0px 0px 0px;
  font-weight:bold;
  font-size:30px;
  color:darkgray;
  margin:20px 150px;
}

#click_to_upload{
display:none;
width:150px;	
margin:0px auto 0px auto;
background:white;
filter:alpha(opacity=50);    /* ie  */
-moz-opacity:0.50;    /* old mozilla browser like netscape  */
-khtml-opacity: 0.50;    /* for really really old safari */
opacity: 0.50;    /* css standard, currently it works in most modern browsers like firefox,  */
}

#dialog{
display:none;	
}
		#dialog table#submit_jcrop_table{
			margin:14px; display:none
		}
		
				#dialog div#submit{
						text-align:center;
						font-size:18px;
						background:orange;
						color:white;
						width:100px
				}
				
		#dialog iframe#iframe_src_for_image{
			padding: 5px; 
			border: 1px solid lightgray;
			width:350px;
			height:50px;
			margin-top:13px;
			margin-left:5px;
		}	
		
		
</style>															
<div id="dialog" title="Upload Picture"     > 

		<table id='submit_jcrop_table' width='100%'    >
			<tr>
				<td width='55%' align=right>Crop image then&nbsp;&nbsp;</td>
				<td>
					<div id='submit' class='rounded_border cursor_pointer'    >
						submit
					</div>	
				</td>
			</tr>
		</table>

		<iframe id="iframe_src_for_image" frameborder="0" scrolling=no src=""  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>			


</div>




<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	
				$('#submit').click(function(event) {  // THIS IS FOR SUBMITTING JCROP
					document.getElementsByTagName('iframe')[0].contentWindow.submitCropForm();
				});

				$('#picture_div').css({cursor:'pointer'}).click(function(event) {
					open_dialogue_upload_image(
					 $(this).attr('picture_id')
					);
				})
				
				
		<?php if( count($website_data['picture']) == 0 ){?>
			
			.children().show().html('Click to Upload Picture')
					
		<?php }else{?>
			
			.mouseover(function() {
					$(this).children().show();
			}).mouseout(function(){
					$(this).children().hide();
			}).children().html('Click to Change Picture')
			
			
		<?php } ?>


});		




function open_dialogue_upload_image( picture_id){


		$('#dialog table#submit_jcrop_table').css({display:'none'});
	
		if( picture_id == null){
			picture_id = 0;
		};
		
	
		$("#iframe_src_for_image")
		.css({width:'350px',height:'80px'})
		.attr('src','<?php echo base_url();    ?>index.php/main/upload_picture_form?menu_item=<?php echo $website_data['menu_item'] ?>&picture_id=' + picture_id );
			
		var width_of_dialog = 410;
		var left_coord = ($(window).width()/2 - width_of_dialog/2);

		$("#dialog" ).dialog({
			position:[left_coord,200],
			height: 160,
			zIndex: -10,
			width: width_of_dialog,
			resizable: false 
			})
						
};
						
function open_jcrop( picture_id ){ // called from inside iframe
	
	$("#iframe_src_for_image")
	.css({width:'940px',height:'420px'})
	.attr('src','<?php echo base_url();    ?>index.php/main/iframe_jcrop_form_for_picture?menu_item=<?php echo $website_data['menu_item'] ?>&picture_id=' + picture_id);

	$( "#dialog" ).dialog({
		position:[6,10],
		height: 1150,
		height: 570,
		zIndex: -10,
		width: 990,
		resizable: false
		
		})	
		


};

</script>
<?php
	$this->load->view('footer/jquery_ui_for_dialog.php');
	$this->load->view('footer/fancy_zoom.php');
?>
		<div  id='working_area'>	
			<div  id='picture_div' class='float_left ' picture_id=<?php 
				
				if( count($website_data['picture']) > 0 ){
					echo $website_data['picture'][0]->id;
				}else{
					echo 0;
				};

				?>>
				
				<div  class='transparent_class '  id='click_to_upload'>
					
				</div>
				
			</div>
		</div>
		