const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const knex = require('knex');

const appExpress = express();

let intialPath = path.join(__dirname, "public");

appExpress.use(bodyParser.json());
appExpress.use(express.static(intialPath));

// Middleware to set and send the request header
appExpress.use((req, res, next) => {
    res.set('Bypass-Tunnel-Reminder', 'olive-walls-cough-103-181-222-27');
    next();
});

appExpress.use((req, res, next) => {
    res.status(404).sendFile(path.join(__dirname,  "404.html"));
});

appExpress.listen(3000, (req, res) => {
    console.log('listening on port 3000......')
    console.log('Welcome to the server')
});