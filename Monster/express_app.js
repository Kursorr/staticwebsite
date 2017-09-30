var express = require('express');
var app = express();

app.use(express.static(__dirname + '/public'));
app.set('views', __dirname + '/views');
app.set('view engine','jade');

exports.app = app;