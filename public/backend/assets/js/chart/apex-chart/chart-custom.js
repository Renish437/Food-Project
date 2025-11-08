// employ salery chart
var options = {
    series: [{
        name: 'TEAM A',
        type: 'area',
        data: [183 , 175 , 170 , 178 , 185 , 171 , 177 , 185 , 170 , 180, 175 , 170]
    }, {
        name: 'TEAM B',
        type: 'line',
        data: [183 , 193 , 170 , 182 , 200 , 180 , 185 , 178 , 165 , 175, 190 , 190],
    }],
    chart: {
        height: 260,
        type: 'line',
        stacked: false,
        toolbar: {
            show: false,
        },
        zoom: {
          enabled: false,
        },
    },
    stroke: {
        curve: 'smooth',
        width: [3, 3],
        dashArray: [0, 4]
    },
    grid: {
      show: false,
      borderColor: '#000000',
      strokeDashArray: 0,
      position: 'back',
      xaxis: {
          lines: {
              show: true,
          },
      },
      yaxis: {
          lines: {
              show: false,
          },
      },
    },
    labels: ['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sep', 'Oct', 'Nov', 'Dec',],
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 2,
        fillColor: "#fff",
        strokeColor:'#F2A93E',
        size: 7,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 4,
        fillColor: "#fff",
        strokeColor:'#F2A93E',
        size: 7,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 6,
        fillColor: "#fff",
        strokeColor:'#F2A93E',
        size: 7,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 9,
        fillColor: "#fff",
        strokeColor:'#F2A93E',
        size: 7,
        shape: "circle"
      },
      ],
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function (y) {
                if (typeof y !== "undefined") {
                    return y.toFixed(0) + " points";
                }
                return y;
            }
        }
    },
    legend: {
        show: false,
    },
      colors: ["#F2A93E", '#EAEAEA'],
    fill: {
      type: ['gradient', 'solid', 'gradient'],
      gradient: {
        shade: 'light',
        type: "vertical",
        shadeIntensity: 1,
        gradientToColors: [ "#F2A93E", '#ef3f3e', "#F2A93E"],
        inverseColors: true,
        opacityFrom: 0.4,
        opacityTo: 0,
        stops: [0, 100, 100, 100],
      }
    },
    xaxis: {
        labels: {
            style: {
                fontFamily: 'Outfit, sans-serif',
                fontWeight: 500,
                colors: '#8D8D8D',
            },
        },
        axisBorder: {
            show: false
        },
    },
    yaxis: {
        labels: {
            show: false
        },
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        },
    },
    responsive: [{
      breakpoint: 1440, 
      options: {
          chart: {
              height: 220
          },
      },
    },
    ]
  };
  var chart = new ApexCharts(document.querySelector("#employ-salary"), options);
  chart.render();

// salery summary chart
      
var options = {
    series: [{
        type: 'bar',
        data: [350, 180, 240, 470, 200, 570, 300, 200 ,350 ]
    }, {
        type: 'bar',
        data: [500, 390, 280, 140, 290, 190, 390, 90, 400]
    },
    {
        type: 'line',
        data: [350, 180, 240, 470, 200, 570, 300, 200, 240]
    }
    ],
    chart: {
        height: 275,
        toolbar: {
            show: false
        },
    },
    markers: {
        size: 6,
        strokeColor: "#ffffff",
        strokeWidth: 3,
        offsetX: -3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
            size: 6
        }
    },
    hover: {
        size: 5,
        sizeOffset: 0,
    },
    plotOptions: {
        bar: {
            vertical: true,
            columnWidth: '60%',
            borderRadius: 10,
            dataLabels: {
                position: 'top',
            },
        }
    },
    grid: {
        show: true,
        strokeDashArray: 5,
        position: 'back',
        xaxis: {
            lines: {
                show: false
            }
        },
        padding: {
            bottom: -10
        }
    },
    legend: {
        show: false,
    },
    dataLabels: {
        enabled: false,
        offsetX: -6,
        style: {
            fontSize: '14px',
            fontWeight: 600,
            colors: ['#fff']
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        width: [4, 4, 3],
        colors: ['#ffffff', '#ffffff', "#f4bb55"]
    },
    colors: ["#f4bb55", "#ef3f3e"],
    tooltip: {
        shared: true,
        intersect: false
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug' , 'sep' ],
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
                fontFamily: 'Poppins", sans-serif',
                fontWeight: 700,
                colors: '#8D8D8D',
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                fontFamily: 'Poppins", sans-serif',
                fontWeight: 500,
                colors: '#3D434A',
            },
        },
    },
};

