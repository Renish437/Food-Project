
// expenses cart
var options = {
    series: [{
        name: 'Actual',

        data: [{
            x: '2011',
            y: 1292,
            goals: [{
                name: 'Expected',
                value: 1400,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2012',
            y: 4432,
            goals: [{
                name: 'Expected',
                value: 5400,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2013',
            y: 5423,
            goals: [{
                name: 'Expected',
                value: 5200,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2014',
            y: 6653,
            goals: [{
                name: 'Expected',
                value: 6500,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2015',
            y: 8133,
            goals: [{
                name: 'Expected',
                value: 6600,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2016',
            y: 7132,
            goals: [{
                name: 'Expected',
                value: 7500,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2017',
            y: 7332,
            goals: [{
                name: 'Expected',
                value: 8700,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        },

        {
            x: '2018',
            y: 6553,
            goals: [{
                name: 'Expected',
                value: 7300,
                strokeWidth: 5,
                strokeColor: '#775DD0'
            }]
        }
        ]
    }],

    chart: {
        height: 290,
        type: 'bar'
    },

    plotOptions: {
        bar: {
            columnWidth: '40%'
        }
    },

    colors: ['#0da487'],
    dataLabels: {
        enabled: false
    },

    legend: {
        show: false,
    }
};


window.Apex = {
    chart: {
        foreColor: "#fff",
        toolbar: {
            show: false
        }
    },
    colors: ["#FCCF31", "#17ead9", "#f02fc2"],
    stroke: {
        width: 3
    },
    dataLabels: {
        enabled: false
    },
    grid: {
        borderColor: "#40475D"
    },
    xaxis: {
        axisTicks: {
            color: "#333"
        },
        axisBorder: {
            color: "#333"
        }
    },
    fill: {
        type: "gradient",
        gradient: {
            gradientToColors: ["#F55555", "#6078ea", "#6094ea"]
        }
    },
    tooltip: {
        theme: "dark",
        x: {
            formatter: function (val) {
                return moment(new Date(val)).format("HH:mm:ss");
            }
        }
    },
    yaxis: {
        decimalsInFloat: 2,
        opposite: true,
        labels: {
            offsetX: -10
        }
    }
};

var trigoStrength = 3;
var iteration = 11;

function getRandom() {
    var i = iteration;
    return (
        (Math.sin(i / trigoStrength) * (i / trigoStrength) +
            i / trigoStrength +
            1) *
        (trigoStrength * 2)
    );
}

function getRangeRandom(yrange) {
    return Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
}

function generateMinuteWiseTimeSeries(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = baseval;
        var y =
            (Math.sin(i / trigoStrength) * (i / trigoStrength) +
                i / trigoStrength +
                1) *
            (trigoStrength * 2);

        series.push([x, y]);
        baseval += 300000;
        i++;
    }
    return series;
}

function getNewData(baseval, yrange) {
    var newTime = baseval + 300000;
    return {
        x: newTime,
        y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
    };
}


var admissionRatioOption = {
    series: [
        {
            name: '',
            data: [30, 29.31, 29.7, 29.7, 31.32, 31.65, 31.13, 29.8, 31.79, 31.67, 32.39, 30.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 34, 34.50, 34.50, 32.53, 31.37, 32.43, 32.44, 30.2,
                30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 31.02, 30.33, 32.95, 31.89, 30.01, 30.88, 30.69, 30.58, 32.02, 32.14, 30.37, 30.51, 32.65, 32.64, 32.27, 32.1, 32.91, 30.65, 30.8, 31.92
            ],
        },
    ],
    chart: {
        type: 'area',
        height: 90,
        offsetY: -10,
        offsetX: 0,
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    grid: {
        show: false,
        borderColor: '#dedbdb',
        padding: {
            top: 5,
            right: 0,
            bottom: -30,
            left: 0,
        },
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
    dataLabels: {
        enabled: false,
    },
    colors: ['#ef3f3e'],
    xaxis: {
        labels: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        opposite: false,
        min: 29,
        max: 35,
        logBase: 100,
        tickAmount: 4,
        forceNiceScale: false,
        floating: false,
        decimalsInFloat: undefined,
        labels: {
            show: false,
            offsetX: -12,
            offsetY: -15,
            rotate: 0,
        },
    },
    legend: {
        horizontalAlign: 'left',
    },
    responsive: [

    ],
};

var admissionRatio = new ApexCharts(document.querySelector('#daily-value'), admissionRatioOption);
admissionRatio.render();

var admissionRatioOption = {
    series: [
        {
            name: '',
            data: [30, 32.31, 31.47, 30.69, 29.32, 31.65, 31.13, 31.77, 31.79, 31.67, 32.39, 32.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 32.37, 32.19, 32.51, 32.53, 31.37, 30.43, 30.44, 30.2,
                30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 30.02, 30.33, 30.95, 31.89, 31.01, 30.88, 30.69, 30.58, 32.02, 32.14, 32.37, 32.51, 32.65, 32.64, 32.27, 32.1, 32.91, 33.65, 33.8, 33.92
            ],
        },
    ],
    chart: {
        type: 'area',
        height: 90,
        offsetY: -10,
        offsetX: 0,
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    grid: {
        show: false,
        borderColor: '#dedbdb',
        padding: {
            top: 5,
            right: 0,
            bottom: -30,
            left: 0,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.5,
            opacityTo: 0.1,
            stops: [0, 80, 100]
        }
    },
    dataLabels: {
        enabled: false,
    },
    colors: ['#277d2a'],
    xaxis: {
        labels: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        opposite: false,
        min: 29,
        max: 35,
        logBase: 100,
        tickAmount: 4,
        forceNiceScale: false,
        floating: false,
        decimalsInFloat: undefined,
        labels: {
            show: false,
            offsetX: -12,
            offsetY: -15,
            rotate: 0,
        },
    },
    legend: {
        horizontalAlign: 'left',
    },
    responsive: [

    ],
};

var admissionRatio = new ApexCharts(document.querySelector('#order-value'), admissionRatioOption);
admissionRatio.render();

var admissionRatioOption = {
    series: [
        {
            name: '',
            data: [30, 29.31, 29.7, 29.7, 31.32, 31.65, 31.13, 29.8, 31.79, 31.67, 32.39, 30.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 34, 34.50, 34.50, 32.53, 31.37, 32.43, 32.44, 30.2,
                30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 31.02, 30.33, 32.95, 31.89, 30.01, 30.88, 30.69, 30.58, 32.02, 32.14, 30.37, 30.51, 32.65, 32.64, 32.27, 32.1, 32.91, 30.65, 30.8, 31.92
            ],
        },
    ],
    chart: {
        type: 'area',
        height: 90,
        offsetY: -10,
        offsetX: 0,
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    grid: {
        show: false,
        borderColor: '#dedbdb',
        padding: {
            top: 5,
            right: 0,
            bottom: -30,
            left: 0,
        },
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
    dataLabels: {
        enabled: false,
    },
    colors: ['#cc3300'],
    xaxis: {
        labels: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        opposite: false,
        min: 29,
        max: 35,
        logBase: 100,
        tickAmount: 4,
        forceNiceScale: false,
        floating: false,
        decimalsInFloat: undefined,
        labels: {
            show: false,
            offsetX: -12,
            offsetY: -15,
            rotate: 0,
        },
    },
    legend: {
        horizontalAlign: 'left',
    },
};

var admissionRatioOption = {
    series: [
        {
            name: '',
            data: [30, 29.31, 29.7, 29.7, 31.32, 31.65, 31.13, 29.8, 31.79, 31.67, 32.39, 30.63, 32.89, 31.99, 31.23, 31.57, 30.84, 31.07, 31.41, 31.17, 34, 34.50, 34.50, 32.53, 31.37, 32.43, 32.44, 30.2,
                30.14, 30.65, 30.4, 30.65, 31.43, 31.89, 31.38, 30.64, 31.02, 30.33, 32.95, 31.89, 30.01, 30.88, 30.69, 30.58, 32.02, 32.14, 30.37, 30.51, 32.65, 32.64, 32.27, 32.1, 32.91, 30.65, 30.8, 31.92
            ],
        },
    ],
    chart: {
        type: 'area',
        height: 90,
        offsetY: -10,
        offsetX: 0,
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 2,
        curve: 'smooth'
    },
    grid: {
        show: false,
        borderColor: '#dedbdb',
        padding: {
            top: 5,
            right: 0,
            bottom: -30,
            left: 0,
        },
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
    dataLabels: {
        enabled: false,
    },
    colors: ["#cc3300"],
    xaxis: {
        labels: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        opposite: false,
        min: 29,
        max: 35,
        logBase: 100,
        tickAmount: 4,
        forceNiceScale: false,
        floating: false,
        decimalsInFloat: undefined,
        labels: {
            show: false,
            offsetX: -12,
            offsetY: -15,
            rotate: 0,
        },
    },
    legend: {
        horizontalAlign: 'left',
    },
};

var admissionRatio = new ApexCharts(document.querySelector('#admissionRatio'), admissionRatioOption);
admissionRatio.render();


// earning chart
var options_earning = {
    series: [
        {
            data: [20, 40, 60, 20, 100, 60, 20, 80, 40, 10, 80, 100, 100],
        },
    ],
    chart: {
        type: "line",
        height: 134,
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 0,
            left: 0,
            blur: 20,
            color: "#ef3f3e",
            opacity: 0.3,
        },
    },
    grid: {
        show: true,
        borderColor: "#f5f5f5",
        strokeDashArray: 6,
        position: "back",
        xaxis: {
            lines: {
                show: true,
            },
        },
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0,
        },
    },
    stroke: {
        curve: "stepline",
        width: 2,
    },
    dataLabels: {
        enabled: false,
    },
    xaxis: {
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        tooltip: {
            enabled: false,
        },
    },
    yaxis: {
        labels: {
            show: false,
        },
        min: 0,
        tickAmount: 5,
        tickPlacement: "between",
    },
    markers: {
        size: 4,
        colors: "#fff",
        strokeColors: "#ef3f3e",
        strokeWidth: 2,
        strokeOpacity: 0.9,
        strokeDashArray: 0,
        fillOpacity: 1,
        shape: "circle",
        offsetX: 2,
        offsetY: 2,
        radius: 2,
        hover: {
            size: 3,
        },
    },
    colors: ["#ef3f3e"],

    responsive: [
        {
            breakpoint: 1750,
            options: {
                chart: {
                    height: 150,
                },
            },
        },
        {
            breakpoint: 1650,
            options: {
                chart: {
                    height: 170,
                },
            },
        },
        {
            breakpoint: 1550,
            options: {
                chart: {
                    height: 180,
                },
            },
        },
        {
            breakpoint: 1410,
            options: {
                chart: {
                    height: 190,
                },
            },
        },
        {
            breakpoint: 1400,
            options: {
                chart: {
                    height: 110,
                },
            },
        },
        {
            breakpoint: 1200,
            options: {
                chart: {
                    height: 122,
                },
            },
        },
        {
            breakpoint: 768,
            options: {
                chart: {
                    height: 160,
                },
            },
        },
    ],
};

var chart_earning = new ApexCharts(
    document.querySelector("#earning-average"),
    options_earning
);
chart_earning.render();