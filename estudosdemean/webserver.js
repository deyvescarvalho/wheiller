var http = require('http');

// http.createServer(function(request, response) {
//   response.writeHead(200);
//   response.write("ola mundo, esse e meu servidor");
//   response.end();
// }).listen(8880);


var server = http.createServer();
server.on('request', function (req, res) {
  // body...
  res.writeHead(200);
  res.write("Servidor mandou primeiros dados do response");
  setTimeout(function () {
    // body...
    res.write("mandando o seugndo mpacote...");
      res.end();
  }, 5000);
  });
  server.listen(8882);
  console.log("servidor iniciado com sucesso");
