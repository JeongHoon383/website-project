<script>
  $('body').css({
    'overflow': 'hidden'
  }) // body, ready는 바로 찾을 수 있음

  $(window).load(function() { // ready 다음 load가 발생, why? 이미지 비디오까지 다 읽고 랜더링  
    $('.preloader').fadeOut()
    $('body').css({
      'overflow': 'auto'
    })
  })
</script>
<div class="preloader">
  <div class="loader"></div>
</div>