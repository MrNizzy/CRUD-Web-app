let x;
let calculator = new Vue({
    el: '#calculator',
    data: {
        title: 'Calculadora',
        prueba: [
            {nombre:'Hola',edad:10},
            {nombre:'Alard',edad:15}],
        num: '0',
        resultadoTexto: 0,
        contador: 0,
    },
    methods:{
        resultado() {
            this.resultadoTexto=this.contador;
            console.log(this.resultadoTexto);
        },
        suma(){
            this.x = parseInt(contador, 10) + 5;
        }
    }
})