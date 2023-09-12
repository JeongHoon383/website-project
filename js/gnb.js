$(function () {
  var rafId
  var isMotionStart = true
  var rafId2
  var isQuickStart = true


  var fnHeaderMotion = function () {
    if (!fnHeaderMotion) return
    isMotionStart = false
    rafId = requestAnimationFrame(function () {
      var scry = $(window).scrollTop()
      if (scry >= 40) {
        $('header').addClass('active')
      } else {
        $('header').removeClass('active')
      } //if else

      isMotionStart = true
    })
  }//fnHeaderMotion

  var fnQuickMenu = function () {
    if (!isQuickStart) return
    isQuickStart = false
    rafId2 = requestAnimationFrame(function () {
      var h = $('.quick').innerHeight()
      $('.quick').css({'top' : scry + winh * 0.5 - h * 0.5 })
      if(scry >= 200) $('.quick').addClass('active')
      else $('.quick').removeClass('active')
      isQuickStart = true
    })//requestAnimationFrame
  }//fnQuickMenu

  fnHeaderMotion()
  fnQuickMenu()

  $(window).scroll(function () {
    fnHeaderMotion()
    fnQuickMenu()

  }).resize(function () {
    fnHeaderMotion()
    fnQuickMenu()
  })

  $('.quick .top').click(function(){
    window.scrollTo({ //스크롤 위치로 강제로 0으로 바꾸겠다
      top : 0,
      behavior : 'smooth'
    })
  }) //top click



  $('.gnb > ul > li').mouseenter(function () {
    $(this).children('ul').stop().slideDown()
  }) //mouseEnter
  $('.gnb > ul > li').mouseleave(function () {
    $(this).children('ul').stop().slideUp()
  }) //mouseleave
}) //ready