import { Chart } from 'chart.js'

const chartDistributionElement = document.getElementById('chart-distribution').getContext('2d')
const chartUseOfProceedsElement = document.getElementById('chart-use-of-proceeds').getContext('2d')

const chartDistribution = new Chart(chartDistributionElement, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [150000000, 69000000, 27000000, 18000000, 18000000, 15000000, 3000000],
      backgroundColor: [
        '#3877eb', '#0397ee', '#38b5eb', '#14e2f3', '#61eef5', '#e1f3f7', '#b8f2f5',
      ],
    }],

    labels: [
      'Crowd Sale',
      'Future Company Financing',
      'ICO Marketing',
      'Whats2doo Team',
      'Advisors',
      'Referral Progam',
      'Bounty Campaign',
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    cutoutPercentage: 70,
    animation: false,
  },
})

const chartUseOfProceeds = new Chart(chartUseOfProceedsElement, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [42, 32, 19, 5, 3],
      backgroundColor: [
        '#3877eb', '#0397ee', '#38b5eb', '#14e2f3', '#61eef5',
      ],
    }],

    labels: [
      'Marketing',
      'Core Development',
      'Operating Cost',
      'Consulting and Legal Support',
      'Advisors and Team',
    ],
  },
  options: {
    responsive: true,
    legend: {
      display: false,
    },
    cutoutPercentage: 70,
    animation: false,
  },
})
