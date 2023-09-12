$(function () {
  //rolling-------------------------------------------
  //$('.rolling').clone().appendTo('.rolling_container')
  var clone = document.querySelector('.rolling').cloneNode(true)
  document.querySelector('.rolling_container').append(clone)


  //swiper-----------------------------------------------//
  const swiper = new Swiper('.home_visual', {
    //autoplay:false,
    autoplay: { delay: 5000,}, //5초마다 한번씩 넘어감
    loop: true,
    navigation: { //양쪽 화살표 <>
      nextEl: '.next',
      prevEl: '.prev',
    },
    pagination: { // 아래 동그라미 
      el: '.indicator',
      type: 'bullets',
      clickable: true,
    }, 

    slidesPerView: 1,
    slidesPerGroup : 1,
  });







  //motion----------------------------------------------//
  var isStartMotion = true
  var rafId
  var scrollMotion = function () {
    if (!isStartMotion) return
    isStartMotion = false
    rafId = requestAnimationFrame(function () {
      //code start
      $(`.feature figure`).each(function(){
          var t = $(this).offset().top
          if(scry >= t - winh * .9) $(this).addClass('active')
          else $(this).removeClass('active')
      }) //each

      var t = $('.feature figure div').offset().top
      var h = $('.feature figure div').innerHeight()
      var meta = 0 + (scry - (t - winh * .5 + h * .5)) * .1
      if(meta > 10) meta = 10
      if(meta < -10) meta = -10
      $('.feature figure div img').css({'transform' : `scale(1.3) translateY(${meta}%)`})

      t = $('.latest .bottom').offset().top
      if(scry >= t - winh * .8) $('.latest .bottom').addClass('active')
      else $('.latest .bottom').removeClass('active')
      //code end
      isStartMotion = true
    }) //requestAnimationFrame
  } //scrollMotion

  scrollMotion()
  $(window).scroll(function () {
    scrollMotion()
  }).resize(function () {
    scrollMotion()
  })
}) //ready