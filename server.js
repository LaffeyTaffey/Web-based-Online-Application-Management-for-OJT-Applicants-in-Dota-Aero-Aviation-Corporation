const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const knex = require('knex');

const appExpress = express();
// bruh
let intialPath = path.join(__dirname, "");

appExpress.use(bodyParser.json());

appExpress.get('/', (req, res) => {
    res.sendFile(path.join(intialPath, "landing.html"));
});

appExpress.use(express.static(intialPath));

appExpress.use((req, res, next) => {
    res.status(404).sendFile(path.join(__dirname, "404.html"));
});

appExpress.listen(3000, () => {
    console.log('listening on port 3000......')
    console.log('Welcome to the server')
});