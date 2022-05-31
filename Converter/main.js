var list = [];
var d;
var btcusdtoday;
var ethusdtoday;
var pbtc= 10;
var pusd= 10;
var peth= 10;
const delay = (time) => {
   return new Promise((resolve, reject) => setTimeout(resolve, time))
}
var minArr = 99999999999999;
var urlbtcusd = 'https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=91';
var urlbtcbtc = 'https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=btc&days=91';
var urlbtceth = 'https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=eth&days=91';
var urlethusd = 'https://api.coingecko.com/api/v3/coins/ethereum/market_chart?vs_currency=usd&days=91';
var urlethbtc = 'https://api.coingecko.com/api/v3/coins/ethereum/market_chart?vs_currency=btc&days=91';
var urletheth = 'https://api.coingecko.com/api/v3/coins/ethereum/market_chart?vs_currency=eth&days=91';
var grathName = 'bitcoin/usd';
var urlEthusd = '';
var access = false;
var vue = new Vue({
	el: '#app',
	out: '#output',
	li: '',
	pbtc: 1000,
	pusd: 123456,
	peth: 300,
	data: {
		d: {},
		portf: 0,
		page: '1',
		div: document.getElementById("your-id"),
		usd:'usd', 
		inputText: '',
		grath: {},
		bitcoin: 'bitcoin',
		ethereum: 'ethereum', 
		info: {},
		tpbtc: 188,
		tpusd: 1000,
		tpeth: 112,
		from: 'bitcoin',
		to: 'usd',
		result: '2222',
		active: 'bitcoin',
		active2: 'usd',
		inputt: '',
		numbers: [1,2,3,4,5,6,7,8,9,0],
	},
	methods: {
		doSomething: function(){
			console.log('hui');
			return 'hui'
		},
		changeportf: function(){
			this.portf = (pbtc * btcusdtoday + peth * ethusdtoday + pusd).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

			console.log(this.portf)
		},
		changepage: function(string) {
			this.changeportf();
			this.page = string;
			this.updateInput();

		},
		updateInput: function() {
			
			new Promise((resolve, reject) => {
			    console.log('Начало');
			    tpbtc = document.getElementById('pbitcoin').value;
				document.getElementById('pbitcoin').value = tpbtc;
				tpusd = document.getElementById('pusd').value;
				document.getElementById('pusd').value = tpusd;
				tpeth = document.getElementById('peth').value;
				document.getElementById('peth').value = tpeth; 

				pbtc = this.tpbtc;
				pusd = this.tpusd;
				peth = this.tpeth;
			
				console.log('changepage');
				document.getElementById('pbitcoin').value = Math.round(pbtc);
				document.getElementById('pusd').value = Math.round(pusd);
				document.getElementById('peth').value = Math.round(peth);

			    resolve();
			})
			.then(() => {
			    throw new Error('Где-то произошла ошибка');

			    console.log('Выведи это');
			})
			.catch(() => {
			    console.log('Выведи то');
			    grath2.update();
			})
			.then(() => {
			    console.log('Выведи это, несмотря ни на что',pbtc);
			    this.changeportf();
			    grath2.data.datasets[0].data[0] = pbtc;
			    grath2.data.datasets[0].data[1] = pusd;
			    grath2.data.datasets[0].data[2] = peth;
			    grath2.update();
			});
			
			
				
			
		},
		
		
		countIt: function() {	
			console.log(this.inputText,' * ',grath.data.datasets[0].data[14]);		
			this.inputText = document.getElementById('input').value;
			this.result = this.inputText * grath.data.datasets[0].data[14];
			document.getElementById('output').placeholder = Math.round(this.result).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
		getprice(string) {

			grathName = this.active +' / '+ this.active2;
			if ((this.active == 'bitcoin') && (this.active2 == 'usd')) {
				string = urlbtcusd;
				
			}
			else if ((this.active == 'bitcoin') && (this.active2 == 'bitcoin')) {
				string = urlbtcbtc;
			}
			else if ((this.active == 'bitcoin') && (this.active2 == 'ethereum')) {
				string = urlbtceth;
			}
			else if ((this.active == 'ethereum') && (this.active2 == 'usd')) {
				string = urlethusd;
			}
			else if ((this.active == 'ethereum') && (this.active2 == 'bitcoin')) {
				string = urlethbtc;
			}
			else if ((this.active == 'ethereum') && (this.active2 == 'ethereum')) {
				string = urletheth;
			}
			fetch(string).then(function(response) {
  			response.json().then(function(text) {
    		list = text;
    		for (var i = 91; i >= 76; i--) {
    			grath.data.datasets[0].data[i-77] = list['prices'][i][1];
    			
    			grath.data.datasets[0].label = grathName;
    	    }
    		grath.update();
    		console.log(this.inputText,' * ',grath.data.datasets[0].data[14]);		
			this.inputText = document.getElementById('input').value;
			this.result = this.inputText * grath.data.datasets[0].data[14];
			document.getElementById('output').placeholder = Math.round((this.result)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  			});

			});
			
			
		},
		activate: function(string){
			this.active = string;
			this.from = string;
			this.getprice();

			
			
			
		}, 
		activate2: function(string){
			this.active2 = string;
			this.to = string;
			this.getprice(urlbtcbtc)
			
			
		},
		
		
	},
	mounted() {
		
		axios
	    
	        fetch(urlbtcusd).then(function(response) {
  			response.json().then(function(text) {
    		list = text;
    		access = true;
    		fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd').then(function(response) {
  			response.json().then(function(text) {
    		btcusdtoday = text['bitcoin']['usd'];
    		console.log('btc today = ',text['bitcoin']['usd']);
    		
    		

  			});

			});
			fetch('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd').then(function(response) {
  			response.json().then(function(text) {
    		ethusdtoday = text['ethereum']['usd'];
    		console.log('eth today = ',text['ethereum']['usd']);
    		
    		

  			});

			});
    		
    		const labels = [
			    
			    '14 days ago',
			    '13 days ago',
			    '12 days ago',
			    '11 days ago',
			    '10 days ago',
			    '9 days ago',
			    '8 days ago',
			    '7 days ago',
			    '6 days ago',
			    '5 days ago',
			    '4 days ago',
			    '3 days ago',
			    '2 days ago',
			    '1 day ago',
			    'today',
			  ];
    		var myChart = {

		    type: 'line',
		    data: {
		            labels: labels,
		            datasets: [
		                {
		                    label: grathName,
		                    data: [
		                    ],
		                    backgroundColor:['rgba(0, 123, 255, 0.5)'],
		                    borderColor: ['rgba(0, 123, 255, 0.8)'],
		                    hidden:false
		                },
		                
		            ]

		        },
		    options: {
		        legend:{
		            display:true,
		            onHover: function(event, legendItem) {
		            document.getElementById("myChart").style.cursor = 'pointer';},
		        },
		        
		        scale: {
		            
		            }
		        }
		    };
		    var myChart2 = {

		    type: 'pie',
		    data: {
		            labels: [
					    'bitcoins',
					    'usd',
					    'ethereum'
					  ],
					  datasets: [{
					    label: 'My First Dataset',
					    data: [pbtc*10, pusd*10, peth*10],
					    backgroundColor: [
					      'rgb(255, 99, 132)',
					      'rgb(54, 162, 235)',
					      'rgb(255, 205, 86)'
					    ],
					    hoverOffset: 4
					  }]

		        },
		    options: Chart.defaults.pie      
		        
		    };

		var ctx = document.getElementById('myChart');
		var ctx2 = document.getElementById('myChart2');
		grath = new Chart(ctx, myChart);
		grath2 = new Chart(ctx2, myChart2);
		for (var i = 91; i >= 76; i--) {
    			grath.data.datasets[0].data[i-77] = list['prices'][i][1];
    			
    			grath.data.datasets[0].label = grathName;
    	    }
    	    
    	grath.update();
    	grath2.update();
					





    	})});
    		

    		
				
			

    	  
    	  
    		





    		}, //mounted end

    	
	}) // vue end
	      
  

// document.addEventListener("DOMContentLoaded", function(){

// 	if (access == true) {
// 		console.log('grafic');
// 		console.log (list);
//         // Create liteChart.js Object
//         let d = new liteChart("chart");

//         // Set labels
//         d.setLabels(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);

//         // Set legends and values
//         d.addLegend({"name": "bitcoin/usd", "stroke": "#CDDC39", "fill": "#fff", "values": 	[ list['prices'][1], 300, 450, 300, 500, 300, 700, 800, 601, 705, 604, 1200]});
        

//         // Inject chart into DOM object
//         let div = document.getElementById("your-id");
//         d.inject(div);

//         // Draw
//         d.draw();
//       }});

