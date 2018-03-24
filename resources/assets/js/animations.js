import bodymovin from 'bodymovin/build/player/bodymovin.min'
//import viewportChecker from 'jquery-viewport-checker/src/jquery.viewportchecker'


function loadAnimation(elementId, filename) {
  bodymovin.loadAnimation({
    container: document.getElementById(elementId),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: `/animations/${filename}`,
    rendererSettings: {
      clearCanvas: true,
      progressiveLoad: false,
      hideOnTransparent: true,
    },
  })
}


/*$('.chart_con').addClass("hideit").viewportChecker({
  classToAdd: 'show_it animated fadeIn',
  offset: 100,
  callbackFunction: function(elem, action){
    generateCharts();
  }
});*/

loadAnimation('trainer_animation', 'trainer.json')
loadAnimation('window_cleaner', 'window_cleaner.json')
loadAnimation('carpenter_animation', 'carpenter.json')
loadAnimation('people', 'dj.json')
