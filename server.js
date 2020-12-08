const express = require('express');
const app = express();
const server =require('http').Server(app);
const { v4: uuidv4} = require('uuid');
app.set('view engine', 'ejs'); 
app.use(express.static('public'));


app.get('/', (req, res)=> {
	res.redirect(`/${uuidv4()}`);

})

app.get('/:salle', (req, res)=> {
	res.render('salle', {salleid: req.params.salle})

})

server.listen(3030);