var chart = new ApexCharts(document.querySelector("#saler-summary"), options);
chart.render();

// sales purchase chart
var options = {
    series: [{
    name: 'TEAM A',
    type: 'column',
    data: [220,, 250, , 210, , 210, , 270, , 220, , 250, , 260, , 210, , 230]
  },{
    name: 'TEAM B',
    type: 'area',
    data: [210,170, 240, 160, 200, 170, 200, 150, 260, 170, 210,170,240, 160, 250, 140, 200, 140,220,220]
  }],
    chart: {
    height: 300,
    type: 'area',
    stacked: false,
    toolbar: {
      show: false,
    }
  },
  stroke: {
    width: [0, 2, 5],
    curve: 'stepline'
  },
  plotOptions: {
    bar: {
      columnWidth: '100px'
    }
  },
  colors: [ '#bebebe' , '#ef3f3e'],
  dropShadow: {
    enabled: true,
    top: 5,
    left: 6,
    bottom: 5,
    blur: 2,
    color: "#ef3f3e",
    opacity: 0.5,
  },
  fill: {
      type: "gradient",
      gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.5,
        opacityTo: 0.1,
        stops: [0, 90, 100]
      }
    },    
  grid :{
    show: true,
    strokeDashArray: 3,
    xaxis: {
      lines: {
        show: true,
      }
    },
    yaxis: {
      lines: {
        show: true,
      }
    },
  },
  xaxis: {
    categories: ["Jan", "", "feb", "", "Mar", "", "Apr", "", "May", "", "Jun" ,"" , "July" , "" , "Aug" , "" , "Sep" , "" , "Oct" , ""],
    labels: {
      style: {
          fontFamily: 'Poppins, sans-serif',
          fontWeight: 500,
          colors: '#8D8D8D',
      },
    },
    axisTicks: {
        show: false
    },
    axisBorder: {
        show: false
    },
    tooltip: {
        enabled: false,
    },
        
  },
  dataLabels: {
    enabled: false,
  },
    yaxis: {
      labels: {
        style: {
            fontFamily: 'Poppins, sans-serif',
            fontWeight: 500,
            colors: '#8D8D8D',
        },
      },
    },
  legend:{
    show: false,
  },
  tooltip: {
    custom: function ({ series, seriesIndex, dataPointIndex,}) {
      return '<div class="apex-tooltip p-2">' + '<span>' + '<span class="bg-primary">' + '</span>' + 'Project Created' + '<h3>' + '$'+ series[seriesIndex][dataPointIndex] + '<h3/>'  + '</span>' + '</div>';
    },
  },
  };
  var chart = new ApexCharts(document.querySelector("#sales-purchase-chart"), options);
  chart.render();

//sales purchase return cart

