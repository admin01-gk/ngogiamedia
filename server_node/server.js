var io = require('socket.io')(6000)
console.log('Connected')
io.on('error', function(socket) {
    console.log('error')
})
io.on('connection', function(socket) {
    console.log('co nguoi dang nhap' + socket.id)
})
var redis = require('ioredis')
var redis = new redis(1000)
redis.on('pmessages', function(partner, channel, messages) {
    console.log(channel)
    console.log(messages)
    console.log(partner)
})