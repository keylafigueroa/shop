function saludar() {
    alert('hola mundo');
}

$(document).ready(function(){  
// tm_top link

    $('#links_block_top .title_block').click(function() {
        $('#links_block_top .block_content').slideToggle("slow");
        $('#links_block_top .title_block').toggleClass('active');
      });
  

    // tm_vertical menu

$('.tmvm-contener .block-title').click(function() {
    $('#_desktop_top_menu #top-menu').slideToggle("slow");
    $('.tmvm-contener .block-title').toggleClass('active');
  });

});