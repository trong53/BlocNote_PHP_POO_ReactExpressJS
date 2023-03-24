import express from 'express';
import mysql from 'mysql';
import bodyParser from 'body-parser';
import { config } from "./config.js";
import path from 'path';            // const path = require('path');
import { fileURLToPath } from 'url';

const app = express();

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
app.use(express.static(path.join(__dirname, 'client/build')));
app.get('/', function (req, res) {
    res.sendFile(path.join(__dirname, 'client/build', 'index.html'));
  });

app.use(bodyParser.json());                 // support  encoded Json
app.use(bodyParser.urlencoded({             // support  encoded URL
    extended: true
}));

const db_connection = mysql.createConnection(config);           // create SQL connection

db_connection.connect((err) => {                                // execute the connection
    (err) ? console.log(err) : console.log(db_connection)
});

app.get('/', (req, res) => {
    res.send('Simple API to call un message "Hello World"');                   
});

app.get('/test', (req, res) => {                                // Api to send a data JSON , being "message"
    res.json({message: 'Test : this is the message from server'});
});

app.get('/api/getnotes', (req, res) => {
    let sql = "SELECT * FROM posts ORDER BY created_at DESC";
    db_connection.query(sql, (err, results) => {
        if (err) throw err;
        res.json({data: results});
    })
});

app.post('/api/noteId', (req, res) => {
    let sql = "SELECT * FROM posts WHERE id = "+req.body.id;
    db_connection.query(sql, (err, results) => {
        if (err) throw err;
        res.json({data: results});
    })
});

app.post('/api/create', (req, res) => {
    let sql = "INSERT INTO posts(title, description) VALUES('"+req.body.title+"', '"+req.body.description+"')";
    db_connection.query(sql, (err, results) => {
        if (err) throw err;
        res.json({data: results});
    })
});

app.listen(4000, () => console.log('App listening on port 4000'));

