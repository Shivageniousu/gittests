$(document).foundation(),$(document).ready(function(){$(".orgbutton").on("click",function(){setTimeout(function(){var t,o;t=function(){var o=!1;try{parentIFrame&&(o=!0)}catch(t){o=!1}return o}(),o=$("#price_t").position().top,t?parentIFrame.scrollToOffset(0,o):scrollTo(0,o)},250)})});