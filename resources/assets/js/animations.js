function loadAnimation(elementId, filename){
  let params = {
    container: document.getElementById(elementId),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/animations/'+filename,
    rendererSettings: {
      clearCanvas: true,
      progressiveLoad: false, // Boolean, only svg renderer, loads dom elements when needed. Might speed up initialization for large number of elements.
      hideOnTransparent: true //Boolean, only svg renderer, hides elements when opacity reaches 0 (defaults to true)
    }
  }

  let anim

  anim = lottie.loadAnimation(params)
}

loadAnimation('trainer_animation', 'trainer.json')
loadAnimation('window_cleaner', 'window_cleaner.json')
loadAnimation('carpenter_animation', 'carpenter.json')
loadAnimation('people', 'dj.json')