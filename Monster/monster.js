var mongoose = require('./bdd.js').mongoose;

var monsterSchema = mongoose.Schema({
	name: String,
	desc: String,
	lvl: Number
});

var Monster = mongoose.model('Monster', monsterSchema);

exports.Monster = Monster;