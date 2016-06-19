var io = require('socket.io'), //we require a basic socket app
	connect = require('connect'), //we require this for making tcp connection
	serveStatic = require('serve-static'); //we require this for serving static files

var app = connect().use(serveStatic('../../../modules/chat/')).listen(3000); //we initialize our application to sarve public folder content and listen to port 3000
var chat_room = io.listen(app); // we create chat object and direct socket.io to listen to the application above

// we start application with connection parameter
chat_room.sockets.on('connection', function (socket) {

//on entrace function, we push message that we start
    socket.emit('entrace', {message: 'Welcome in Inets Chat'});

    //on disconnection, we trigger a message also
    socket.on('disconnect', function () {
	chat_room.sockets.emit('exit', {message: ' Agent leave'});
    });
    //chat messages will flow here
    socket.on('chat', function (data) {
	chat_room.sockets.emit('chat', {message: data.message, id: data.id,username:data.username});
    });
    //when user update information or changes happens in any place, we need to update user interfaces without reloading
    socket.on('update', function (data) {
	chat_room.sockets.emit('update', data);
    });
    
    
    //when new charter is online, we fire message to other chatter 
    chat_room.sockets.emit('entrace', {message: 'Agent is online'});
});
