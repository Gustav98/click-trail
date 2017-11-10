

//document.getElementById('mostraChart').addEventListener('click', function(){
$('#mostraPizza').click(function(e){
    // pega as informações do site_info
    var ds = $('.itemDs').toArray();
    var qtd = $('.itemQtd').toArray();
    var infos = [];
    for (var i = 0; i < ds.length; i++ ) {
    	var arr = new Array();
        arr['y'] = parseInt(qtd[i].innerHTML);
        arr['name'] = ds[i].innerHTML;
        console.log(arr);
        infos.push(arr);
    }
    
    var chart = new CanvasJS.Chart("chartPie", {
    	exportEnabled: true,
    	animationEnabled: true,
    	title:{
    		text: "Porcentagem de Clicks"
    	},
    	legend:{
    		cursor: "pointer",
    		itemclick: explodePie
    	},
    	data: [{
    		type: "pie",
    		showInLegend: true,
    		toolTipContent: "{name}: <strong>{y}%</strong>",
    		indexLabel: "{name} - {y}%",
    		dataPoints: infos
    	}]
    });
    chart.render();
});
    
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}


/* BOTÃO MOSTRAR E ESCONDER
 $(document).ready(function (e) {
        $("#chartBar").hide();

        $("#btnMostrarEsconder").click(function (e) {
            $("#chartBar").toggle();
        });
    });
*/
//Linha
/*
window.onload = function () {

var chart = new CanvasJS.Chart("chartLine", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 450 },
			{ y: 414},
			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 460 },
			{ y: 450 },
			{ y: 500 },
			{ y: 480 },
			{ y: 480 },
			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 500 },
			{ y: 480 },
			{ y: 510 }
		]
	}]
});
chart.render();

}

//Barra


window.onload = function () {
	
var chart = new CanvasJS.Chart("chartBar", {
	animationEnabled: true,
	
	title:{
		text:"Fortune 500 Companies by Country"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Companies"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
			{ y: 3, label: "Sweden" },
			{ y: 7, label: "Taiwan" },
			{ y: 5, label: "Russia" },
			{ y: 9, label: "Spain" },
			{ y: 7, label: "Brazil" },
			{ y: 7, label: "India" },
			{ y: 9, label: "Italy" },
			{ y: 8, label: "Australia" },
			{ y: 11, label: "Canada" },
			{ y: 15, label: "South Korea" },
			{ y: 12, label: "Netherlands" },
			{ y: 15, label: "Switzerland" },
			{ y: 25, label: "Britain" },
			{ y: 28, label: "Germany" },
			{ y: 29, label: "France" },
			{ y: 52, label: "Japan" },
			{ y: 103, label: "China" },
			{ y: 134, label: "US" }
		]
	}]
});
chart.render();

}
*/