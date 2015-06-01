var static = require('node-static')
var file = new static.Server('./legacy_html')
var port = 5913

require('http').createServer(function (request, response) {
    request.addListener('end', function () {
        file.serve(request, response);
    }).resume();
}).listen(port);

console.log("App files are now served on port "+port);