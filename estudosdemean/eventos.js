

//eventos customizados
var EventEMitter = require('events').EventEmitter;

var logger = new EventEMitter();

logger.on('error', function (message) {
    console.log('Erro: ' + message);
});

logger.on('aviso', function (message) {
    console.log('Aviso: ' + message);
});

logger.on('info', function (message) {
    console.log('Info: ' + message);
});

logger.emit('error', 'Ola meu erro!');
logger.emit('info', 'Ola meu erro!');
logger.emit('aviso', 'Ola meu erro!');
