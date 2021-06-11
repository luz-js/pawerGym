const meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
    ];

    const dias = [
        "Domingo",
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado"
    ]

    let abrirCerrar = document.getElementById('abrirCerrar')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')

    function fecha() {
        
        let reloj = new Date()
        let hora = reloj.getHours()
        let minutos = reloj.getMinutes()
        let segundos = reloj.getSeconds()

        h = (hora > 12) ? hora - 12 : hora;

        hr = document.getElementById('hora').innerHTML = h + ":"
        m = document.getElementById('minutos').innerHTML = minutos + ":"
        s = document.getElementById('segundos').innerHTML = segundos

        if (hora == 12 || hora == 18) {
            abrirCerrar.innerHTML = "Ya es hora de cerrar"
        }

        mes.innerHTML = meses[reloj.getMonth()] + "-"
        dia.innerHTML = dias[reloj.getDay()]
    }
    
    setInterval('fecha()', 1000)