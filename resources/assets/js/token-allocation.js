import { Chart } from 'chart.js'

const chartDistributionElement = document.getElementById('chart-distribution').getContext('2d')
const chartUseOfProceedsElement = document.getElementById('chart-use-of-proceeds').getContext('2d')

const chartDistribution = new Chart(chartDistributionElement, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [10, 20, 30],
      backgroundColor: [
        'red',
      ],
    }],

    labels: [
      'Whats2doo Team',
      'Marketing Campaign',
      'Pre- & Main ICO',
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    cutoutPercentage: 75,
    animation: false,
  },
})

const chartUseOfProceeds = new Chart(chartUseOfProceedsElement, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [10, 20, 30],
      backgroundColor: [
        'red',
      ],
    }],

    labels: [
      'Whats2doo Team',
      'Marketing Campaign',
      'Pre- & Main ICO',
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    cutoutPercentage: 75,
    animation: false,
  },
})
