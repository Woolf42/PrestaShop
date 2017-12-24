jQuery(document).ready(function(){
   $(".ddsmoothmenu-v ul li a.rootmaoblockcategories").hover(
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorhoverroot }, mao_blockcateg_colorrootdelay);},
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorroot }, mao_blockcateg_colorrootdelay);}
   );
   $(".ddsmoothmenu-v ul li a.maoblockcategories").hover(
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorhoverbranch }, mao_blockcateg_colorbranchdelay);},
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorbranch }, mao_blockcateg_colorbranchdelay);}
   );
   $(".ddsmoothmenu-v ul li a.rootselected-category").hover(
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorhoverselroot }, mao_blockcateg_colorrootdelay);},
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorselroot }, mao_blockcateg_colorrootdelay);}
   );
   $(".ddsmoothmenu-v ul li a.selected-category").hover(
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorhoverselbranch }, mao_blockcateg_colorbranchdelay);},
      function() {$(this).animate({ backgroundColor: "#" + mao_blockcateg_colorselbranch }, mao_blockcateg_colorbranchdelay);}
   );
});