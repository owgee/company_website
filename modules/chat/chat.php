<?php

class Chat extends Inets {

    public $chat_user_id;

    public function __construct() {
	parent::__construct();
	$this->chat_user_id = isset($_SESSION['chat_username']) ? $_SESSION['chat_user_id'] : '';
	$this->index();
    }

    public function index() {
	if (!empty($this->chat_user_id)) {
	    $message = $this->input->get_post('message');
	    $this->save_message($message);
	    echo $this->chat_user_id;
	}
    }

    public function init() {
	$name = $this->input->get_post('name');
	$email = $this->input->get_post('email');
	$message = $this->input->get_post('message');
	if (!isset($_SESSION['chat_username']) && isset($_SESSION['chat_user_id'])) {
	    $this->update_user($name, $email);
	    $this->save_message($message);
	} else {
	    $result = $this->save_user($name, $email);
	    if ($result) {
		//save message in a db now
		$this->save_message($message);
	    } else {
		die(json_encode(array('status' => 0, 'message' => 'Problem  occurs, please refresh')));
	    }
	}
    }

    public function save_user($name, $email) {
	if (empty($name)) {
	    die(json_encode(array('status' => 0, 'message' => 'Name field is not correct')));
	    //} 
	    //else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    //  die(json_encode(array('status' => 0, 'message' => 'Email field is not correct')));
	} elseif (empty($this->chat_user_id) && isset($_SESSION['chat_user_id'])) {
	    //this user is already in a database, so update records
	    $this->update_user($name, $email);
	} else {
	    $user = user::find_where(array('email' => $email));
	    if (empty($user)) {
		$this->db->insert('user', array(
		    'username' => ucfirst($name),
		    'type' => 1,
		    'email' => $email
		));
		$_SESSION['chat_user_id'] = $this->db->id();
		$_SESSION['chat_username'] = ucfirst($name);
		$this->chat_user_id = $_SESSION['chat_user_id'];
	    } else {
		$user_info = array_shift($user);
		$_SESSION['chat_user_id'] = $user_info->id;
		$_SESSION['chat_username'] = ucfirst($name);
		$this->chat_user_id = $_SESSION['chat_user_id'];
	    }
	    return TRUE;
	}
    }

    public function update_user($name, $email) {
	//first check if this email exist, if not, save it, otherwise update that table
	$user_info = user::find_where(array('email' => $email));
	if (!empty($user_info)) {
	    //this email is in a database, so just update it
	    $this->db->update('user', array('username' => $name, 'is_online' => 1), array('email' => $email));
	    $user = array_shift($user_info);
	    $user_id = $user->id;
	} else {
	    $this->db->update('user', array('username' => $name, 'email' => $email, 'is_online' => 1), array('id' => $_SESSION['chat_user_id']));
	    $user_id = $_SESSION['chat_user_id'];
	}
	$_SESSION['chat_username'] = ucfirst($name);
	$this->chat_user_id = $user_id;
	return TRUE;
    }

    public function save_message($message) {

	if (!empty($message)) {
	    $this->db->insert('chat_message', array(
		'from_id' => 31,
		'to_id' => '',
		'message' => $message
	    ));
	    die(json_encode(array(
		'status' => 1,
		'message' => $message,
		'chat_id' => $this->db->id(),
		'chat_user_id' => $this->chat_user_id,
		'username' => $_SESSION['chat_username']
	    )));
	} else {
	    die(json_encode(array(
		'status' => 0,
		'message' => 'message cannot be empty'
	    )));
	}
    }

    public function save_guest() {
	$session_id = $this->input->get_post('session_id');
	$user = user::find_where(array('session_id' => $session_id));
	if (empty($user)) {
	    $username = 'Guest' . rand(125, 999);
	    $this->db->insert('user', array(
		'username' => $username,
		'type' => 1,
		'email' => $username . '@inetstz.com',
		'session_id' => $session_id
	    ));
	    //we start only the chat_user_id session for consistency, but we do not set a session username 
	    $_SESSION['chat_user_id'] = $this->db->id();
	    return TRUE;
	} else {
	    return FALSE;
	}
    }

    function get_id() {
	echo $this->chat_user_id;
    }

    public function update_online_status() {
	$this->db->update('user', array('is_online' => 0), array('id' => $_SESSION['chat_user_id']));
	$this->chat_user_id = $_SESSION['chat_user_id'];
	return TRUE;
    }

}
