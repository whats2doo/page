/* eslint-disable no-new */
import { Chart } from 'chart.js'

const chartDistributionElement = document.getElementById('chart-distribution').getContext('2d')
const chartUseOfProceedsElement = document.getElementById('chart-use-of-proceeds').getContext('2d')

new Chart(chartDistributionElement, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [1500000000, 690000000, 270000000, 180000000, 180000000, 150000000, 30000000],
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

new Chart(chartUseOfProceedsElement, {
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
