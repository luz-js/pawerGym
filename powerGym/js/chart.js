var ctx = document.getElementById('myChart').getContext('2d')
var myCharts =  new Chart(ctx, {
    type: "bar",
    data:{
        labels:["hombres", "mujeres", "niños"],
        datasets:[{
            data:[30,28,2],
            backgroundColor:[
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 205, 86, 0.5)',
            ],
            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)'
              ],
        }]
    },
})