var return_div = '#habla_offline_message_span';
var submit_id = '#habla_pre_chat_submit_input';
var inets_chat = {
    init: function () {
	$(submit_id).mousedown(function () {
	    var name = $('#habla_name_input').val();
	    var email = $('#habla_offline_email_input').val();
	    var message = $('#habla_offline_body_input').val();
	    $.ajax({
		url: url,
		method: 'POST',
		dataType: 'JSON',
		data: {pg: 'chat', process: 'chat',
		    method: 'init', name: name,
		    email: email, message: message},
		success: function (data) {
		    console.log(data);
		    if (data.status == '1') {
			inets_chat.load_chat(data.message);
			$('#chat_message_list').before('<li style="padding:0.5em; background: #f9f8f8; border-bottom:1px solid #CCC; list-style: none;"><span style="color: #17ade0;">' + data.username + '</span><br/>' + data.message + '</li>');
		    } else {
			$(return_div).html(data.message).addClass('alert alert-error');
		    }
		},
		error: function (xhr) {

		}
	    });
	});
    },
    load_chat: function (message) {
	$('.register-area').hide();
	$(return_div).html(message);
	$('#habla_offline_body_input').val('');
	$('#habla_offline_message_span').hide();
//	var messages = '';
//	$.getJSON(url, {pg: 'chat', process: 'chat', method: 'get_chats'}, function (data) {
//	    console.log(data);
//	    var item = data;
//	    $.each(item, function (i, val) {
//		messages += '<li>' + val.message + '</li>';
//	    });
//	    $('#chat_message_list').before(messages);
//	});
    },
    do_chat: function () {

//we create a socket object here
	var socket = io.connect('http://localhost:3000');
//define entrace method fired with emit in server.js file

	socket.on('entrace', function (data) {
	    document.write('<p>' + data.message + '</p>');
	});
//we fire message to a user when someone exit the chat
	socket.on('exit', function (data) {
	    document.write('<p>' + data.message + '</p>');
	});
//chat messages load here
	socket.on('chat', function (data) {
	    document.write('<p>' + data.message + '</p>');
	});
    }


};
//inets_chat.init();

