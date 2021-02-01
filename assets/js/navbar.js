let nav = new Vue({
    el: '#nav',
    data: {
        nav: 'Hola soy un nav',
        prueba: [
            {nombre:'Hola',edad:10},
            {nombre:'Alard',edad:15}],
        edad: '0',
        texto: 'asd'
    },
    methods:{
        agregarTexto() {
            this.prueba.push({
                nombre: this.texto,
                edad: this.edad
            });
            console.log(texto1)
        }
    }
})