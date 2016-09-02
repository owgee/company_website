<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="telephone=no" />					
	<title>
	    Inets Email letter
	</title>
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
    </head>

    <body>

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


			<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: url(http://www.anto.gr/projects/testing/pict-background-4.jpg) no-repeat center top; background-color: #e8e8e8; background-size:cover;" mc:repeatable="psd2newsletters" mc:variant="Event" data-module="Event" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-11.jpg">
			    <tbody>
				<tr>
				    <td class="container-padding" align="center" valign="top">

					<!-- content -->
					<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 600px;max-width:600px;">
					    <tbody>
						<tr>
						    <td class="col" valign="middle" align="center" height="45" style="font-size:45px;line-height:45px;">&nbsp;</td>
						</tr>
						<tr>
						    <td mc:edit="m95" class="col" valign="middle" align="center" style="line-height:24px;"> 
							<div style="line-height:24px;">
							    <multiline>
								<span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">TANZANIA </span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#45c1e8;" data-color="Title-2">GENERAL ELECTION</span>
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
										The only opportunity for you to practice your democracy and choose your leader.
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
							<table width="200" border="0" cellpadding="0" cellspacing="0" align="left" class="mobile-row" style="width: 200px;max-width:200px;background-color:#45c1e8;">
							    <tbody><tr>
								    <td class="col" valign="middle" align="center" height="200">
									<!-- text -->
									<table width="200" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile-row" style="width: 200px;max-width:200px;">
									    <tbody><tr>
										    <td mc:edit="m97" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:14px;color:#ffffff;">
											<div style="line-height:14px;">
											    <singleline>OCTOBER</singleline>
											</div>
										    </td>
										</tr>
										<tr>
										    <td mc:edit="m98" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:72px;font-weight:bold;line-height:72px;color:#ffffff;">
											<div style="line-height:72px;">
											    <singleline>25</singleline>
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
												<span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#666666;" data-color="Title-1">SPECIAL</span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:normal;line-height:18px;color:#45c1e8;" data-color="Title-2">WISH</span>
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
											    <multiline>From: INETS COMPANY LIMITED</multiline>
											</div>
										    </td>
										</tr>
										<tr>
										    <td class="col" valign="middle" align="left" height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
										</tr>
										<tr>
										    <td mc:edit="m101" class="col center-text" valign="middle" align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:normal;line-height:21px;color:#666666;letter-spacing:-0.2px;">
											<div style="line-height:21px;">
											    <multiline>We wish you  peaceful day with much blessings from GOD when you take a step ahead of maintaining peace and love and choose your best leader for another 5 years.<br/>
												May God BLESS TANZANIA and BLESS AFRICA</multiline>
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
													<a href="www.inetstz.com" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:bold;line-height:14px;color:#45c1e8;text-decoration:none;">
													    <singleline>KNOW US HERE</singleline>
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
				</tr></tbody></table>
			<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Splitter-4" data-module="Splitter-4" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-18.jpg">
			    <tbody>
				<tr>
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
			    </tbody></table>

			<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" mc:repeatable="psd2newsletters" mc:variant="Contact" data-module="Contact" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-28.jpg">
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
								<span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#666666;" data-color="Title-1">OUR </span> <span style="display:inline-block;font-family:Arial,Helvetica,sans-serif;font-size:24px;font-weight:bold;line-height:24px;color:#45c1e8;" data-color="Title-2"> CONTACT</span>
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
								    <td class="col" valign="middle" align="center" height="2" style="font-size:2px;line-height:2px;background:#45c1e8;">&nbsp;</td>
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
									    <tbody>
										<tr>
										    <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://inetstz.com/media/email/location.png" border="0" mc:edit="m178" editable="true" data-crop="false" label="Location" alt="Location"></td>
										</tr>
										<tr>
										    <td mc:edit="m179" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
											<div style="line-height:18px;">
											    <multiline>
												Block 11, Bima Road <br>
												    Mikocheni B, Dar es salaam <br>
													Tanzania
													</multiline>
													</div>
													</td>
													</tr>
													</tbody></table>
													<!-- column-1 ends-->

													<!-- column-2 -->
													<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
													    <tbody><tr>
														    <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://inetstz.com/media/email/phone.png" border="0" mc:edit="m180" editable="true" data-crop="false" label="Mobile" alt="Mobile"></td>
														</tr>
														<tr>
														    <td mc:edit="m181" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
															<div style="line-height:18px;">
															    <multiline>
																+255 222 780 228 <br>
																    +255 655 406 004 
															    </multiline>
															</div>
														    </td>
														</tr>
													    </tbody></table>
													<!-- column-2 ends-->
													</td>
													</tr>
													</tbody>
													</table>
													<!-- container-1+2 ends -->

													<!-- column-3 -->
													<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile-row" style="width: 180px;max-width:180px;">
													    <tbody><tr>
														    <td class="col" valign="middle" align="center" height="50"><img style="display:block;" width="30" height="40" src="http://inetstz.com/media/email/global.png" border="0" mc:edit="m182" editable="true" data-crop="false" label="Global" alt="Global"></td>
														</tr>
														<tr>
														    <td mc:edit="m183" class="col" valign="middle" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:normal;line-height:18px;color:#666666;">
															<div style="line-height:18px;">
															    <multiline>
																<a href="mailto: info@inetstz.com" style="color:#666666;text-decoration:none;">info@inetstz.com</a> <br>
																    <a href="www.inetstz.com" style="color:#666666;text-decoration:none;">www.inetstz.com </a>
															    </multiline>
															</div>
														    </td>
														</tr>
													    </tbody>
													</table>
													<!-- column-3 ends-->
													</td>
													</tr>
													<tr>
													    <td class="col" valign="middle" align="center" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
													</tr>
													</tbody>
													</table>
													<!-- contact ends-->
													</td></tr><tr>
													    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
													</tr>
													</tbody></table>
													<table border="0" width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff;" data-module="Copyrights" data-thumb="http://www.stampready.net/dashboard/zip_uploads/2015/09/22/4VzsHi8roLI7tM3Ydf0v1X9D/EmailComet/thumbnails/thumb-29.jpg">
													    <tbody>
														<tr>
														    <td class="container-padding" align="center" valign="top">


															<!-- copyrights ends-->
														    </td></tr>
														<tr>
														    <td class="col" valign="middle" align="center" height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
														</tr>
													    </tbody>
													</table>					


													</div>

													</div>


													</div>

													</div>
													</body>
													</html>
													<?php
$body = ob_get_clean();
echo $body;
//echo mail('swillae1@gmail.com,ephraim@inetstz.com', 'testing', $body);
//$headers = 'From: Inets Company Limited <info@inetstz.com>' . "\r\n";
//$headers .= "X-Mailer: PHP/" . phpversion() . "\n";
//$headers .= "MIME-Version: 1.0\n";
//$headers .= "Content-Type: text/html; charset=iso-8859-1";
//
//$emails = 'swillae1@gmail.com,amani@inetstz.com,ephraim@inetstz.com,owdeng@gmail.com,ynasson@gmail.com,gwanchi@gmail.com,akhakoo@kkcompany.co.tz,sales@darcity.net,matilda.kasanga@tbs.go.tz,ealbin@nhif.or.tz,sales@mediawala.com,deerugem@gmail.com,habir.abdi@tbs.go.tz,opil.marketing1@bakhresa.com,ca@ardhi.go.tz,dooreachgroup@gmail.com,simbeye@tpsftz.org,alluthe.nungu@nmbtz.com,michael.misabo@nmbtz.com,msangi@bnytechnology.com,bmgonja@tz.kcbbankgroup.com,nyamubik@gmail.com,henry.baghayo@boatanzania.com,benedict@spicenet.co.tz,bilateralcoltd@gmail.com,jahfashion@hotmail.com,nasriya@lifestyletz.com,mukangaraf@yahoo.com,waziri@hum.go.tz,bjbtz@yahoo.com,bdm@teknohama.or.tz,frank.bilauri@ttcl.co.tz,padzhotel@yahoo.com,malphonce@vodacom.co.tz,khadijaeld@yahoo.com,gnambaya@vodacom.co.tz,clive@earetail.com,alexandra.cairns@ccbrt.or.tz,mwenze@tccia.com,derickmsuya56@gmail.com,gnrcafrica@bol.co.tz,asimba@nhctz.com,ftewele@vodacom.co.tz,amanikyala@gmail.com,haidarysalum2@gmail.com,easterncapitalltd1@gmail.com,essencetz@gmail.com,thomaskicko@gmail.com,info@saigroup.co.tz,tunnu.mssika@tz.airtel.com,raskisimani@gmail.com,coleta.mnyawani@gmail.com,bcalvi@worldbank.org,fqwaray@tz.kcbbankgroup.com,aicaeli@yahoo.compicnichotels@gmail.com';
//
//$array = explode(',', $emails);
//foreach ($array as $value) {
//    echo mail($value, "Special Wish For Tanzania General Election", $body, $headers);
//}
													?>