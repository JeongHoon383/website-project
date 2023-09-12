$(function(){
  var url = location.href // 현재 주소를 가져오거나 바꾸는 기능
  var menu ; var page 
  if(url.includes('greet')){ // 주소에 greet라는 주소가 포함되어있으면
    menu = 1; page = 1
  }else if(url.includes('location')){
    menu = 1; page = 2
  }else if(url.includes('biz-intro.php')){
    menu = 2; page = 1
  }else if(url.includes('biz-area.php')){
    menu = 2; page = 2
  }else if(url.includes('gallery.php')){
    menu = 3; page = 1
  }else if(url.includes('online.php')){
    menu = 4; page = 1
  }else if(url.includes('notice.php')){
    menu = 5; page = 1
  }else if(url.includes('board.php')){
    menu = 5; page = 2
  }else if(url.includes('faq.php')){
    menu = 5; page = 3
  }

  $(`.snb .menu${menu}`).show()
  $(`.snb .menu${menu}_${page}`).addClass('active')

  var category = $(`.snb .menu${menu} > a`).text()
  $('.breadcrumb li.category').text(category)
  var pageTitle = $(`.snb .menu${menu}_${page}`).text()
  $('.breadcrumb li.page').text(pageTitle)

  $(`.sub_visual${menu}`).css({'display':'flex'})
  /* .show -> display를 block으로 바꿈 
  안에 텍스트 위치가 깨짐 why? flex 레벨이 바뀌기 때문 */
  setTimeout(function(){
    $(`.sub_visual${menu}`).addClass('active') // 딜레이를 줘야됨
  },1)
  
}) //ready