

  // intagram subscriber chart
  var optionssubscriber = {
    series: [
      {
        name: "growth",
        type: "line",
        data: [12, 10, 25, 12, 30, 10, 55, 45, 60],
      },
      {
        name: "growth",
        type: "line",
        data: [10, 15, 20, 18, 38, 25, 55, 35, 60],
      },
    ],
    chart: {
      height: 265,
      type: "line",
      toolbar: {
        show: false,
      },
      dropShadow: {
        enabled: true,
        top: 8,
        left: 0,
        blur: 2,
        color: ["#F2A93E", "#ef3f3e"],
        opacity: 0.1,
      },
    },
    grid: {
      show: true,
      borderColor: "#dedbdb",
      strokeDashArray: 5,
      position: "back",
      xaxis: {
        lines: {
          show: true,
        },
      },
    },
    colors: ["#F2A93E", "#ef3f3e"],
    stroke: {
      width: 2,
      curve: "smooth",
      opacity: 1,
    },
    markers: {
      discrete: [
        {
          seriesIndex: 1,
          dataPointIndex: 4,
          fillColor: "#ef3f3e",
          strokeColor: "#fff",
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
      categories: [
        "2016",
        "2017",
        "2018",
        "2019",
        "2020",
        "2021",
        "2022",
        "2023",
        "2024",
      ],
      tickAmount: 12,
      crosshairs: {
        show: false,
      },
      labels: {
        style: {
          colors: "#747474",
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
      min: 10,
      max: 60,
      tickAmount: 5,
      labels: {
        style: {
          colors: "#747474",
          fontSize: "12px",
          fontFamily: "Poppins, sans-serif",
          fontWeight: 400,
        },
      },
    },
    legend: {
      show: false,
    },
  };

  var subscriberchart = new ApexCharts(
    document.querySelector("#subscriber-chart"),
    optionssubscriber
  );
  subscriberchart.render();