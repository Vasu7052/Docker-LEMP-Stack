var express = require('express')
var app = express()

app.get('/', function (req, res) {
  res.send('<h1 align=\"center\">Welcome, This is a NodeJS Application</h1>')
})

app.listen(8080, function () {
  console.log('app listening on port 8080!')
})
