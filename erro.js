var calculadora = {
    somar: function(numero_1, numero_2){
        return numero_1+numero_2;
    },
    multiplicar: function(numero_1, numero_2){
        return numero_1*numero_2;
    }
}

console.log(calculadora.somar(100 + 300));
console.log(calculadora.multiplicar(10 * 20));

document.querySelector('html').onclick = function() {
    alerta('Olá mundo!');
}

var animal = 'cachorro';
if(animal == 'gato'){
    console.log('GATO');
}elseif(animal == 'cachorro'){
    console.log('CACHORRO');
}
