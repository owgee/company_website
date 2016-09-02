
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>
Viewing CometEmail created by psd2newsletters
</title>
<link rel="shortcut icon" type="image/x-icon" href="" />
<link rel="stylesheet" type="text/css" href="media/css/global.css?random=56142c3985240" media="screen" />
<link rel="stylesheet" type="text/css" href="media/css/editor.css?random=56142c398527b" media="screen" />
<link rel="stylesheet" type="text/css" href="media/css/farbtastic.css">
<link rel="stylesheet" href="media/css/jquery-ui.min.css?random=56142c39852b3">
<link rel="stylesheet" href="media/css/jquery-ui.theme.min.css?random=56142c39852eb">
<link rel=stylesheet href="media/lib/codemirror.css">
<link rel="stylesheet" href="media/css/codemirror/theme/mbo.css">
<link rel="stylesheet" type="text/css" href="media/css/imgareaselect-animated.css?random=56142c3985322" />

<style>
	body { -webkit-transform: translate3d(0, 0, 0); } 
	#save { position: absolute; bottom: 70px; width: 206px; left: 22px; height: 55px; background-color: #68c0b0; line-height: 56px; color: #FFF; border-radius: 3px; font-size: 12px; text-transform: uppercase; cursor: pointer; background-image: url(media/img/icons/save_arrow.png); background-repeat: no-repeat; background-position: 118px 19px; -webkit-transition: all 0.4s ease; -moz-transition: all 0.4s ease; transition: all 0.4s ease; padding-left: 13px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; }
	
	.ani { -webkit-transition: all 0.4s ease; -moz-transition: all 0.4s ease; transition: all 0.4s ease; box-shadow: inset 200px 0px 0px rgba(0,0,0,0.25); }
	.de { background-color: #b1b1b1!important; background-position: 118px -65px!important; -webkit-transition: all 0.4s ease; -moz-transition: all 0.4s ease; transition: all 0.4 ease; }
	#save.de:hover { background-color: #b1b1b1!important; }
	#save:hover { background-color: #5ca99a!important; }

	#menu_btn { width: 16px; height: 12px; position: absolute; left: 210px; top: 37px; cursor: pointer; }
	#menu_btn div { background-color: #959799; height: 2px; width: 16px; position: absolute; left: 0px; }
		#menu_btn .stroke_1 { top: 0px; }
		#menu_btn .stroke_2 { top: 4px; }
		#menu_btn .stroke_3 { top: 8px; }
	
	#menu { position: absolute; top: 84px; left: 0px; width: 250px; background-color: rgba(255,255,255,0.05); z-index: 99; }
	#menu li { color: #828282}
	#menu li:last-child { padding-bottom: 20px; }
	#menu a { color: #828282; display: block; padding: 10px 20px 10px 20px;}
	#menu a:hover { color: #FFF; }
	
	#frame { opacity: 1!important; }
	
	/*** Tooltip Actions ***/
	#cmdLink { background-image: url(img/icons/link.png?random=56142c398535a); }
	#cmdLeftAlign { background-image: url(img/icons/leftAlign.png?random=56142c3985391); }
	#cmdCenterAlign { background-image: url(img/icons/centerAlign.png?random=56142c39853c9); }
	#cmdRightAlign { background-image: url(img/icons/rightAlign.png?random=56142c3985400); }
	#cmdBold { background-image: url(img/icons/bold.png?random=56142c3985437); }
	#cmdItalic { background-image: url(img/icons/italic.png?random=56142c398546e); background-position: 10px center}
	
	.wrap{
		width: 100%;
		text-align: center;
		overflow: hidden;
	}
	img#uploadPreview{
		border: 0;
		overflow: hidden;
	}
	
	img#uploadPreview { max-width: 600px; max-height: 500px; }

	.ui-resizable-e { width: 30px; right: -30px; z-index: 9999; }
	#coderWrapper { width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; background-color: #FFF; z-index: 99999; -webkit-transform: scale(0.8); -ms-transform: scale(0.8) ; transform: scale(0.8); opacity: 0;}
	#preview { width: 100%; height: 100%; }
	#preview_right { min-width: 320px; position: relative; }
	#coderNav { height: 50px; background-color: #2c2c2c; box-shadow: inset 0px -1px 0px rgba(0,0,0,0.1); position: absolute; top: 0px; left: 0px; width: 100%; z-index: 999999;}
	#previewDeviceFormat { width: 400px; margin: auto; color: #808285; font-size: 13px; line-height: 50px; text-align: center;}
	.CodeMirror { -webkit-font-smoothing: antialiased; text-shadow: 1px 1px 1px rgba(0,0,0,0.004); }
	#saveFromCodeEditor { position: absolute; right: 0px; top: 0px; background-color: #68c0b0; height: 50px; padding: 0 35px; line-height: 50px; color: #FFF; font-size: 13px; text-transform: uppercase; cursor: pointer; }
	
	.moduleCode { height: 0px; overflow-y: hidden; position: relative; z-index: 999999999; box-shadow: 0px 1px 0px rgba(0,0,0,0.08), 0px -1px 0px rgba(0,0,0,0.08); }
	
	
	/* code button */
	.moduleCodeButton { width: 40px; height: 40px; position: absolute; top: 0px; z-index: 9999999; margin-top: -20px; }
	.codeButton { width: 0%; height: 100%; background-color: #cecece; background-image: url(img/icons/openCodeEditor.png); background-position: center center; background-repeat: no-repeat; cursor: pointer; position: absolute; top: 0px; }
	.codeButton:hover { background-color: #68c0b0; }
	.codeButton:active { background-color: #5aafa0; }
	
	/* drag button */
	.moduleDragButton { width: 40px; height: 40px; position: absolute; top: 40px; z-index: 9999999; margin-top: -60px; -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;}
	.dragButton { width: 0%; height: 100%; background-color: #cecece; background-image: url(img/icons/dragButton.png); background-position: center center; background-repeat: no-repeat; cursor: pointer; position: absolute; top: 0px; cursor: -webkit-grab}
	.dragButton:hover { background-color: #ed7831; }
	.dragButton:active { cursor: -webkit-grabbing; background-color: #d76824; }
	
	/* close button */
	.moduleDeleteButton { width: 40px; height: 40px; position: absolute; top: 0px; z-index: 9999999; margin-top: -20px; -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;}
	.deleteButton { width: 0%; height: 100%; background-color: #cecece; background-image: url(img/icons/deleteButton.png); background-position: center center; background-repeat: no-repeat; cursor: pointer; position: absolute; top: 0px; }
	.deleteButton:hover { background-color: #e75d5d; }
	.deleteButton:active { background-color: #d14f4f; }
	
	/* duplicate button */
	.moduleDuplicateButton { width: 40px; height: 40px; position: absolute; top: 0px; z-index: 9999999; margin-top: 20px; -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;}
	.duplicateButton { width: 0%; height: 100%; background-color: #cecece; background-image: url(img/icons/duplicateButton.png); background-position: center center; background-repeat: no-repeat; cursor: pointer; position: absolute; top: 0px; }
	.duplicateButton:hover { background-color: #58a2d6; }
	.duplicateButton:active { background-color: #4687b4; }
	
	/* save code button */
	.moduleSaveCodeButton { width: 40px; height: 40px; position: absolute; top: 0px; right: 0px; z-index: 9999999; -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;}
	.saveCodeButton { width: 100%; height: 100%; background-color: #cecece; background-image: url(img/icons/saveCodeButton.png); background-position: center center; background-repeat: no-repeat; cursor: pointer; position: absolute; top: 0px; }
	.saveCodeButton:hover { background-color: #68c0b0; }
	.saveCodeButton:active { background-color: #4b9c8d; }

	
	.cm-tab { width: 12px!important; height: 12px!important }
	.ui-resizable-s { height: 12px; bottom: 0px; z-index: 99999999; }
	
	.preventSelection { -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
	
	@media only screen and (max-width: 1420px) 
		   {
		   
		   		/* code button */
		   		.moduleCodeButton { right: 0px; }
		   		.codeButton { right: 0px; }
		   
		   		/* drag button */
				.moduleDragButton { right: 0px; }
				.dragButton { right: 0px; }
				
				/* close button */
				.moduleDeleteButton { left: 0px; }
				.deleteButton { left: 0px; }
				
				/* duplicate button */
				.moduleDuplicateButton { right: 0px; }
				.duplicateButton { right: 0px; }

		   }
		   
	@media (min-width: 1421px) {
	
		/* code button */
   		.moduleCodeButton { right: -40px; }
   		.codeButton { left: 0px; }
   
   		/* drag button */
		.moduleDragButton { right: -40px; }
		.dragButton { left: 0px; }
		
		/* close button */
		.moduleDeleteButton { left: -40px; }
		.deleteButton { right: 0px; }
		
		/* duplicate button */
		.moduleDuplicateButton { right: -40px; }
		.duplicateButton { left: 0px; }
	
	}
	
</style>

<!-- Jquery Framework -->
<script type="text/javascript" src="media/js/jquery-1.10.1.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="media/js/jquery-ui-1.10.4.custom.min.js"></script>

<script type="text/javascript" src="media/js/jquery.color.js?random=56142c3985599"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="media/js/easing.js"></script>

<!-- Tooltip -->
<script type="text/javascript" src="media/js/tooltip.js?random=56142c39855d2"></script>

<!-- Colorpicker -->
<script type="text/javascript" src="media/js/farbtastic.js?random=56142c398560a"></script>

<script type="text/javascript" src="media/js/jquery.imgareaselect.pack.js?random=56142c3985641"></script>

<!-- jQuery Transform  -->
<script type="text/javascript" src="media/js/jquery.transform2d.js"></script>

<script type="text/javascript" src="media/js/script.js?random=56142c3985678"></script>

<script>

$(document).ready(function(){
	
	//detect if the customer is using an outdated computer
	if(window.localStorage!==undefined){
	    
	    //works
	    
	}
	
	else{
	 
	    headline = 'You\'re browser feels a little old.';
		paragraph = 'It seems you are using an outdated internet browser. Therefore it\'s impossible to render a few neat editing features!';
		
		btnTrue = 'Download Chrome';
		btnTrueId = 'downloadChrome';
		
		btnFalse = 'I understand. Continue.';
		
		setTimeout(function(){
			
			openPopup();
			
		}, 2000);
	    
	}
	
	//redirect to download chrome
	$(document).on('click', '#downloadChrome', function(){
		
		$(location).attr('href','https://www.google.nl/chrome/browser/desktop/');
		
	});

	$(document).ready(function(){
		
		$('#font_colorpicker').farbtastic('#font_colorpicker_value');
		
	});
	
	
	$(document).on('mousedown', 'body', function(){
		
		closeEditor();
		
	});
	
	$(document).on('mousedown', '.moduleCodeButton, .moduleCode', function(e){
		
		e.stopPropagation();
		
	});
		
	$(document).on('keypress', '.moduleCode', function(e){
		
		if ( e.metaKey && ( e.which === 13 ) ) {
		  
			closeEditor();
	  
		}
		
		if(e.which == 27) {
		  
			closeEditor();
	  
		}
		
	})
	
	$(document).on('click', '.codeButton', function(e){
	
		e.stopPropagation();
		
		theMod = $(this).closest('[data-module]');
		$('.codeButton, .dragButton, .deleteButton, .duplicateButton').animate({
		
			width: '0%'
		
		}, 200)
		
		if ($('.moduleCode').length > 0) { 
		   
		    // it exists 
		    $('.moduleCode').animate({
					
				height: '0px'
						
			}, 250, 'easeOutQuad', function () {
			
				openEditor();
				
			});
		}
		
		else {
			
			openEditor();
			
		}
					
	})

	$('#frame').on('mouseenter', '[data-module]', function(e){
	
		if($(this).next().is('.moduleCode')) {
		
			return false;
		
		}
		
		e.stopPropagation();
		
		table = $(this);
		
		mod_h = parseInt($(this).height()) / 2;
				
		$(table).first('td').prepend('<div class="moduleCodeButton preventSelection" style="top: '+mod_h+'px"><div class="codeButton"></div></div><div class="moduleDuplicateButton preventSelection" style="top: '+mod_h+'px"><div class="duplicateButton"></div></div><div class="moduleDragButton preventSelection" style="top: '+mod_h+'px"><div class="dragButton"></div></div><div class="moduleDeleteButton preventSelection" style="top: '+mod_h+'px"><div class="deleteButton"></div></div>');
		
		$("#frame").sortable('enable');
		$('#frame').sortable({
	        items: 'table[data-module]',
	        axis: 'y',
	        distance: 5,
	        handle: '.dragButton',
	        opacity: 0.85,
	        cursor: '-webkit-grabbing',
	        start: function(event, ui){
	        
		        if ($('.ui-draggable.ui-draggable-dragging').length > 0) { 
				    
				    
				    
				}
				
				else {
					 
					 h_module = $('.dragButton').closest('table').height();
					 
					 $('.ui-sortable-placeholder').css('height','3px');
					
				}
		        
	        },
	        stop: function(event, ui ){
	        
	        	$('#frame').css('-webkit-transform','scale(1)');
	        	
	        	allowSave();
		    	
	        }
		});

		$('.codeButton, .dragButton, .deleteButton, .duplicateButton').delay(500).animate({
			
			width: '100%'
			
		}, { duration: 400, easing: 'easeOutBack' });
			
	}).on('mouseleave', '[data-module]', function(e){
		
		$('.moduleCodeButton, .moduleDragButton, .moduleDeleteButton, .moduleDuplicateButton').remove();
	
	});
	
	//Delete Module
	$('#frame').on('click', '.deleteButton', function(ev) {
	
		$(this).parent().parent('table[data-module]').remove();
		$('.moduleCode').remove();
		
		count = $('#frame table[data-module]').size();
					  
		if ($(count).length > 0) {
						
			$('#frame').removeClass('empty').css('min-height','250px');
			
			if ($('#clear_template').length > 0) { 
														
														
			}
			
			else {
				
				$('#frame').prepend('<input type="button" id="clear_template" class="semi_bold" value="Clear Template">');	
			
			}
		
		}
		
		else {
							
			$('#frame').addClass('empty').css('min-height','250px');
			$('#frame #clear_template').remove();	
							
		}
		
		checkAttributes();
		allowSave()
	
	});
	
	
	
	if (document.images) {
    	img1 = new Image();
		img1.src = "img/framework/wheel.png";
	}
	
	$(document).on('mouseleave', '#sidebar', function() {
	
		$('#menu_btn').removeClass('active').removeClass('closed');
		$('#user_info').css('box-shadow','none');
		
		$('#menu').slideUp({
                    duration: 300,
                    easing: "easeInBack"
                });
                
        $('#sidebar').animate({
	        paddingTop: '81px',
        }, { duration: 300, easing: 'easeInBack' });
		
		$('#menu_btn .stroke_1').animate({
		  transform: 'rotate(0deg)',
		  top: '0px'
		}, 200);
		
		$('#menu_btn .stroke_3').animate({
		  transform: 'rotate(0deg)',
		  top: '8px'
		}, 200);
		
		$('#menu_btn .stroke_2').animate({
		 	opacity: 1
		}, 200);
	
	});
	
	$(document).on('mouseup', '#menu_btn', function(){
		
		el = (this);
		
		if($(this).hasClass('closed')){
			
			$(el).removeClass('closed');
			
			$('#menu').slideUp({
	                    duration: 300,
	                    easing: "easeInBack"
	                });
	                
	        $('#sidebar').animate({
		        paddingTop: '81px',
	        }, { duration: 300, easing: 'easeInBack' });
			
			$('#menu_btn .stroke_1').animate({
			  transform: 'rotate(0deg)',
			  top: '0px'
			}, 200);
			
			$('#menu_btn .stroke_3').animate({
			  transform: 'rotate(0deg)',
			  top: '8px'
			}, 200);
			
			$('#menu_btn .stroke_2').animate({
			 	opacity: 1
			}, 200);
			
		}
		
		else {
			
			$(el).addClass('closed');
			
			$('#menu_btn .stroke_1').animate({
			  transform: 'rotate(45deg)',
			  top: '4px'
			}, 200);
			
			$('#menu_btn .stroke_3').animate({
			  transform: 'rotate(-45deg)',
			  top: '4px'
			}, 200);
			
			$('#menu_btn .stroke_2').animate({
			 	opacity: 0
			}, 200);
			
			$('#menu').slideDown({
	                    duration: 300,
	                    easing: "easeOutBack"
	                });
	                
	        $('#sidebar').animate({
		        paddingTop: '332px',
	        }, { duration: 300, easing: 'easeOutBack' });
			
		}
		
	})
	
	$(document).on('click', '#saveFromCodeEditor', function(){
	
		editorGetHtml = editor.getValue();
		
		$tmp = $('<div>'+editorGetHtml+'</div>');
		$tmp.find('style').remove();
		src = $tmp.html();
		
		$('#frame').html(src);
	
		$('#coderWrapper').css('transform','scale(0.9)').css('opacity','0');
		
		$('.stackSR').css('transform','scale(1)').css('opacity','1');
		
		$('#popupOverlay').css({
			'opacity': '0',
		});

		setTimeout(function(){
			
			$('html, body').css('overflow','');
			$('#popupOverlay').remove();
			$('#coderWrapper').addClass('hidden');
			
			editor.setValue('');
			
		}, 400);
			
	})
	

	$(document).on('click', '#save', function() {
	
		if($(this).hasClass('de')){
			
		}
		
		else {
		
			$(this).addClass('ani');
	   	   
	   	   $tmp = $("<div></div>").html($("#frame").html());
	   	   $tmp.find('*[contenteditable]').each(function() { $(this).removeAttr('contenteditable') });
	   	   $tmp.find('.editable').each(function() { $(this).removeClass('editable') });
	   	   $tmp.find('.delete, .handle, .moduleDeleteButton, .moduleDragButton, .moduleCodeButton, .moduleDuplicateButton, .moduleCode').each(function() { $(this).remove(); });
	   	   $tmp.find('.last-table').each(function() { $(this).removeClass('last-table'); });
	   	   $tmp.find('.last-table').removeClass('last-table');
	   	   $tmp.find('.image_target').removeClass('image_target');
	   	   $tmp.find('tr').unwrap('<tbody></tbody>')
	   	   $tmp.find('.currentTable').each(function() { $(this).removeClass('currentTable'); });
	   	   $tmp.find('#edit_link').each(function() { $(this).remove(); });
	   	   $tmp.find('.parentOfBg').contents().unwrap('div');
	   	   $tmp.find('#clear_template').each(function() { $(this).remove(); });
	   	   $tmp.find('[class=""]').each(function() { $(this).removeAttr('class') });
	   	   campaign_html = $tmp.html().replace(/sr_name/g, '*|name|*').replace(/sr_email/g, '*|email|*').replace(/sr_unsubscribe/g, '*|unsubscribe|*').replace(/sr_date/g, '*|date|*').replace(/sr_view_online/g, '*|view_online|*').replace(/zip:uploads/g, 'zip_uploads');
	   	   
	   	   campaign_id = "";
	   	   
	   	   $.ajax({
	            type: "POST",
	            dataType: "html",
	            url: "../scripts/save_campaign.php",
	            data: {
		            campaign_id: campaign_id, campaign_html: campaign_html
	            }
	        }).done(function(data) {
	        
	        	if(data == '2'){
	        	
	        		$('.ani').removeClass('ani');
		        	
		        	headline = 'Due to inactivity, you\'ve been logged out.';
					paragraph = 'Just enter your password so we know it\'s you again';
					
					inputField = '';
					inputFieldId = 'confirmAccountPassword';
						
					btnTrue = 'Confirm Account';
					btnTrueId = 'confirmAccountSession';
					
					btnFalse = 'Close without saving';
					
					openPopup();
					
					$('#confirmAccountPassword').attr('type','password')
		        	
	        	}
	        	
	        	else {
	        		        
	        		$('.ani').removeClass('ani').addClass('de');
	        		
	        	}
	        
			});	
			
		}
	   
	   });
	   
	   $(document).on('click', '#confirmAccountSession', function(){
		   
		   user_email = $('[data-useremail]').attr('data-useremail');
		   user_pass = $('#confirmAccountPassword').val();
		   
		    $.ajax({
	            type: "POST",
	            dataType: "html",
	            url: "../scripts/confirmAccountSession.php",
	            data: {
		            user_email: user_email, user_pass: user_pass
	            }
	        }).done(function(data) {       
		        
	        	if(data == '1'){
		        	
		        	closePopup();

					setTimeout(function(){
						
						$('#save').trigger('click');
						
					}, 500)
		        	
	        	}
	        	
	        	else {
		        	
		        	notificationContent = 'Wrong Password';
					notificationColor = "#ea5a5b";
				
					notification();
					
					$('##confirmAccountPassword').focus();
		        	
	        	}
	        
	        });
		   
	   })

});
	
//Generate Template
function downloadTemplate() {

	//Hide overlay
	$('.overlay').fadeOut(200);
	
	campaign_id = "";
				 
	$('#campaign_id').val(campaign_id);
	
}
	
</script>

<!-- Functions -->
<script type="text/javascript" src="js/functions.js?random=56142c39858e8"></script>

<!-- Code Mirror -->
<script type="text/javascript" src="lib/codemirror.js"></script>
<script type="text/javascript" src="mode/xml/xml.js"></script>
<script type="text/javascript" src="mode/javascript/javascript.js"></script>
<script type="text/javascript" src="mode/css/css.js"></script>
<script type="text/javascript" src="mode/htmlmixed/htmlmixed.js"></script>
<script type="text/javascript" src="addon/fold/xml-fold.js"></script>
<script type="text/javascript" src="addon/edit/matchtags.js"></script>

<script type="text/javascript" src="js/jquery.htmlClean.js"></script>

<!-- Custom -->
<script type="text/javascript" src="js/editor.js?random=56142c3985920"></script>

<!-- Shortcuts -->
<script type="text/javascript" src="js/shortcuts.js?random=56142c3985958"></script>

</head>

<body>
	
	<p id="wr">

	<!-- The Editor -->
	<div id="editor" class="stackSR">
	
	
		
		<!-- Sidebar -->
		

		
		<!-- Editor Canvas -->
		<div id="canvas">
			
			<!-- Editor Holder -->
			<div id="holder">
			
			
				<div id="meta_holder">
					
										
				</div>
			
				<div id="styles_holder">
					
										
				</div>
			
				<div id="modules_holder" style="opacity: 0; display: none;">
					
										
				</div>
				
				<!-- Editor Frame -->
				<div id="frame" class="empty">
								
					
					
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="format-detection" content="telephone=no">					
				
					
					<style type="text/css">
/*basics*/
body {margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;}
table {border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
table td {border-collapse: collapse;}
img {-ms-interpolation-mode: bicubic; display: block;}
/*outlook*/
.ExternalClass {width: 100%;}
.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height: 100%;}
.ReadMsgBody {width: 100%;background-color: #333333;}
/*anchors*/
.yshortcuts a {border-bottom: none!important;}
.ios-footer a {color: #aaaaaa!important;text-decoration: underline;} 
p,h1,h2,h3,h4{ margin-top:0!important;margin-right:0!important;margin-bottom:0!important;margin-left:0!important;padding-top:0!important;padding-right:0!important;padding-bottom:0!important;padding-left:0!important;}
/*Responsive*/
@media screen and (max-width: 799px) {
  table.force-row {width: 600px!important;max-width: 600px!important;}
}
@media screen and (max-width: 599px) {
  table.force-row {width: 480px!important;max-width: 480px!important;}
  table.mobile-row, td.mobile-row {width: 480px!important;max-width: 480px!important;}
  table.center-float {float: none!important;}
  td.col {width: 100%!important;}
  td.col.center-text{text-align: center!important;padding-left: 12px!important;padding-right: 12px!important;}
  td.container-padding {padding-left: 12px!important;padding-right: 12px!important;}
  img.image {width:100%!important;max-width: 100%!important;height: auto!important;margin: auto;}
  td.gallery-container img {padding-bottom: 10px!important;}
  table.hide-mobile, tr.hide-mobile, td.hide-mobile {display: none!important;}
  td.mobile-gap {height: 25px!important;width: 100%!important;}
}
@media screen and (max-width: 479px) {
  table.force-row {width: 100%!important;max-width: 100%!important;}
  table.mobile-row, td.mobile-row {width: 100%!important;max-width: 100%!important;}
  table.mobile-row.padding10 {width: 100%!important;max-width: 100%!important;padding-top: 10px!important;padding-bottom: 10px!important;}
  table.mobile-row.padding20 {width: 100%!important;max-width: 100%!important;padding-top: 20px!important;padding-bottom: 20px!important;}
  td.clients img {width: 75%!important;height: auto!important;}

/**
* @tab Creativity Percentage Width
* @section Percentage Width
* @tip Change the percentage width
*/
table.creativity-percentage{
  /*@editable*/width:85%!important;
}
/**
* @tab Communication Percentage Width
* @section Percentage Width
* @tip Change the percentage width
*/
table.communication-percentage{
  /*@editable*/width:50%!important;
}
/**
* @tab Teamwork Percentage Width
* @section Percentage Width
* @tip Change the percentage width
*/
table.teamwork-percentage{
  /*@editable*/width:75%!important;
}

}
</style>					
				
					
					<table border="0" width="100%" cellpadding="0" cellspacing="0" data-module="Web view + Socials" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-1.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- 600px -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" bgcolor="#ffffff" class="force-row" style="width:600px;max-width:600px;">
        <tbody><tr>
          <td class="container-padding" align="center" width="100%">

            <!-- gap -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->

            <!-- view-online -->
            <table width="100" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row padding10" style="width: 100px;max-width:100px;">
              <tbody><tr>
                <td mc:edit="m1" class="col center-text" valign="middle"> <a href="sr_view_online" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;font-style:normal;line-height:12px;color:#999999;text-decoration:none;">View online</a> </td>
              </tr>
            </tbody></table>
            <!-- view-online ends-->

            <!-- socials -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/fb.png" width="20" height="20" border="0" mc:edit="m2" editable="true" label="Facebook icon" data-crop="false" alt="Facebook icon"></a></td>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gp.png" width="20" height="20" border="0" mc:edit="m3" editable="true" label="Facebook icon" data-crop="false" alt="Google + icon"></a></td>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/in.png" width="20" height="20" border="0" mc:edit="m4" editable="true" label="Facebook icon" data-crop="false" alt="Instagram icon"></a></td>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/ln.png" width="20" height="20" border="0" mc:edit="m5" editable="true" label="Facebook icon" data-crop="false" alt="Linkedin icon"></a></td>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/tw.png" width="20" height="20" border="0" mc:edit="m6" editable="true" label="Facebook icon" data-crop="false" alt="Twitter icon"></a></td>
                <td valign="middle" align="center" width="20" height="20" style="font-size:20px;line-height:20px;"><a href="#"><img style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/yt.png" width="20" height="20" border="0" mc:edit="m7" editable="true" label="Facebook icon" data-crop="false" alt="Youtube icon"></a></td>
              </tr>
            </tbody></table>
            <!-- socials ends-->

            <!-- gap -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->

</td></tr></tbody></table>
    <!-- 600px -->
    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" data-module="Logo + Menu" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-2.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- 600px -->
      <table border="0" width="800" cellpadding="0" cellspacing="0" bgcolor="#ffffff" class="force-row" style="width:600px;max-width:600px;">
        <tbody><tr>
          <td class="container-padding" align="center" width="100%">

            <!-- logo -->
            <table border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row">
              <tbody><tr>
                <td class="col" align="center" valign="middle"><a href="#"><img style="display:block;" border="0" width="40" height="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/logo.jpg" mc:edit="m8" editable="true" label="Logo" data-crop="false" alt="Logo"></a></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col center-text" align="left" valign="middle" mc:edit="m9">
                  <multiline>
                    <a href="#" style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;font-style:normal;line-height:18px;color:#f08f12;text-decoration:none;" data-color="Logo Color 1">COMET</a> <a href="#" style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;font-style:normal;line-height:18px;color:#666666;text-decoration:none;" data-color="Logo Color 2">EMAIL</a>
                  </multiline>
                </td>
              </tr>
            </tbody></table>
            <!-- logo ends-->

            <!-- menu -->
            <table border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row">
              <tbody><tr>
                <td class="hide-mobile" valign="middle" align="center" height="48" style="font-size:48px;line-height:48px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <table border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row padding20">
                    <tbody><tr>
                      <td valign="middle" align="center" data-color="Menu Color">
                        <div style=" line-height: 14px;">
                          <multiline>
                            <a style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#000000;text-decoration:none;" href="#" mc:edit="m10">&nbsp;&nbsp;About us&nbsp;&nbsp;</a><a style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#000000;text-decoration:none;" href="#" mc:edit="m11">&nbsp;&nbsp;Features&nbsp;&nbsp;</a><a style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#000000;text-decoration:none;" href="#" mc:edit="m12">&nbsp;&nbsp;Contact&nbsp;&nbsp;</a><a style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#f08f12;text-decoration:none;" href="#" mc:edit="m13" data-color="Login Color">&nbsp;&nbsp;Login&nbsp;&nbsp;</a>
                          </multiline>
                        </div>  
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
            <!-- menu ends-->

            <!-- gap -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->

</td></tr></tbody></table>
    <!-- 600px -->
    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" data-module="Header" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-3.jpg">
  <tbody><tr>
    <td class="col" valign="top" align="center">
<!-- Section-1 -->
<table border="0" width="100%" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td align="center" valign="top" height="50" style="background-color:#ffffff"></td>
    <td rowspan="2" align="center" valign="top" width="600" class="mobile-row" style="background-color:#ffffff">
      <!-- picture -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/header-pict.jpg" border="0" width="600" height="400" editable="true" label="Main Picture" alt="Main Picture"></td>
        </tr>
      </tbody></table>
      <!-- picture ends-->
    </td>
    <td align="center" valign="top" height="50" style="background-color:#ffffff"></td>
  </tr>
  <tr>
    <td align="center" valign="top" style="background-color:#f08f12" data-bgcolor="Back Color Left">&nbsp;</td>
    <td align="center" valign="top" style="background-color:#f08f12" data-bgcolor="Back Color Right">&nbsp;</td>
  </tr>
</tbody></table>
<!-- Section-1 -->
<!-- Section-2 -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-1.jpg) no-repeat center top; background-color:#f08f12; background-size:cover;" data-bg="Header Background Picture">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- content -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m15" class="col" valign="middle" align="center" data-size="Headline" data-min="18" data-max="30" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#ffffff;">
          <div style="line-height:24px;">
            <multiline>
              MULTI-PURPOSE EMAIL TEMPLATE
            </multiline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#ffffff;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- text -->
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
            <tbody><tr>
              <td mc:edit="m16" class="col" valign="middle" align="center" data-size="preface Text" data-min="12" data-max="21" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#ffffff;">
                <div style="line-height:24px;">
                  <multiline>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                  </multiline>
                </div>
              </td>
            </tr>
          </tbody></table>
          <!-- text ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- btn -->
          <table width="160" border="0" cellpadding="0" cellspacing="0" align="center" style="width:160px;max-width:160px;">
            <tbody><tr>

              <td mc:edit="m17" class="col" valign="middle" align="center" height="60" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;line-height:24px;color:#ffffff;text-decoration:none;border:1px solid #ffffff;"> 
                <a href="#" data-color="More Link" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;line-height:24px;color:#ffffff;text-decoration:none;">
                  <div style="line-height:24px;">
                    <singleline> Read More </singleline>
                  </div>
                </a>
              </td>
            </tr>
          </tbody></table>
          <!-- btn ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- content ends-->

</td></tr></tbody></table>
<!-- Section-2 -->
</td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="What we do" data-module="What we do" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-4.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- Content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m18" class="col" valign="middle" align="center" style="line-height:24px;">
            <multiline>
              <div style="line-height:24px;">
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">WHAT</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">WE DO</span>
              </div>
            </multiline>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#dadada;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- container-1+2 -->
            <table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center">
            <!-- column-1 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="120"><img style="display:block;" width="180" height="120" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-1.jpg" border="0" mc:edit="m19" editable="true" data-crop="false" label="Icon-1" alt="Icon-1"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m20" data-color="Title" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      DESIGN
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m21" data-color="Paragraph" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height:18px;">
                    <multiline>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-1 ends-->

            <!-- column-2 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="120"><img style="display:block;" width="180" height="120" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-2.jpg" border="0" mc:edit="m22" editable="true" label="Icon-2" alt="Icon-2"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m23" data-color="Title" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      DEVELOPMENT
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m24" data-color="Paragraph" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height:18px;">
                    <multiline>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                    <multiline>
                  <div>
                </div></multiline></multiline></div></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-2 ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- container-1+2 ends -->

            <!-- column-3 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="120"><img editable="true" style="display:block;" border="0" width="180" height="120" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-3.jpg"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m25" data-color="Title" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      RESPONSIVE
                    </singleline>
                  <div>
                </div></div></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m26" data-color="Paragraph" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height:18px;">
                    <multiline>
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-3 ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- Content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #f9f9f9;" mc:repeatable="psd2newsletters" mc:variant="Skills" data-module="Skills" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-5.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- Content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m27" class="col" valign="middle" align="center" style="line-height:24px;"> 
            <div style="line-height:24px;">
              <multiline>
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">OUR</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">SKILLS</span>
              </multiline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#dadada;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m28" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="container-padding" valign="middle" align="center">
            <!-- Bar-1 -->
            <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 500px;max-width:500px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m29" class="col" valign="middle" align="left" style="line-height:18px;">
                  <div style="line-height:18px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#333333;">CREATIVITY</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;85%</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;border:1px solid #f08f12;">
                  <!-- percentage -->
                  <table class="creativity-percentage" border="0" cellpadding="0" cellspacing="0" align="left" style="background:#f08f12; width: 85%;">
                    <tbody><tr>
                      <td height="10"></td>
                    </tr>
                  </tbody></table>
                  <!-- percentage ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- Bar-1 ends-->
            <!-- gap -->
            <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 500px;max-width:500px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->
            <!-- Bar-2 -->
            <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 500px;max-width:500px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m30" class="col" valign="middle" align="left" style="line-height:18px;">
                  <div style="line-height:18px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#333333;">COMMUNICATION</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50%</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;border:1px solid #f08f12;">
                  <!-- percentage -->
                  <table class="communication-percentage" border="0" cellpadding="0" cellspacing="0" align="left" style="background:#f08f12; width: 50%;">
                    <tbody><tr>
                      <td height="10"></td>
                    </tr>
                  </tbody></table>
                  <!-- percentage ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- Bar-2 ends-->
            <!-- gap -->
            <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 500px;max-width:500px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->
            <!-- Bar-3 -->
            <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 500px;max-width:500px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m31" class="col" valign="middle" align="left" style="line-height:18px;">
                  <div style="line-height:18px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#333333;">TEAMWORK</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;75%</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;border:1px solid #f08f12;">
                  <!-- percentage -->
                  <table class="teamwork-percentage" border="0" cellpadding="0" cellspacing="0" align="left" style="background:#f08f12; width: 75%;">
                    <tbody><tr>
                      <td height="10"></td>
                    </tr>
                  </tbody></table>
                  <!-- percentage ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- Bar-3 ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- Content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Features" data-module="Features" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-6.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m32" class="col" valign="middle" align="center" style="line-height:24px;">
            <div style="line-height:24px;">
              <multiline>
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">POWERFULL</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">FEATURES</span>
              </multiline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#dadada;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m33" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="50" style="font-size:50px;line-height:50px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="container-padding" valign="middle" align="center">

            <!-- pict -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="200" height="200" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-1.jpg" border="0" mc:edit="m34" editable="true" data-crop="false" label="Pict-1" alt="Pict-1"></td>
              </tr>
            </tbody></table>
            <!-- pict ends-->

            <!-- gap -->
            <table width="2" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 2px;max-width:2px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->

            <!-- text -->
            <table width="360" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 360px;max-width:360px;">
              <tbody><tr>
                <td mc:edit="m35" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#666666;" data-color="Title-1">EDITABLE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#f08f12;" data-color="Title-2">TEMPLATE</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m36" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#666666;">
                  <div style="line-height:14px;">
                    <multiline>
                      WE USE MAILCHIMP EDITABLE CSS
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m37" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:21px;color:#666666;letter-spacing:-0.2px;">
                  <div style="line-height:21px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m38" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>SHOW MORE</singleline>
                          </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->

          </td>
        </tr>
        <!-- splitter -->
        <tr>
          <td class="col" valign="middle" align="center" height="80" style="font-size:80px;line-height:80px;">
            <!-- line -->
            <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width:100px;max-width:100px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <!-- splitter ends-->
        <tr>
          <td class="container-padding" valign="middle" align="center">

            <!-- pict -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center"><img editable="true" class="image" style="display:block;" border="0" width="200" height="200" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-2.jpg"></td>
              </tr>
            </tbody></table>
            <!-- pict ends-->

            <!-- gap -->
            <table width="2" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 2px;max-width:2px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- gap ends-->

            <!-- text -->
            <table width="360" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 360px;max-width:360px;">
              <tbody><tr>
                <td mc:edit="m39b" class="col center-text" valign="middle" align="left" style="line-height:21px;">
                  <div style="line-height:21px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#666666;" data-color="Title-1">RESPONSIVE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#f08f12;" data-color="Title-2">DESIGN</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m40" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#666666;">
                  <div style="line-height:14px;">
                    <multiline>
                      RESPONSIVE LAYOUT FOR EVERY DEVICE
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m41" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:21px;color:#666666;letter-spacing:-0.2px;">
                  <div style="line-height:21px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m42" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>
                              SHOW MORE
                            </singleline>
                          </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->

          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="80" style="font-size:80px;line-height:80px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" mc:repeatable="psd2newsletters" mc:variant="Who we are" data-module="Who we are" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-7.jpg">
  <tbody><tr>
    <td class="col" valign="top" align="center">
<!-- Section-1 -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;">
  <tbody><tr>
    <td align="center" valign="top" height="50" style="background-color:#ffffff"></td>
    <td rowspan="2" align="center" valign="top" width="600" class="mobile-row" style="background-color:#ffffff">
      <!-- picture -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center">
            <img class="image" style="display:block;" width="600" height="200" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-wide.jpg" border="0" mc:edit="m34" editable="true" data-crop="false" label="Pict-1" alt="Pict-1">
          </td>
        </tr>
      </tbody></table>
      <!-- picture ends-->
    </td>
    <td align="center" valign="top" height="50" style="background-color:#ffffff"></td>
  </tr>
  <tr>
    <td align="center" valign="top" style="background-color:#666666">&nbsp;</td>
    <td align="center" valign="top" style="background-color:#666666">&nbsp;</td>
  </tr>
</tbody></table>
<!-- Section-1 -->
<!-- Section-2 -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-2.jpg) no-repeat center top; background-color: #666666; background-size:cover;" data-bg="Who we are - background picture">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- Content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m44" class="col center-text" valign="middle" align="center" style="line-height:24px;">
            <div style="line-height:24px;">
              <multiline>
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#ffffff;" data-color="Title-1">WHO</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">WE ARE</span>
              </multiline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;background:#ffffff;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m45" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#ffffff;">
                  <div style="line-height:24px;">
                    <multiline>
                      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="50" style="font-size:50px;line-height:50px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="container-padding" valign="middle" align="center">
            <!-- columns-container -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center">

            <!-- container-1+2 -->
            <table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center">

            <!-- column-1 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="180"><img style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/thumb-1.png" border="0" mc:edit="m46" editable="true" data-crop="false" label="Thumb-1" alt="Thumb-1"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m46-b" data-color="Name Color 1" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:18px;color:#ffffff;">
                  <div style="line-height:18px;">
                    <singleline>
                      MARTIN RONALDO
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m47" data-color="Occupation Color 1" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      DESIGNER
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">
                  <!-- line -->
                  <table width="25" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 25px;max-width:25px;">
                    <tbody><tr>
                      <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;background:#ffffff;">&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <!-- line ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">
                  <!-- socials -->
                    <table width="80" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 80px;max-width:80px;">
                      <tbody><tr>
                        <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/fb-white.png" border="0" mc:edit="m48" editable="true" data-crop="false" label="Facebook" alt="Facebook"></a></td>
                        <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/tw-white.png" border="0" mc:edit="m49" editable="true" data-crop="false" label="Twitter" alt="Twitter"></a></td>
                        <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/ln-white.png" border="0" mc:edit="m50" editable="true" data-crop="false" label="LinkedIn" alt="LinkedIn"></a></td>
                      </tr>
                    </tbody></table>
                    <!-- socials ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-1 ends-->

            <!-- column-2 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="180"><img style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/thumb-2.png" border="0" mc:edit="m51" editable="true" data-crop="false" label="Thumb-2" alt="Thumb-2"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m52" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:18px;color:#ffffff;">
                  <div style="line-height:18px;">
                    <singleline>
                      CHRISTIANNA ALONSO
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m53" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      DEVELOPER
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">
                  <!-- line -->
                  <table width="25" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 25px;max-width:25px;">
                    <tbody><tr>
                      <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;background:#ffffff;">&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <!-- line ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- socials -->
                  <table width="80" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 80px;max-width:80px;">
                    <tbody><tr>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/fb-white.png" border="0" mc:edit="m54" editable="true" data-crop="false" label="Facebook" alt="Facebook"></a></td>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/tw-white.png" border="0" mc:edit="m55" editable="true" data-crop="false" label="Twitter" alt="Twitter"></a></td>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/ln-white.png" border="0" mc:edit="m56" editable="true" data-crop="false" label="LinkedIn" alt="LinkedIn"></a></td>
                    </tr>
                  </tbody></table>
                  <!-- socials ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-2 ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- container-1+2 ends-->

            <!-- column-3 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="180"><img style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/thumb-3.png" border="0" mc:edit="m57" editable="true" data-crop="false" label="Thumb-3" alt="Thumb-3"></td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m58" data-color="Name Color 1" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:18px;color:#ffffff;">
                  <div style="line-height:18px;">
                    <singleline>
                      FERNANDO OLIVARES
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m59" data-color="Occupation Color 2" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:18px;color:#f08f12;">
                  <div style="line-height:18px;">
                    <singleline>
                      MANAGER
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">
                  <!-- line -->
                  <table width="25" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 25px;max-width:25px;">
                    <tbody><tr>
                      <td class="col" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;background:#ffffff;">&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <!-- line ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- socials -->
                  <table width="80" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 80px;max-width:80px;">
                    <tbody><tr>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/fb-white.png" border="0" mc:edit="m60" editable="true" data-crop="false" label="Facebook" alt="Facebook"></a></td>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/tw-white.png" border="0" mc:edit="m61" editable="true" data-crop="false" label="Twitter" alt="Twitter"></a></td>
                      <td valign="middle" align="center" width="20" height="20"><a href="#"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/ln-white.png" border="0" mc:edit="m62" editable="true" data-crop="false" label="LinkedIn" alt="LinkedIn"></a></td>
                    </tr>
                  </tbody></table>
                  <!-- socials ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-3 ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- columns-container -->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- content ends-->

    </td></tr></tbody></table>
<!-- Section-2 -->
</td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Price List" data-module="Price List" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-8.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m62" class="col center-text" valign="middle" align="center" style="line-height:24px;">
            <div style="line-height:24px;">
              <multiline>
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">PRICE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">LIST</span>
              </multiline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#f4f4f4;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m63" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- columns-container -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td class="container-padding" valign="middle" align="center">

            <!-- container-1+2 -->
            <table width="400" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 400px;max-width:400px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center">
            <!-- column-1 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m64" data-color="Title color" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#f08f12;">
                  <div style="line-height: 21px;">
                    <singleline>
                      BASIC
                    </singleline> 
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m65" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height: 18px;">
                    <singleline>
                      Starting at
                    </singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td mc:edit="m66" class="col" valign="middle" align="center">
                  <multiline>
                    <sup style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:36px;font-weight:bold;line-height:0px;vertical-align:24px;color:#666666;">$</sup><span style="font-family:Arial,Helvetica,sans-serif;font-size:72px;font-weight:bold;line-height:72px;color:#666666;">29</span>
                  </multiline>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="center" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m67" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>ORDER NOW</singleline>
                          </a>
                        </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-1 ends-->
            <!-- column-2 -->
            <table width="194" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 194px;max-width:194px; background-color:#f8f8f8; border:3px solid #e8e8e8;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m68" data-color="Title color" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:normal;line-height:24px;color:#f08f12;">
                  <div style="line-height: 24px;">
                    <singleline>
                      STANDARD
                    </singleline> 
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m69" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height: 18px;">
                    <singleline>Starting at</singleline>
                  </div>
                  </td>
              </tr>
              <tr>
                <td mc:edit="m70" data-color="Price color" class="col" valign="middle" align="center"> 
                  <multiline>
                    <sup style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:36px;font-weight:bold;line-height:0px;vertical-align:24px;color:#f08f12;">$</sup><span style="font-family:Arial,Helvetica,sans-serif;font-size:72px;font-weight:bold;line-height:72px;color:#f08f12;">99</span>
                  </multiline>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="center" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m71" valign="middle" align="center" width="120" height="40" data-bgcolor="Btn Background Color" style="border:1px solid #f08f12; background-color:#f08f12;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#ffffff;text-decoration:none;">
                            <singleline>ORDER NOW</singleline>
                          </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-2 ends-->
              </td>
            </tr>
          </tbody></table>
          <!-- container-1+2 ends -->

            <!-- column-3 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m72" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:21px;font-weight:normal;line-height:21px;color:#f08f12;">
                  <div style="line-height: 21px;">
                    <singleline>ADVANCED</singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m73" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height: 18px;">
                    <singleline>Starting at</singleline>
                  </div>
                </td>
              </tr>
              <tr>
                <td mc:edit="m74" class="col" valign="middle" align="center"> 
                  <multiline>
                    <sup style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:36px;font-weight:bold;line-height:0px;vertical-align:24px;color:#666666;">$</sup><span style="font-family:Arial,Helvetica,sans-serif;font-size:72px;font-weight:bold;line-height:72px;color:#666666;">79</span>
                  </multiline>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="center" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m75" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>ORDER NOW</singleline>
                          </a>
                        </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- column-3 ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- columns-container -->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="60" style="font-size:60px;line-height:60px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="container-padding" valign="middle" align="center"><img class="image" style="display:block;" width="525" height="210" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-transparent.png" border="0" mc:edit="m76" editable="true" data-crop="false" label="Picture" alt="Picture"></td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-3.jpg) no-repeat center top; background-color: #f3f3f3; background-size:cover;" mc:repeatable="psd2newsletters" mc:variant="Gallery" data-module="Gallery" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-9.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- content -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m76" class="col center-text" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#ffffff;">
            <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-1">
              <singleline>GALLERY</singleline>
            </span>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#cacaca;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="gallery-container" valign="middle" align="center">

<!-- gallery-container -->
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
  <tbody><tr>
    <td class="container-padding" valign="middle" align="center">
      <!-- pict-1 -->
      <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-1.jpg" border="0" mc:edit="m77" editable="true" data-crop="false" label="Gallery-1" alt="Gallery-1"></td>
        </tr>
      </tbody></table>
      <!-- pict-1 ends-->

      <!-- pict-2 -->
      <table width="390" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 390px;max-width:390px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="390" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-2.jpg" border="0" mc:edit="m78" editable="true" data-crop="false" label="Gallery-2" alt="Gallery-2"></td>
        </tr>
      </tbody></table>
      <!-- pict-2 ends-->
    </td>
  </tr>

  <tr>
    <td class="hide-mobile" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
  </tr>

  <tr>
    <td class="container-padding" valign="middle" align="center">
      <!-- container-1+2 -->
      <table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center">
            <!-- pict-3 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-3.jpg" border="0" mc:edit="m79" editable="true" data-crop="false" label="Gallery-3" alt="Gallery-3"></td>
              </tr>
            </tbody></table>
            <!-- pict-3 ends-->

            <!-- pict-4 -->
            <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-4.jpg" border="0" mc:edit="m80" editable="true" data-crop="false" label="Gallery-4" alt="Gallery-4"></td>
              </tr>
            </tbody></table>
            <!-- pict-4 ends-->
          </td>
        </tr>
      </tbody></table>
      <!-- container-1+2 ends -->

      <!-- pict-5 -->
      <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-5.jpg" border="0" mc:edit="m81" editable="true" data-crop="false" label="Gallery-5" alt="Gallery-5"></td>
        </tr>
      </tbody></table>
      <!-- pict-5 ends-->
    </td>
  </tr>

  <tr>
    <td class="hide-mobile" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
  </tr>

  <tr>
    <td class="container-padding" valign="middle" align="center">
      <!-- pict-6 -->
      <table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="390" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-6.jpg" border="0" mc:edit="m82" editable="true" data-crop="false" label="Gallery-6" alt="Gallery-6"></td>
        </tr>
      </tbody></table>
      <!-- pict-6 ends-->

      <!-- pict-7 -->
      <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center"><img class="image" style="display:block;" width="180" height="180" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gallery-7.jpg" border="0" mc:edit="m83" editable="true" data-crop="false" label="Gallery-7" alt="Gallery-7"></td>
        </tr>
      </tbody></table>
      <!-- pict-7 ends-->
    </td>
  </tr>
</tbody></table>
<!-- gallery-container ends -->

        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- btn -->
          <table width="160" border="0" cellpadding="0" cellspacing="0" align="center" style="width:160px;max-width:160px;">
            <tbody><tr>
              <td mc:edit="m84" class="col" valign="middle" align="center" height="60" style="border:1px solid #f08f12;"> 
                  <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;line-height:24px;color:#f08f12;text-decoration:none;">
                    <singleline>
                      Show More
                    </singleline>
                  </a>
              </td>
            </tr>
          </tbody></table>
          <!-- btn ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Blog" data-module="Blog" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-10.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- content -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m85" class="col center-text" valign="middle" align="center" style="line-height:24px;">
          <div style="line-height:24px;">
            <multiline>
              <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">BLOG</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">ARTICLES</span>
            </multiline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#eeeeee;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- text -->
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
            <tbody><tr>
              <td mc:edit="m86" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, deserunt mollitia animi.
                  </multiline>
                </div>
              </td>
            </tr>
          </tbody></table>
          <!-- text ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- articles-container -->
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
            <tbody><tr>
              <td class="container-padding" valign="middle" align="center">
          <!-- column-1 -->
          <table width="260" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 260px;max-width:260px;">
            <tbody><tr>
              <td class="col" valign="middle" align="left"><img class="image" style="display:block;" width="260" height="200" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/blog-1.jpg" border="0" mc:edit="m87" editable="true" data-crop="false" label="Blog-1" alt="Blog-1"></td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="35" style="font-size:35px;line-height:35px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m88" class="col center-text" valign="middle" align="left" style="line-height:18px;">
                <div style="line-height:18px;">
                  <multiline>
                    <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;" data-color="Title-1">EDITABLE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#f08f12;" data-color="Title-2">TEMPLATE</span>
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m89" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td mc:edit="m90" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                          <singleline>SHOW MORE</singleline>
                        </a>
                    </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->

          <!-- column-2 -->
          <table width="260" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 260px;max-width:260px;">
            <tbody><tr>
              <td class="col" valign="middle" align="left"><img class="image" style="display:block;" width="260" height="200" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/blog-2.jpg" border="0" mc:edit="m91" editable="true" data-crop="false" label="Blog-2" alt="Blog-2"></td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="35" style="font-size:35px;line-height:35px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m92" class="col center-text" valign="middle" align="left" style="line-height:18px;">
                <div style="line-height:18px;">
                  <multiline>
                    <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;">RESPONSIVE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#f08f12;">LAYOUT</span>
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m93" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td mc:edit="m94" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                          <singleline>SHOW MORE</singleline>
                        </a>
                    </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->
              </td>
            </tr>
          </tbody></table>
          <!-- articles-container -->
        </td>
      </tr>
    </tbody></table>
    <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-4.jpg) no-repeat center top; background-color: #e8e8e8; background-size:cover;" mc:repeatable="psd2newsletters" mc:variant="Event" data-module="Event" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-11.jpg">
  <tbody><tr>
    <td class="container-padding" align="center" valign="top">

      <!-- content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m95" class="col" valign="middle" align="center" style="line-height:24px;"> 
            <div style="line-height:24px;">
              <multiline>
                <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">EVENT</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">OF THE MONTH</span>
              </multiline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#c8c8c8;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m96" class="container-padding" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="60" style="font-size:60px;line-height:60px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="mobile-row" valign="middle" align="center" style="background-color:#ffffff;">
            <!-- calendar -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 200px;max-width:200px;background-color:#f08f12;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="200">
                  <!-- text -->
                  <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 200px;max-width:200px;">
                    <tbody><tr>
                      <td mc:edit="m97" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#ffffff;">
                        <div style="line-height:14px;">
                          <singleline>FEBRUARY</singleline>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td mc:edit="m98" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:72px;font-weight:bold;line-height:72px;color:#ffffff;">
                        <div style="line-height:72px;">
                          <singleline>28</singleline>
                        </div>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- text ends -->
                </td>
              </tr>
            </tbody></table>
            <!-- calendar ends-->
            <!-- text -->
            <table width="380" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 380px;max-width:380px;background-color:#ffffff;">
              <tbody><tr>
                <td class="mobile-row" height="200" valign="top">
                  <table width="360" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width:360px;max-width:360px;">
                    <tbody><tr>
                      <td class="col" valign="middle" align="left" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td mc:edit="m99" class="col center-text" valign="middle" align="left" style="line-height:18px;">
                        <div style="line-height:18px;">
                          <multiline>
                            <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;" data-color="Title-1">RESPONSIVE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#f08f12;" data-color="Title-2">LAYOUT</span>
                          </multiline>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="col" valign="middle" align="left" height="5" style="font-size:5px;line-height:5px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td mc:edit="m100" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#666666;">
                        <div style="line-height:12px;">
                          <multiline>RESPONSIVE DESIGN FOR EVERY DEVICE</multiline>
                        </div>
                        </td>
                    </tr>
                    <tr>
                      <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td mc:edit="m101" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:21px;color:#666666;letter-spacing:-0.2px;">
                        <div style="line-height:21px;">
                          <multiline>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</multiline>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="col" valign="middle" align="center">
                        <!-- btn -->
                        <table border="0" cellpadding="0" cellspacing="0" align="left" class="center-float">
                          <tbody><tr>
                            <td mc:edit="m102" valign="middle" align="center"> 
                                <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:14px;color:#f08f12;text-decoration:none;">
                                  <singleline>SHOW MORE</singleline>
                                </a>
                            </td>
                          </tr>
                        </tbody></table>
                        <!-- btn ends-->
                      </td>
                    </tr>
                    <tr>
                      <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="80" style="font-size:80px;line-height:80px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" mc:repeatable="psd2newsletters" mc:variant="Gap" data-module="Gap" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-12.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="2-Columns" data-module="2-Columns" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-13.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- grid-container -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="container-padding" valign="middle" align="center">

      <!-- column-1 -->
      <table width="280" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 280px;max-width:280px;background-color:#f9f9f9;">
        <tbody><tr>
          <td align="center" valign="middle">
            <!-- text -->
            <table width="220" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 220px;max-width:220px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m103" class="col center-text" valign="middle" align="left" style="line-height:18px;">
                  <div style="line-height:18px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;" data-color="Title-1">EDITABLE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#f08f12;" data-color="Title-2">TEMPLATE</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m104" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m105" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>SHOW MORE</singleline>
                          </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
      </tbody></table>
      <!-- column-1 ends-->
      <!-- gap -->
      <table width="2" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 2px;max-width:2px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- gap ends-->

      <!-- column-2 -->
      <table width="280" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 280px;max-width:280px;background-color:#f9f9f9;">
        <tbody><tr>
          <td align="center" valign="middle">
            <!-- text -->
            <table width="220" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 220px;max-width:220px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m106" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;">
                  <div style="line-height:18px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;" data-color="Title-1">RESPONSIVE</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#f08f12;" data-color="Title-2">LAYOUT</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m107" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m108" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>SHOW MORE</singleline>
                          </a>
                        </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
      </tbody></table>
      <!-- column-2 ends-->
          </td>
        </tr>
      </tbody></table>
      <!-- grid-container -->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-2" data-module="Splitter-2" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-14.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">
      <!-- splitter -->
      <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100px;max-width:100px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;"><singleline>&nbsp;</singleline></td>
        </tr>
      </tbody></table>
      <!-- splitter ends-->
    </td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Picture on left" data-module="Picture on left" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-15.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- grid-container -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="container-padding" valign="top" align="center">
            <!-- pict -->
            <table width="300" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 300px;max-width:300px;">
              <tbody><tr>
                <td align="center" valign="middle"><img class="image" style="display:block;" width="300" height="400" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-5.jpg" border="0" mc:edit="m109" editable="true" data-crop="false" label="Pict-1" alt="Pict-1"></td>
              </tr>
              <tr>
                <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- pict ends-->

            <!-- text -->
            <table width="275" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 275px;max-width:275px;">
              <tbody><tr>
                <td mc:edit="m110" class="col center-text" valign="middle" align="left" style="line-height:24px;">
                  <div style="line-height:24px;">
                    <multiline>
                      <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">CREATIVITY IS</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">OUR PASSION</span>
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
              </tr>
              <tr>
                <td mc:edit="m111" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                  <div style="line-height:24px;">
                    <multiline>
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </multiline>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
              </tr>
              <tr>
                <td class="col" valign="middle" align="center">
                  <!-- btn -->
                  <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                    <tbody><tr>
                      <td mc:edit="m112" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                          <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                            <singleline>SHOW MORE</singleline>
                          </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <!-- btn ends-->
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
      </tbody></table>
      <!-- grid-container -->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-3" data-module="Splitter-3" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-16.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">
      <!-- splitter -->
      <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100px;max-width:100px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;"><singleline>&nbsp;</singleline></td>
        </tr>
      </tbody></table>
      <!-- splitter ends-->
    </td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Picture on right" data-module="Picture on right" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-17.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- grid-container -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="container-padding" valign="top" align="center">

      <!-- pict -->
      <table width="300" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 300px;max-width:300px;">
        <tbody><tr>
          <td align="center" valign="middle"><img class="image" style="display:block;" width="300" height="400" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/pict-6.jpg" border="0" mc:edit="m113" editable="true" data-crop="false" label="Pict-2" alt="Pict-2"></td>
        </tr>
        <tr>
          <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- pict ends-->

      <!-- text -->
        <table width="275" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 275px;max-width:275px;">
          <tbody><tr>
            <td mc:edit="m114" class="col center-text" valign="middle" align="left" style="line-height:24px;">
              <div style="line-height:24px;">
                <multiline>
                  <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">GOOD DESIGN IS</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">THE SILENT SELLER</span>
                </multiline>
              </div>
            </td>
          </tr>
          <tr>
            <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
          </tr>
          <tr>
            <td mc:edit="m115" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
              <div style="line-height:24px;">
                <multiline>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </multiline>
              </div>
            </td>
          </tr>
          <tr>
            <td class="col" valign="middle" align="left" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
          </tr>
          <tr>
            <td class="col" valign="middle" align="center">
              <!-- btn -->
              <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                <tbody><tr>
                  <td mc:edit="m116" valign="middle" align="center" width="120" height="40" style="border:1px solid #999999;"> 
                      <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                        <singleline>SHOW MORE</singleline>
                      </a>
                    </td>
                </tr>
              </tbody></table>
              <!-- btn ends-->
            </td>
          </tr>
        </tbody></table>
        <!-- text ends-->

          </td>
        </tr>
      </tbody></table>
      <!-- grid-container -->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-4" data-module="Splitter-4" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-18.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">
      <!-- splitter -->
      <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100px;max-width:100px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;"><singleline>&nbsp;</singleline></td>
        </tr>
      </tbody></table>
      <!-- splitter ends-->
    </td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="3-Columns" data-module="3-Columns" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-19.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- grid-simple -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="container-padding" valign="middle" align="center">

<!-- container-1+2 -->
<table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
  <tbody><tr>
    <td class="col" valign="middle" align="center">

          <!-- column-1 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td mc:edit="m117" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                  <singleline>
                    CREATIVITY
                  </singleline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m118" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m119" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m120" valign="middle" align="left" width="95" height="40"> 
                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                          <singleline>SHOW MORE</singleline>
                        </a>
                      </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->

          <!-- column-2 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td mc:edit="m121" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                <singleline>
                  PRODUCTIVE
                </singleline>
              </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m122" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsam voluptatem.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m123" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m124" valign="middle" align="left" width="95" height="40"> 
                      <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;">
                      <singleline>SHOW MORE</singleline></a> 
                    </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->
    </td>
  </tr>
</tbody></table>
<!-- container-1+2 ends -->

          <!-- column-3 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td mc:edit="m125" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                  <singleline>
                    TECHNOLOGY
                  </singleline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m126" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m127" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m128" valign="middle" align="left" width="95" height="40"> 
                      <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"> 
                        <singleline>SHOW MORE</singleline> 
                      </a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
          </tbody></table>
          <!-- column-3 ends-->
        </td>
      </tr>
    </tbody></table>
    <!-- grid-simple ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-4" data-module="Splitter-5" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-20.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">
      <!-- splitter -->
      <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100px;max-width:100px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;"><singleline>&nbsp;</singleline></td>
        </tr>
      </tbody></table>
      <!-- splitter ends-->
    </td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="3 Columns with icon" data-module="3 Columns with icon" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-21.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- grid-icon -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="container-padding" valign="middle" align="center">

<!-- container-1+2 -->
<table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
  <tbody><tr>
    <td class="col" valign="middle" align="center">

          <!-- column-1 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- title -->
                <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:180px;max-width:180px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="40" height="32"><img style="display:block;" width="32" height="32" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/sm-icon-1.jpg" border="0" mc:edit="m129" editable="true" data-crop="false" label="Icon-1" alt="Icon-1"></td>
                    <td mc:edit="m130" valign="middle" align="left" width="140" height="32" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                      <div style="line-height:16px;">
                        <singleline>
                          RESEARCH
                        </singleline>
                    </div>
                    </td>
                  </tr>
                </tbody></table>
                <!-- title ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m131" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                  </multiline>
              </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m132" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m133" valign="middle" align="left" width="95" height="40"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"><singleline>SHOW MORE</singleline></a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->

          <!-- column-2 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- title -->
                <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:180px;max-width:180px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="40" height="32"><img style="display:block;" width="32" height="32" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/sm-icon-2.jpg" border="0" mc:edit="m134" editable="true" data-crop="false" label="Icon-2" alt="Icon-2"></td>
                    <td mc:edit="m135" valign="middle" align="left" width="140" height="32" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                      <div style="line-height:16px;">
                        <singleline>TIME</singleline>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
                <!-- title ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m136" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsam voluptatem.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m137" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m138" valign="middle" align="left" width="95" height="40"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"> <singleline>SHOW MORE</singleline> </a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->
    </td>
  </tr>
</tbody></table>
<!-- container-1+2 ends -->

          <!-- column-3 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- title -->
                <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:180px;max-width:180px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="40" height="32"><img style="display:block;" width="32" height="32" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/sm-icon-3.jpg" border="0" mc:edit="m139" editable="true" data-crop="false" label="Icon-3" alt="Icon-3"></td>
                    <td mc:edit="m140" valign="middle" align="left" width="140" height="32" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                      <div style="line-height:16px;">
                        <singleline>
                          SCHEDULE
                        </singleline>
                      </div>
                    </td>
                  </tr>
                </tbody></table>
                <!-- title ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m141" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m142" editable="true" data-crop="false" label="More" alt="More"></td> 
                    <td mc:edit="m143" valign="middle" align="left" width="95" height="40"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"><singleline>SHOW MORE</singleline></a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
          </tbody></table>
          <!-- column-3 ends-->
        </td>
      </tr>
    </tbody></table>
    <!-- grid-icon ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-6" data-module="Splitter-6" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-22.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;">
      <!-- splitter -->
      <table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 100px;max-width:100px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="5" style="font-size:5px;line-height:5px;background:#e3e3e3;"><singleline>&nbsp;</singleline></td>
        </tr>
      </tbody></table>
      <!-- splitter ends-->
    </td>
  </tr>
  <tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
</tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="3 Columns with thumb" data-module="3 Columns with thumb" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-23.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- grid-thumb -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="container-padding" valign="middle" align="center">

<!-- container-1+2 -->
<table width="390" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 390px;max-width:390px;">
  <tbody><tr>
    <td class="col" valign="middle" align="center">

          <!-- column-1 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- thumb -->
                <table width="100" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:100px;max-width:100px;">
                  <tbody><tr>
                    <td class="col" valign="middle" align="left" height="80"><img style="display:block;" width="100" height="80" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-4.jpg" border="0" mc:edit="m144" editable="true" data-crop="false" label="Icon-4" alt="Icon-4"></td>
                  </tr>
                </tbody></table>
                <!-- thumb ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m145" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                  <singleline>
                    UNIQUE DESIGN
                  </singleline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m146" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                  </multiline>
                </div>
                </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m147" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m148" valign="middle" align="left" width="95" height="40"> 
                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"><singleline>SHOW MORE</singleline></a>
                    </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->

          <!-- column-2 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- thumb -->
                <table width="100" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:100px;max-width:100px;">
                  <tbody><tr>
                    <td class="col" valign="middle" align="left" height="80"><img style="display:block;" width="100" height="80" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-5.jpg" border="0" mc:edit="m149" editable="true" data-crop="false" label="Icon-5" alt="Icon-5"></td>
                  </tr>
                </tbody></table>
                <!-- thumb ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m150" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                  <singleline>
                    CLEAN CODE
                  </singleline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m151" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsam voluptatem.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m152" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m153" valign="middle" align="left" width="95" height="40"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"><singleline>SHOW MORE</singleline></a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->

    </td>
  </tr>
</tbody></table>
<!-- container-1+2 ends -->

          <!-- column-3 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center">
                <!-- thumb -->
                <table width="100" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:100px;max-width:100px;">
                  <tbody><tr>
                    <td class="col" valign="middle" align="left" height="80"><img style="display:block;" width="100" height="80" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/icon-6.jpg" border="0" mc:edit="m154" editable="true" data-crop="false" label="Icon-6" alt="Icon-6"></td>
                  </tr>
                </tbody></table>
                <!-- thumb ends-->
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m155" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold;line-height:16px;color:#000000;">
                <div style="line-height:16px;">
                  <singleline>
                    PERFORMANCE
                  </singleline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m156" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#666666;">
                <div style="line-height:24px;">
                  <multiline>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </multiline>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center">
                <!-- btn -->
                <table width="120" border="0" cellpadding="0" cellspacing="0" align="left" class="center-float" style="width:120px;max-width:120px;">
                  <tbody><tr>
                    <td valign="middle" align="left" width="25" height="40"><img style="display:block;" width="20" height="20" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/more-icon.jpg" border="0" mc:edit="m157" editable="true" data-crop="false" label="More" alt="More"></td>
                    <td mc:edit="m158" valign="middle" align="left" width="95" height="40"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:12px;color:#f08f12;text-decoration:none;"><singleline>SHOW MORE</singleline></a> </td>
                  </tr>
                </tbody></table>
                <!-- btn ends-->
              </td>
            </tr>
            <tr>
              <td class="mobile-gap" valign="middle" align="center" height="1" style="font-size:1px;line-height:1px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-3 ends-->
        </td>
      </tr>
    </tbody></table>
    <!-- grid-thumb ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Quotes" data-module="Quotes" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-24.jpg">
  <tbody><tr>
    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">

    <!-- quotes -->
    <table width="580" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" data-border-color="Quote" style="width: 580px;max-width:580px; border:10px solid #ededed;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
      </tr>
      <tr> 
        <td class="container-padding" valign="middle" align="center"><img style="display:block;" width="80" height="60" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/quotes.jpg" border="0" mc:edit="m159" editable="true" data-crop="false" label="Quotes" alt="Quotes"></td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table width="400" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 400px;max-width:400px;">
            <tbody><tr>
              <td mc:edit="m160" class="container-padding" valign="middle" align="center" data-color="Quote text" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;font-style: italic;line-height:24px;color:#333333;">
                <div style="line-height:24px;">
                  <multiline>
                    Don’t try and reinvent the wheel – just work on making it better than anyone else.
                  </multiline>
                </div>
              </td>
            </tr>
          </tbody></table>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m161" class="container-padding" valign="middle" align="center" data-color="Quote author" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#f08f12;">
          <div style="line-height:14px;">
            <singleline> — DAVID A. STUEBE </singleline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- quotes ends-->
      </td>
    </tr>
    <tr>
      <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
    </tr>
  </tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Clients" data-module="Clients" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-25.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- content -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m162" class="col center-text" valign="middle" align="center" style="line-height:24px;">
          <div style="line-height:24px;">
            <multiline>
              <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">OUR</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">CLIENTS</span>
            </multiline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#c8c8c8;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="clients" valign="middle" align="center">
          <!-- logos-container -->
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
            <tbody><tr>
              <td valign="middle" align="center"><img style="display:block;" width="100" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/company-logo-1.jpg" border="0" mc:edit="m163" editable="true" data-crop="false" label="Logo-1" alt="Logo-1"></td>
              <td valign="middle" align="center"><img style="display:block;" width="100" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/company-logo-2.jpg" border="0" mc:edit="m164" editable="true" data-crop="false" label="Logo-2" alt="Logo-2"></td>
              <td valign="middle" align="center"><img style="display:block;" width="100" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/company-logo-3.jpg" border="0" mc:edit="m165" editable="true" data-crop="false" label="Logo-3" alt="Logo-3"></td>
              <td valign="middle" align="center"><img style="display:block;" width="150" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/company-logo-4.jpg" border="0" mc:edit="m166" editable="true" data-crop="false" label="Logo-4" alt="Logo-4"></td>
            </tr>
          </tbody></table>
          <!-- logos-container -->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-5.jpg) no-repeat center top; background-color:#464646; background-size:cover;" mc:repeatable="psd2newsletters" mc:variant="Purchase" data-bg="Purchase background image" data-module="Purchase" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-26.jpg">
  <tbody><tr>
    <td align="center" valign="top">

      <!-- content -->
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="force-row" style="width: 600px;max-width:600px;">
        <tbody><tr>
          <td class="col" valign="middle" align="center" height="100" style="font-size:100px;line-height:100px;">&nbsp;</td>
        </tr>
        <tr>
          <td mc:edit="m167" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#ffffff;">
            <div style="line-height:24px;">
              <singleline>
                DO YOU LIKE ME?
              </singleline>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
            <!-- line -->
            <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
              <tbody><tr>
                <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#ffffff;">&nbsp;</td>
              </tr>
            </tbody></table>
            <!-- line ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="container-padding" valign="middle" align="center">
            <!-- text -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
              <tbody><tr>
                <td mc:edit="m168" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:24px;color:#ffffff;">
                  <div style="line-height:24px;">
                    <multiline>
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </multiline>
                  </div>
                </td>
              </tr>
            </tbody></table>
            <!-- text ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center">
            <!-- btn -->
            <table width="160" border="0" cellpadding="0" cellspacing="0" align="center" style="width:160px;max-width:160px;">
              <tbody><tr>
                <td mc:edit="m169" class="col" valign="middle" align="center" height="60" style="border:1px solid #ffffff;"> <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;line-height:24px;color:#ffffff;text-decoration:none;"><singleline>Get me now!</singleline></a> </td>
              </tr>
            </tbody></table>
            <!-- btn ends-->
          </td>
        </tr>
        <tr>
          <td class="col" valign="middle" align="center" height="100" style="font-size:100px;line-height:100px;">&nbsp;</td>
        </tr>
      </tbody></table>
      <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Socials" data-module="Socials" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-27.jpg">
  <tbody><tr>
    <td align="center" valign="top">

    <!-- content -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m170" class="col center-text" valign="middle" align="center" style="line-height:24px;">
          <div style="line-height:24px;">
            <multiline>
              <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">FOLLOW</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">US</span>
            </multiline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#f08f12;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center">
          <!-- socials-container -->
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
            <tbody><tr> 
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/fb-big.png" border="0" mc:edit="m171" editable="true" data-crop="false" label="Facebook" alt="Facebook"></a></td>
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/gp-big.png" border="0" mc:edit="m172" editable="true" data-crop="false" label="Google +" alt="Google +"></a></td>
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/in-big.png" border="0" mc:edit="m173" editable="true" data-crop="false" label="Instagram" alt="Instagram"></a></td>
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/ln-big.png" border="0" mc:edit="m174" editable="true" data-crop="false" label="LinkedIn" alt="LinkedIn"></a></td>
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/tw-big.png" border="0" mc:edit="m175" editable="true" data-crop="false" label="Twitter" alt="Twitter"></a></td>
              <td valign="middle" align="center"><a href="#"><img style="display:block;" width="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/yt-big.png" border="0" mc:edit="m176" editable="true" data-crop="false" label="You Tube" alt="You Tube"></a></td>
            </tr>
          </tbody></table>
          <!-- socials-container -->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- content ends-->

    </td></tr></tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Contact" data-module="Contact" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-28.jpg">
  <tbody><tr>
    <td class="container-padding" align="center" valign="top">

    <!-- contact -->
    <table width="592" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 592px;max-width:592px; border:4px dashed #e3e3e3;">
      <tbody><tr>
        <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
      </tr>
      <tr>
        <td mc:edit="m177" class="col center-text" valign="middle" align="center" style="line-height:24px;">
          <div style="line-height:24px;">
            <multiline>
              <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">CONTACT</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#f08f12;" data-color="Title-2">US</span>
            </multiline>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;">
          <!-- line -->
          <table width="200" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 200px;max-width:200px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#f08f12;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- line ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="25" style="font-size:25px;line-height:25px;">&nbsp;</td>
      </tr>
      <tr>
        <td class="col" valign="top" align="center">

<!-- container-1+2 -->
<table width="382" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 382px;max-width:382px;">
  <tbody><tr>
    <td class="col" valign="middle" align="center">

          <!-- column-1 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/location.png" border="0" mc:edit="m178" editable="true" data-crop="false" label="Location" alt="Location"></td>
            </tr>
            <tr>
              <td mc:edit="m179" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                <div style="line-height:18px;">
                  <multiline>
                  Adress Name St. 63, <br>
                  City Name, State <br>
                  Country Name
                </multiline>
              </div>
              </td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->

          <!-- column-2 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/mobile.png" border="0" mc:edit="m180" editable="true" data-crop="false" label="Mobile" alt="Mobile"></td>
            </tr>
            <tr>
              <td mc:edit="m181" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                <div style="line-height:18px;">
                  <multiline>
                    +30 123 456789 <br>
                    +44 987 654321
                  </multiline>
                </div>
              </td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->
    </td>
  </tr>
</tbody></table>
<!-- container-1+2 ends -->

          <!-- column-3 -->
          <table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/images/global.png" border="0" mc:edit="m182" editable="true" data-crop="false" label="Global" alt="Global"></td>
            </tr>
            <tr>
              <td mc:edit="m183" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                <div style="line-height:18px;">
                  <multiline>
                    <a href="#" style="color:#666666;text-decoration:none;">info@domain.com</a> <br>
                    <a href="#" style="color:#666666;text-decoration:none;">www.domain.com </a>
                  </multiline>
                </div>
              </td>
            </tr>
          </tbody></table>
          <!-- column-3 ends-->
        </td>
      </tr>
      <tr>
        <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <!-- contact ends-->
    </td></tr><tr>
      <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
    </tr>
  </tbody></table><table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" data-module="Copyrights" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-29.jpg">
  <tbody><tr>
    <td class="container-padding" align="center" valign="top">

    <!-- copyrights -->
    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
      <tbody><tr>
        <td class="col" valign="top" align="center">
          <!-- column-1 -->
          <table width="290" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 290px;max-width:290px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m184" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                <singleline>© 2015 Copyright.  All rights reserved.</singleline>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-1 ends-->
          <!-- column-2 -->
          <table width="290" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 290px;max-width:290px;">
            <tbody><tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
            <tr>
              <td mc:edit="m185" class="col center-text" valign="middle" align="right" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
                <a href="sr_unsubscribe" style="color:#666666;text-decoration:none;">Unsubscribe</a>   -   <a href="sr_view_online" style="color:#666666;text-decoration:none;">Web view</a>
              </td>
            </tr>
            <tr>
              <td class="col" valign="middle" align="center" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
            </tr>
          </tbody></table>
          <!-- column-2 ends-->
        </td>
      </tr>
    </tbody></table>
    <!-- copyrights ends-->
    </td></tr><tr>
      <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
    </tr>
  </tbody></table>					
			
				
				</div>
				
			</div>
			
			
		</div>
		
	</div>
	
</body>
</html>