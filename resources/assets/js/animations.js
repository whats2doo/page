function loadAnimation(elementId, animationData){
  let params = {
    container: document.getElementById(elementId),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    animationData: animationData,
    rendererSettings: {
      scaleMode: 'noScale',
      clearCanvas: false,
      progressiveLoad: true, // Boolean, only svg renderer, loads dom elements when needed. Might speed up initialization for large number of elements.
      hideOnTransparent: true //Boolean, only svg renderer, hides elements when opacity reaches 0 (defaults to true)
    }
  }

  let anim

  anim = lottie.loadAnimation(params)
}

loadAnimation('trainer_animation', trainerAnimation)
loadAnimation('window_cleaner', windowCleanerAnimation)
loadAnimation('carpenter_animation', carpenterAnimation)
loadAnimation('people', djAnimation)