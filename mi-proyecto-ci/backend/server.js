const http = require('http');

const server = http.createServer((req, res) => {
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.writeHead(200, { 'Content-Type': 'application/json' });
  res.end(JSON.stringify({ mensaje: '¡Hola desde el Backend!', estado: 'OK' }));
});

server.listen(3000, () => {
  console.log('Backend corriendo en puerto 3000');
});