const userPosition = {
    series: [{
      data: [70, 30, 40, 90, 60, 50],
    },],
    chart: {
      type: 'bar',
      height: 250,
      width: '100%',
      toolbar: {
        show: false,
      },
    },
    colors: ['rgba(39, 72, 134, 0.2)', 'rgba(211, 77, 63, 0.2)', 'rgba(218, 152, 23, 0.2)', 'rgba(14, 164, 186, 0.1)', 'rgba(71, 148, 71, 0.2)' , 'rgba(214, 76, 89, 0.2)'],
    fill: {
      opacity: 0.4,
    },
    plotOptions: {
      bar: {
        borderRadius: 0,
        horizontal: true,
        distributed: true,
        barHeight: '30%',
        dataLabels: {
          position: 'top',
        },
      },
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val;
      },
      background: {
        enabled: true,
        foreColor: '#fff',
        borderRadius: 5,
        padding: 4,
        opacity: 0.9,
        borderWidth: 1,
        borderColor: '#fff',
      },
      style: {
        fontSize: '12px',
        colors: ['#f2f2f2'],
      },
    },
    legend: {
      show: false,
    },
  
    grid: {
      show: true,
      borderColor: '#f2f2f2',
      strokeDashArray: 0,
      position: 'back',
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: false,
        },
      },
    },
  
    yaxis: {
      labels: {
        show: false,
      },
    },
    xaxis: {
      categories: ['United States', 'Russia', 'Australia', 'Germany', 'Africa', 'France'],
      logBase: 100,
      tickAmount: 10,
      min: 0,
      max: 100,
      labels: {
        minHeight: undefined,
        maxHeight: 18,
        offsetX: -5,
        offsetY: 0,
        tooltip: {
          enabled: false,
        },
      },
      style: {
        fontSize: "13px",
        colors: "#959595",
        fontFamily: "Lexend, sans-serif",
      },
      axisBorder: {
        show: false
      },
      title: {
        offsetX: 0,
        offsetY: -28,
        style: {
          fontSize: "13px",
          colors: "#959595",
          fontFamily: "Lexend, sans-serif",
        },
      },
    },
    tooltip: {
      custom: function ({ series, seriesIndex, dataPointIndex,}) {
        return '<div class="apex-tooltip p-2">' + '<span>' + '<span class="bg-primary">' + '</span>' + 'United States' + '<h3>' + '$'+ series[seriesIndex][dataPointIndex] + '<h3/>'  + '</span>' + '</div>';
      },
    },
    responsive: [{
      breakpoint: 675,
      options: {
        chart: {
          height: 300,
          offsetY: 15,
        },
        xaxis: {
          title: {
            offsetY: 0,
          },
        },
  
        grid: {
          padding: {
            left: -13,
            bottom: 25,
          },
        },
      },
    },],
  };
  
  var userPositionEl = new ApexCharts(document.querySelector('#userPosition'), userPosition);
  userPositionEl.render();

// expenses-cart Start
var options = {
    series: [
      {
        name: "Income",
        type: "line",
        data: [45, 47, 30, 45, 30, 60],
      },
      {
        name: "Earnings",
        type: "line",
        data: [55, 65, 55, 80, 40, 65],
      },
      {
        name: "Profit",
        type: "line",
        data: [50, 40, 70, 40, 100, 70],
      },
    ],
    chart: {
      height: 280,
      type: "line",
      toolbar: {
        show: false,
      },
      dropShadow: {
        enabled: true,
        top: 4,
        left: 0,
        blur: 2,
        colors: ["#7366FF", "#54BA4A", "#FFAA05"],
        opacity: 0.02,
      },
    },
    grid: {
      show: false,
      xaxis: {
        lines: {
          show: false,
        },
      },
    },
    colors: ["#fecaca", "#f87271", "#f8d68f"],
    stroke: {
      width: 3,
      curve: "smooth",
      opacity: 1,
    },
    markers: {
      discrete: [
        {
          seriesIndex: 1,
          dataPointIndex: 3,
          fillColor: "#ef3f3e",
          strokeColor: "#ffffff",
          size: 6,
        },
      ],
    },
    tooltip: {
      shared: false,
      intersect: false,
      marker: {
        width: 5,
        height: 5,
      },
    },
    xaxis: {
      type: "category",
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      tickAmount: 12,
      crosshairs: {
        show: false,
      },
      labels: {
        style: {
          fontSize: "12px",
          fontFamily: "Poppins, sans-serif",
          fontWeight: 400,
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      tooltip: {
        enabled: false,
      },
    },
    fill: {
      opacity: 1,
      type: "gradient",
      gradient: {
        shade: "light",
        type: "horizontal",
        shadeIntensity: 1,
        opacityFrom: 0.95,
        opacityTo: 1,
        stops: [0, 90, 100],
      },
    },
    yaxis: {
      tickAmount: 5,
      labels: {
        show: false,
      },
    },
    legend: {
      show: false,
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#expenses-cart"),
    options
  );
  chart.render();

var generateDayWiseTimeSeries = function (baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = baseval;
        var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

        series.push([x, y]);
        baseval += 88400000;
        i++;
    }
    return series;
}

