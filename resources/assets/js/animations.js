function loadAnimation(elementId, animationData){
  var params = {
    container: document.getElementById(elementId),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    animationData: animationData
  }

  var anim

  anim = lottie.loadAnimation(params)
}

loadAnimation('trainer_animation', trainerAnimation)
loadAnimation('window_cleaner', windowCleanerAnimation)