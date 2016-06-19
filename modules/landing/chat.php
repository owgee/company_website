<?php
css_media('chat');
//session_destroy();
@session_start();
?>
<tag>
    <div id="habla_beta_container_do_not_rely_on_div_classes_or_names"  class="habla-browser-chrome habla-desktop olrk-noquirks ">
	<div id="hbl_operator_state_div" class="olrk-away">
	    <div id="hbl_region" class="olrk-normal">
		<div id="habla_window_state_div" class="olrk-state-expanded">
		    <div id="habla_window_div" style="margin: 0px 20px; bottom: 0px; right: 0px;  position: fixed;" class="habla_window_div_base hbl_pal_main_width olrk-fixed-bottom olrk-fixed-right ">
			<div id="habla_compressed_div" style=""></div><div id="habla_panel_div" class="habla_panel_border hbl_pal_main_bg hbl_pal_panel_border hbl_pal_main_font_family hbl_pal_main_font_size " style="display: block;"><div id="habla_both_div" style="display: block;">
				<div id="habla_topbar_div" onclick="$('#habla_expanded_div').toggle()" class="habla_topbar_div_normal hbl_pal_title_fg hbl_pal_title_bg habla_topbar_div_compressed "><a id="habla_sizebutton_a" class="habla_button habla_button_a_normal hbl_pal_header_font_size hbl_pal_button_bg " style="background:#FFF; color: #000000;">_</a><a id="habla_oplink_a" class="habla_oplink_a_normal hbl_pal_header_font_size hbl_pal_title_fg ">Chat with us!</a></div></div>
			    <div id="habla_expanded_div">
				<div id="habla_middle_div">
				    <div id="habla_middle_wrapper_div">
					<span id="habla_offline_message_span"></span>
					<div id="habla_offline_message_div" class="hbl_panel habla_offline_message_div hbl_pal_control_border hbl_pal_main_fg " style="display: block;">
					    <div class="package-detail">
						<ul class="list-unstyled"  style="display: block;max-height: 14em; overflow: scroll; overflow-x:hidden; ">
						    <span id="chat_message_agent_notify"></span></ul></div>
					    <?php
					    if (!isset($_SESSION['chat_username'])) {
						?>

    					    <div class="register-area">
    						<div class="hbl_txt_wrapper">
    						    <textarea id="habla_name_input" name="habla_name_input" class="habla_wcsend_field habla_wcsend_input_pre habla_wcsend_input_normal hbl_pal_input_pre_fg hbl_pal_main_font_family hbl_pal_input_font_size hbl_pal_control_border " placeholder="Your Name" style="height: 20px; display: block;"></textarea>
    						</div>
    						<div class="hbl_txt_wrapper">
    						    <input id="habla_offline_email_input" name="habla_name_input" class=" habla_wcsend_input_normal  hbl_pal_control_border" placeholder="Your Email" style="height: 20px; display: block;"/>    

    						</div>
    					    </div>
						<?php
					    } else {
						$messages = chat_message::find_by_sql("SELECT c.id,c.from_id,c.to_id,c.message,c.sent_time,c.status,u.username,u.type FROM `chat_message` c left join user u ON (c.from_id = u.id) left join user a on (c.to_id = a.id) WHERE from_id=" . $_SESSION['chat_user_id'] . " OR to_id=" . $_SESSION['chat_user_id'] . " ORDER BY c.id ASC");
						?>
    					    <div class="package-detail">
    						<ul class="list-unstyled"  style="display: block;max-height: 14em; overflow: scroll; overflow-x:hidden; ">
							<?php foreach ($messages as $message) { ?>

							    <li style="padding:0.5em; <?= $message->type == 1 ? 'background: #f9f8f8;' : 'background: #ffffff;' ?> border-bottom:1px solid #CCC; list-style: none;">
								<span style="color: #17ade0;"><?= $message->username ?></span><br/>
								<?= $message->message ?>
							    </li>
							<?php } ?>
    						    <span id="chat_message_list"></span>
    						</ul>
    					    </div>
					    <?php } ?>



					    <div class="hbl_txt_wrapper">
						<textarea id="habla_offline_body_input" name="habla_offline_body_input" class="habla_wcsend_field habla_wcsend_input_pre habla_wcsend_input_normal hbl_pal_input_pre_fg hbl_pal_main_font_family hbl_pal_input_font_size hbl_pal_control_border " placeholder="Let us know your need" style="height: 35px; display: block; margin-right: 1em;"></textarea>
					    </div>
					    <span id="habla_offline_error_span" class="habla_offline_error_span "></span>

					    <div id="habla_offline_clear_div" class="clear_style "></div>

					</div>
					<input id="habla_pre_chat_submit_input" name="habla_pre_chat_submit_input" type="submit" class="habla_pre_chat_form_field habla_offline_submit_input hbl_pal_offline_submit_fg hbl_pal_control_border hbl_pal_offline_submit_bg " value="<?php echo!isset($_SESSION['chat_username']) ? 'Click here to start chatting' : 'Send'; ?>">

				    </div>
				</div>

			    </div>
			</div>

		    </div>

		</div>

	    </div>

	</div>
    </div>
