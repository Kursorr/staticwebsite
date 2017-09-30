var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/monster');

var db = mongoose.connection;

exports.mongoose = mongoose;
