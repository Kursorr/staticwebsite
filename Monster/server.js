var app = require('./express_app.js').app;
var Monster = require('./monster.js').Monster;
var bodyParser  = require('body-parser');

app.use(function(req, res, next){
	req.db_monster = Monster;
	next();
});

app.use(bodyParser.urlencoded({extended: false}))

app.get('/', function(req, res){
	res.render('index');
});

app.get('/liste_monsters', function(req, res){
	req.db_monster.find({},{},function(err, resultat){
		if(err){
			console.log(err);
		}
		else{
			console.log(resultat);
			res.render('liste_monsters', {monsters:resultat});
		}
	});
});

app.get('/new_monster', function(req, res){
	res.render('new_monster');
});

app.get('/monster/:id', function(req, res){
	req.db_monster.find({_id:req.params.id},{}, function(err, resultat){
		if(err){
			console.log(err);
		}
		else{
			res.render('profil', {monster:resultat});
		}
	});
});

app.post('/create_monster', function(req, res){
	var monster = new req.db_monster({
		name: req.body.name,
		desc: req.body.desc,
		lvl: parseInt(req.body.lvl, 10)
	});
	monster.save(function(err, resultat){
		if(err){
			console.log(err);
		}
		else{
			res.redirect('liste_monsters');
		}
	});
});

app.route('/:id/edit_monster')
	.get(function(req, res){
		Monster.findById(req.params.id, function(err, result){
			if(result == null || result.length <= 0){
				console.log("Impossible de charger le monstre");
			}else{
				console.log("Putain de successful", result._id);
				res.render('edit_monster', {monster:result});
			}
		})
	})

	.post(function(req, res){
		name = req.body.name;
		lvl = req.body.lvl;
		desc = req.body.desc;

		Monster.findOneAndUpdate({_id:req.params.id}, req.body, function(err, Monster){
			if(err){
				console.log("There was a problem updating the information to the database: ", err)
			}else{
				console.log("Modification effectuée")
				res.redirect('/liste_monsters');
			}
		})
	})

app.get('/:id/delete_monster',function(req, res){
	Monster.findByIdAndRemove(req.params.id, function(err, result){
		if(err) { console.log(err); }
		else { res.redirect("/liste_monsters"); }
	})
})

app.listen(3000);
