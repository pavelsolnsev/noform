//=require lazy/script.js
//=require slick/script.js
//=require fancybox/script.js



$(function() {



  headerColor();



  $('.programm__el').click(function() {

    $(this).toggleClass('on');

    $(this).find('.programm__el-text').slideToggle()

  })



  $('.people__el-special').click(function () {

    $(this).toggleClass('on');

    $(this).find('.people__el-body').toggleClass('active');

  })



  $('.faq__line').click(function() {

    $(this).toggleClass('on');

    $(this).find('.faq__answer').slideToggle();

  })



  function headerColor() {

    $(document).ready(function () {

      let $bg_header = $('.header');

      let scroll_transp = 20;

      let scroll_white = 30;



      $(window).scroll(function () {

        let scroll_current = $(this).scrollTop();

        if (scroll_current < scroll_transp) {

          $bg_header.stop().animate({

            opacity: 1

          });

          $bg_header.removeClass('fix');

        } else if (scroll_current > scroll_white) {

          $bg_header.stop().animate({

            opacity: 1

          });

          $bg_header.addClass('fix');

        } else {

          bg_state = null;

          $bg_header.stop().animate({

            opacity: (scroll_current - scroll_transp) / (scroll_white - scroll_transp)

          });

        }

      });

    });

  };



  $(".toggle-menu").click(function () {

    $(this).toggleClass("on");

    $(".header__nav").toggleClass("on");

    return false;

  });



  $("[data-href]").each(function () {

    $(this).click(function () {

      $("html, body").animate(

        { scrollTop: $($(this).attr("data-href")).offset().top - 109 },

        500

      );

      $(".header__nav").removeClass("on");

      $(".toggle-menu").removeClass("on");

      return false;

    });

  });



  $('.fancybox-media').fancybox({

    width: 1100,

    height: 600,

    autoSize: false,

    closeClick: false,

    openEffect: 'none',

    closeEffect: 'none'

  });



  $(".nav__item-close").each(function () {

    $(this).click(function () {

      $(".header__nav").removeClass("on");

      $(".toggle-menu").removeClass("on");

      return false;

    });

  });







// SCROLL ON PAGE

  $(".scroll").click(function() {

    $("html, body").animate({

      scrollTop: 0

    }, 300);

  });





  var cur_scroll;

  var ai_scroll = $(".scroll");

  var w_cur_scroll = $(window).scrollTop();



  $(window).scroll(function() {

    if($(window).scrollTop() < w_cur_scroll) {

      if($(ai_scroll).hasClass("active")) {

        clearTimeout(cur_scroll);

        cur_scroll = setTimeout(function() {$(ai_scroll).removeClass("active");}, 3000)

      }

      if(!$(ai_scroll).hasClass("active")) {

        $(ai_scroll).addClass("active");

        cur_scroll = setTimeout(function() {$(ai_scroll).removeClass("active");}, 3000)

      }



    }

    w_cur_scroll = $(window).scrollTop();

    if($(window).scrollTop() > 0) $('.header').addClass('fixed');

    else $('.header').removeClass('fixed');

  });



  if($(window).scrollTop() > 0) $('.header').addClass('fixed');

    else $('.header').removeClass('fixed');





  var x, i, j, l, ll, selElmnt, a, b, c;

  /* Look for any elements with the class "custom-select": */

  x = document.getElementsByClassName("custom-select");

  l = x.length;

  for (i = 0; i < l; i++) {

      selElmnt = x[i].getElementsByTagName("select")[0];

      ll = selElmnt.length;

      /* For each element, create a new DIV that will act as the selected item: */

      a = document.createElement("DIV");

      a.setAttribute("class", "select-selected");

      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;

      x[i].appendChild(a);

      /* For each element, create a new DIV that will contain the option list: */

      b = document.createElement("DIV");

      b.setAttribute("class", "select-items select-hide");

      for (j = 1; j < ll; j++) {

          /* For each option in the original select element,

          create a new DIV that will act as an option item: */

          c = document.createElement("DIV");

          c.innerHTML = selElmnt.options[j].innerHTML;

          c.addEventListener("click", function(e) {

              /* When an item is clicked, update the original select box,

              and the selected item: */

              var y, i, k, s, h, sl, yl;

              s = this.parentNode.parentNode.getElementsByTagName("select")[0];

              sl = s.length;

              h = this.parentNode.previousSibling;

              for (i = 0; i < sl; i++) {

                  if (s.options[i].innerHTML == this.innerHTML) {

                      s.selectedIndex = i;

                      h.innerHTML = this.innerHTML;

                      y = this.parentNode.getElementsByClassName("same-as-selected");

                      yl = y.length;

                      for (k = 0; k < yl; k++) {

                          y[k].removeAttribute("class");

                      }

                      this.setAttribute("class", "same-as-selected");

                      break;

                  }

              }

              h.click();

          });

          b.appendChild(c);

      }

      x[i].appendChild(b);

      a.addEventListener("click", function(e) {

          /* When the select box is clicked, close any other select boxes,

          and open/close the current select box: */

          e.stopPropagation();

          closeAllSelect(this);

          this.nextSibling.classList.toggle("select-hide");

          this.classList.toggle("select-arrow-active");

      });

  }



  function closeAllSelect(elmnt) {

      /* A function that will close all select boxes in the document,

      except the current select box: */

      var x, y, i, xl, yl, arrNo = [];

      x = document.getElementsByClassName("select-items");

      y = document.getElementsByClassName("select-selected");

      xl = x.length;

      yl = y.length;

      for (i = 0; i < yl; i++) {

          if (elmnt == y[i]) {

              arrNo.push(i)

          } else {

              y[i].classList.remove("select-arrow-active");

          }

      }

      for (i = 0; i < xl; i++) {

          if (arrNo.indexOf(i)) {

              x[i].classList.add("select-hide");

          }

      }

  }



  /* If the user clicks anywhere outside the select box,

  then close all select boxes: */

  document.addEventListener("click", closeAllSelect);

})
//=require variants/script.js
//=require popups/script.js
