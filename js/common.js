$(function () {
  var fnGetWinInfo = function () {

    window.scry = $(window).scrollTop() // window. : 전역 변수, 어디서든 쓸 수 있다
    window.scrx = $(window).scrollLeft()
    window.winh = $(window).height()
    window.winw = $(window).width()
  }
  
  fnGetWinInfo()

  $(window).scroll(function(){
    fnGetWinInfo()
  }).resize(function(){
    fnGetWinInfo()
  })
}) //ready