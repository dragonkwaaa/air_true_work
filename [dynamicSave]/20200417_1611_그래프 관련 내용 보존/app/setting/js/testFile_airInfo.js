// :: 차트 스크립트 (시작)
let chart    = document.getElementById('chart').getContext('2d'),
    gradient = chart.createLinearGradient(0, 0, 0, 280);

gradient.addColorStop(0, '#a2bcef');
gradient.addColorStop(0.4, '#f8fafe');
gradient.addColorStop(1, '#fff');


let data  = {
    labels: [ '0', '', '2', '', '4', '', '6', '', '8', '', '10', '', '12', '', '14', '', '16', '', '18', '', '20', '', '22', '', '24' ],
    datasets: [{
			label: 'Custom Label Name',
			backgroundColor: gradient,
			pointBackgroundColor: '#4d42e5',
			pointRadius: 1,
			pointHoverRadius: 1,
			borderWidth: 1,
			borderColor: '#5a51e7',
			data: [0, 0, 0, 0, 0, 0, 10, 40, 40, 40, 40, 70, 70, 65, 65, 150, 150, 27, 27, 27, 15, 0, 0, 0, 0]
    }]
};

let options = {

	layout: {
        padding: {
            left: 0,
            right: 0,
            top: 30,
            bottom: 0
		},
		margin: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
		}
	},
		
	responsive: false,
	maintainAspectRatio: true,
	animation: {
		easing: 'easeInOutQuad',
		duration: 520
		
	},
	scales: {
		xAxes: [{
			gridLines: {
				color: 'rgba(200, 200, 200, 0.05)',
				lineWidth: 1
			},
			ticks: {
                autoSkip: false,
                maxRotation: 0,
				// minRotation: 0
				fontSize: 10,
				fontStyle : 500
            }
		}],
		yAxes: [{
			gridLines: {
				// color: 'rgba(200, 200, 200, 0.08)',
				// lineWidth: 1
			},
			gridLines: {
				color: '#a2bcef',
				lineWidth: 1,
				drawBorder: false
			},
			ticks: {
				autoSkip: false,		// :: y축 단위계 생략되지 않게 하는 내용 1.
				stepSize : 1,			// :: y축 단위계 생략되지 않게 하는 내용 2.
				min: 0,
				max: 150,
				autoSkip : false,
				maxRotation: 0,
                // minRotation: 0,
				padding : 10,
				fontSize: 10,
				fontStyle : 500,
				fontColor : '#000',
				fontFamily : 'Noto Sans KR',
				callback: function(label, index, labels) {

					let	worstText		=	"매우<br>나쁨";

					let	spacedWorstText	=	worstText.split("<br>");

					switch (label) {
					  case 0:
						return '좋음';
					  case 50:
						return '보통';
					  case 100:
						return '나쁨';
					  case 150:
						return spacedWorstText;
					}
				}
			}
			
		}]
	},
	elements: {
		line: {
			tension: 0
		}
	},
	legend: {
		display: false
	},
	point: {
		backgroundColor: 'white'
	},
	tooltips: {
		titleFontFamily: 'Open Sans',
		backgroundColor: 'rgba(0,0,0,0.3)',
		titleFontColor: 'red',
		caretSize: 5,
		cornerRadius: 2,
		xPadding: 10,
		yPadding: 10
	}
};

let chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
	options: options
});
// :: 차트 스크립트 (끝)


// :: 기간 선택
$( function() {
	$( "#rangeDate").dateRangePicker({
		language: "auto",
		autoClose: true,
		format: 'ddd. MMM DD.YYYY',
		separator: '  ~  ',
		startOfWeek: 'sunday',
		getValue: function()
		{
			return $(this).val();
		},
		// setValue: function(s, s1)
		setValue: function(s)
		{
			$(this).val(s);
		},
		minDays: 0,
		maxDays: 7,
		duration: 200,
		showTopbar: false,
		showWeekNumbers: false,
		monthSelect: false,
		yearSelect: false,
		selectForward: true,
		selectBackward: false,
		singleMonth: true,
		customArrowPrevSymbol: '<i class="datepickArrowPrev"></i>',
		customArrowNextSymbol: '<i class="datepickArrowNext"></i>',
		extraClass : 'narrowPicker',
	});

});



// :: 일/주/월/년 탭 선택 시 밑줄 표시 스크립트
$(document).on('click', '.airStateTabs a', function(){
	$('.airStateTabs').children('a').removeClass('on');
	$(this).addClass('on');
});


// :: 이산화탄소/미세먼지/초미세먼지 등등 선택 시 글자색 변겨 ㅇ및 하얀색 백그라운드 생성 스크립트. 
$(document).on('click', '.pageTabs a.box-2', function(){
	$('.pageTabs a.box-2').removeClass('on');
	$(this).addClass('on');
});
