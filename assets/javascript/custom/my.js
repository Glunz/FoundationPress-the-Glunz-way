// Replace SVG with PNG on Browser with no SVG support
if(!Modernizr.svg) {
  $('img[src*="svg"]').attr('src', function() {
    return $(this).attr('src').replace('.svg', '.png');
  });
}

$('.sprite-AlpWeek_Logo_1').hover(
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_pos_1");
   }, 
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_1");
   }
);

$('.sprite-AlpWeek_Logo_2').hover(
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_pos_2");
   }, 
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_2");
   }
);

$('.sprite-AlpWeek_Logo_3').hover(
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_pos_3");
   }, 
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_3");
   }
);

$('.sprite-AlpWeek_Logo_4').hover(
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_pos_4");
   }, 
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_4");
   }
);

$('.sprite-AlpWeek_Logo_5').hover(
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_pos_5");
   }, 
   function () {
      $(this).find("use").attr("xlink:href","#sprite-AlpWeek_Logo_5");
   }
);