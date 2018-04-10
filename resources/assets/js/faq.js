import $ from 'jquery'

$('#more').click((e) => {
  e.stopPropagation()
  $('#faq .panel-group').animate({
    height: $('#faq .panel-group').get(0).scrollHeight,
  }, 1000, () => {
    $('#faq .panel-group').css({
      height: 'auto',
    })
    $('#faq .gradient').hide()
  })

  return false
})
