var http = require('http');
var url = require('url');
var alltxt;

http.createServer(function (req, res) {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    var urlObj = url.parse(req.url, true);
    var pathname = urlObj.pathname;
    var data = urlObj.query;
    var txt = "name:" + data.name + "<br>";
    var txt = txt + "subject:" + data.subject + "<br>";
    var txt = txt + "score:" + data.score + "<br>";
    alltxt = req.url + "<br>" + pathname + "<br>" + txt + "</br>";
    res.end(alltxt);

}).listen(3333);