</tag>
<?php
js_media('chat');
//check here if chat_user_id is active, if not, save this user in a database as a gues
$chat_user_id = isset($_SESSION['chat_user_id']) ? $_SESSION['chat_user_id'] : '';
$chat_username = isset($_SESSION['chat_username']) ? $_SESSION['chat_username'] : '';
?>
<input type="hidden" value="<?= $_SESSION['chat_user_id'] ?>" id="chat_user_id"/>
<script  type="text/javascript" charset="utf-8">

    var id = '<?= $_SESSION['chat_user_id'] ?>'; //we will later get this ID from cookie
    var username = '<?= $chat_username ?>';


    //we create a socket object here
    var socket = io.connect('http://localhost:3000');

//let us check if this user is already registered with us or not. If not, we keep him/her as a guest
    if (username === '') {
	//alert('we save this as a guest');
	//this user is empty and is not registered for chat, so we save him
	$.get(url, {pg: 'chat', file: 'chat', method: 'save_guest', session_id: '<?= session_id() ?>'}, function (data) {
	    console.log(data);
	    if (data === 1) {
		socket.emit('update', {session_id: '<?= session_id() ?>'});
	    }
	});
    }
    //define entrace method fired with emit in server.js file

    socket.on('entrace', function (data) {
	$('#habla_offline_message_span').html('<p>' + data.message + '</p>');
    });

    //we fire message to a user when someone exit the chat
    socket.on('exit', function (data) {
	$('#chat_message_list').html('<p>' + data.message + '</p>');
	$.get(url, {pg: 'chat', file: 'chat', method: 'update_online_status', session_id: '<?= session_id() ?>'}, function (data) {
	    if (data === 1) {
		socket.emit('update', {offile: '1', id: id});
	    }
	});
    });

    //chat messages load here
    socket.on('chat', function (data) {
	//we here detect a message come, if it has the ID of the cookie, then we show it
	//otherwise we hide this
	//this message will only be shown to the intended client, not anyone else
	var tag = data.username == username ? 'background: #f9f8f8;' : '';
	if (data.id === id) {
	    $('#chat_message_list').append('<li style="padding:0.5em; ' + tag + '  border-bottom:1px solid #CCC; list-style: none;"><span style="color: #17ade0;">' + data.username + '</span><br/>' + data.message + '</li>');
	}
	if (username == '') {
	    $('#chat_message_agent_notify').append('<li style="padding:0.5em; ' + tag + '  border-bottom:1px solid #CCC; list-style: none;"><span style="color: #17ade0;">' + data.username + '</span><br/>' + data.message + '</li>');
	}
    });
    _chat = function () {
	$('#habla_pre_chat_submit_input').click(function () {
	    var message = $('#habla_offline_body_input').val();
	    //you should here send a message, chatter ID, and destination ID here

	    if (username == '') {
		//user is not yet login or submitted his/her information
		var name = $('#habla_name_input').val();
		var email = $('#habla_offline_email_input').val();
		var message = $('#habla_offline_body_input').val();
		//save message in a database for later retrieval
		$.ajax({
		    url: url,
		    method: 'POST',
		    dataType: 'JSON',
		    data: {pg: 'chat', file: 'chat',
			method: 'init', name: name,
			email: email, message: message},
		    success: function (data) {
			if (data.status == '1') {
			    socket.emit('chat', {message: message, id: data.chat_user_id, username: data.username});
			    $('.register-area').hide();
			    $('#habla_offline_body_input').val('');
			    $('#habla_offline_message_span').hide();
			    $('#habla_pre_chat_submit_input').val('Send');
			} else {
			    $('#habla_offline_message_span').html(data.message).addClass('alert alert-error');
			}
		    }
		});
	    } else {
		//save message in a database for later retrieval
		$.getJSON(url, {pg: 'chat', file: 'chat', method: 'index', message: message}, function (data) {
		    socket.emit('chat', {message: message, id: data.chat_user_id, username: username});
		});
	    }

	    $('#habla_offline_body_input').val('');

	});
    }
    $(document).ready(_chat);

</script>