(function ($) {
  "use strict";

  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    pagination: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var box = $(".header-text").height();
    var header = $("header").height();

    if (scroll >= box - header) {
      $("header").addClass("background-header");
    } else {
      $("header").removeClass("background-header");
    }
  });

  // Mobile menu dropdown
  $(".submenu").on("click", function () {
    var width = $(window).width();
    if (width < 992) {
      $(".submenu ul").toggleClass("active");
    }
  });

  // Scroll animation init
  window.sr = new scrollReveal();

  // Menu Dropdown Toggle
  if ($(".menu-trigger").length) {
    $(".menu-trigger").on("click", function () {
      $(this).toggleClass("active");
      $(".header-area .nav").slideToggle(200);
    });
  }

  // Menu elevator animation
  $("a[href*=\\#]:not([href=\\#])").on("click", function () {
    if (
      location.pathname.replace(/^\//, "") ==
      this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        var width = $(window).width();
        if (width < 991) {
          $(".menu-trigger").removeClass("active");
          $(".header-area .nav").slideUp(200);
        }
        $("html,body").animate(
          {
            scrollTop: target.offset().top - 80,
          },
          700
        );
        return false;
      }
    }
  });

  $(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on("click", function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $("a").each(function () {
        $(this).removeClass("active");
      });
      $(this).addClass("active");

      var target = this.hash,
        menu = target;
      var target = $(this.hash);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: target.offset().top - 79,
          },
          500,
          "swing",
          function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
          }
        );
    });
  });

  function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $(".nav a").each(function () {
      var currLink = $(this);

      try {
        var refElement = $(currLink.attr("href"));
        if (
          refElement.position().top <= scrollPos &&
          refElement.position().top + refElement.height() > scrollPos
        ) {
          $(".nav ul li a").removeClass("active");
          currLink.addClass("active");
        } else {
          currLink.removeClass("active");
        }
      } catch (e) {
        // Ignore href='javascript:;'
      }
    });
  }

  const Accordion = {
    settings: {
      // Expand the first item by default
      first_expanded: false,
      // Allow items to be toggled independently
      toggle: false,
    },

    openAccordion: function (toggle, content) {
      if (content.children.length) {
        toggle.classList.add("is-open");
        let final_height = Math.floor(content.children[0].offsetHeight);
        content.style.height = final_height + "px";
      }
    },

    closeAccordion: function (toggle, content) {
      toggle.classList.remove("is-open");
      content.style.height = 0;
    },

    init: function (el) {
      const _this = this;

      // Override default settings with classes
      let is_first_expanded = _this.settings.first_expanded;
      if (el.classList.contains("is-first-expanded")) is_first_expanded = true;
      let is_toggle = _this.settings.toggle;
      if (el.classList.contains("is-toggle")) is_toggle = true;

      // Loop through the accordion's sections and set up the click behavior
      const sections = el.getElementsByClassName("accordion");
      const all_toggles = el.getElementsByClassName("accordion-head");
      const all_contents = el.getElementsByClassName("accordion-body");
      for (let i = 0; i < sections.length; i++) {
        const section = sections[i];
        const toggle = all_toggles[i];
        const content = all_contents[i];

        // Click behavior
        toggle.addEventListener("click", function (e) {
          if (!is_toggle) {
            // Hide all content areas first
            for (let a = 0; a < all_contents.length; a++) {
              _this.closeAccordion(all_toggles[a], all_contents[a]);
            }

            // Expand the clicked item
            _this.openAccordion(toggle, content);
          } else {
            // Toggle the clicked item
            if (toggle.classList.contains("is-open")) {
              _this.closeAccordion(toggle, content);
            } else {
              _this.openAccordion(toggle, content);
            }
          }
        });

        // Expand the first item
        if (i === 0 && is_first_expanded) {
          _this.openAccordion(toggle, content);
        }
      }
    },
  };

  (function () {
    // Initiate all instances on the page
    const accordions = document.getElementsByClassName("accordions");
    for (let i = 0; i < accordions.length; i++) {
      Accordion.init(accordions[i]);
    }
  })();

  // Home seperator
  if ($(".home-seperator").length) {
    $(".home-seperator .left-item, .home-seperator .correct-item").imgfix();
  }

  // Home number counterup
  if ($(".count-item").length) {
    $(".count-item strong").counterUp({
      delay: 10,
      time: 1000,
    });
  }

  // Page loading animation
  $(window).on("load", function () {
    if ($(".cover").length) {
      $(".cover").parallax({
        imageSrc: $(".cover").data("image"),
        zIndex: "1",
      });
    }

    $("#preloader").animate(
      {
        opacity: "0",
      },
      600,
      function () {
        setTimeout(function () {
          $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
      }
    );
  });

  // ***************************** user.php code*******************************************//

  // ***************************** logout-btn function*******************************************//
  $("#logout_btn").click(function () {
    alert("logout process done sucessfully");

    $.ajax({
      url: "backhend/logout_user.php",
      method: "POST",

      sucess: function (data) {
        console.log("function is sucess");
        location.reload();
      },
    });
  });

  // ********************************* show language in frontend.php *****************************************//
  function showlanguage() {
    $.ajax({
      url: "backhend/retrive_lan_user.php",
      type: "GET",

      success: function (data) {
        $("#category").html(data);
      },
      error: function () {
        console.log("function is fail");
      },
    });
  }
  showlanguage();

  // ********************************* Frontend.html *****************************************//

  $("#category").on("click", "#click_view", function () {
    window.location.href = "showquestion.php";
    let id = $(this).attr("data-sid");

    var dataToSend = id;
    var targetPage = "showquestion.php";

    window.location.href =
      targetPage + "?data=" + encodeURIComponent(dataToSend);
  });

  function view_language_name() {
    var dataReceived = decodeURIComponent(window.location.search.split("=")[1]);
    let language_id = dataReceived;

    return language_id;
  }
  view_language_name();

  // ***************************** show question code *******************************************//

  // ********************************* show html question *****************************************//
  $.ajax({
    url: "backhend/check_user_for_result.php",
    method: "GET",

    success: function (data) {
      // console.log(data);
      if (data == "") {
        $("#popup").css("visibility", "visible");

        $("#cut").click(function () {
          $("#popup").css("visibility", "hidden");
        });
      }
    },
    error: function (error) {
      console.log("error");
    },
  });

  $("#login_pop").click(function () {
    $("#popup_login").css("visibility", "visible");
    $("#popup").css("visibility", "hidden");
  });

  $("#sign_pop").click(function () {
    $("#popup_signup").css("visibility", "visible");
    $("#popup").css("visibility", "hidden");
  });

  function welcome_quiz() {
    $("#quiz").css("display", "none");
  }
  welcome_quiz();

  // ****************************************************************************************************//
  let id = view_language_name();
  let array = []; //pushing Question no id and input value...
  let array_2 = [];
  let correct = 0;
  let wrong = 0;
  let empty = 0;
  let sec;
  let width = 20;
  let startTime;
  let srno = 1;



  // ***************************** function for start button ****************************************//
  $("#start_btn").click(function () {
    // function countDown();
    startTime = new Date();

    document.getElementById("head").style.display = "none";
    document.getElementById("heading_text").style.display = "none";
    document.getElementById("start_btn").style.display = "none";
    document.getElementById("quiz").style.display = "block";

    $.ajax({
      url: "backhend/show_question_data.php",
      method: "POST",
      data: { lan_id: id },
      dataType: "json",

      success: function (data) {
        sec = 10;
        $("#number").html(srno + ".");
        $("#Question").html(data[0].questions);
        console.log(data[0].questions);
        $("#one").html(data[0].first_option);
        $("#two").html(data[0].second_option);
        $("#three").html(data[0].third_option);
        $("#four").html(data[0].fourth_option);
        let ans = data[0].answer;
        console.log(ans);
        $("#input").val(data[0].id); ///   database question id...},
      },
      error: function () {
        console.log("error");
      },
    });
  });

  $(".in").on("change", function () {
    $('#next_btn').css('pointer-events', 'auto');
    $('#next_btn').css('opacity', '1');
    let endTime = new Date();
    clearInterval(clear);
    let timeTaken = (endTime - startTime) / 1000; // Convert to seconds
    console.log("Time taken to answer:", timeTaken, "seconds");
  });

  // ************************************ function for next button ****************************************//
  let next_btn = document.getElementById("next_btn");
  next_btn.addEventListener("click", next);
  // $("#next_btn").click(function () {
  function next() {
    $('#next_btn').css('pointer-events', 'none');
    $('#next_btn').css('opacity', '0.5');
    startTime = new Date();
    var val = $("input[name='option']:checked").val();
    let questionNumber = $("#input").val(); //array of Question.no and input value

    let selectedLabel = $(`input[name='option'][value='${val}']`).next("label");
    let userAnswer = selectedLabel.html();
    console.log("Your answer is - " + userAnswer);
    let my_previous_ques = { put: questionNumber, val: val };
    array_2.push(my_previous_ques);
    // console.log(array_2);
    let my_data = [questionNumber, userAnswer];
    array.push(my_data);
    // console.log(my_data);

    $.ajax({
      url: "backhend/show_question_data.php",
      method: "POST",
      data: { lan_id: id, put: questionNumber },
      dataType: "json",

      success: function (data) {
        sec = 10;
        $("#number").html(srno + ".");
        $("#Question").html(data[0].questions);
        console.log(data[0].questions)
        $("#one").html(data[0].first_option);
        $("#two").html(data[0].second_option);
        $("#three").html(data[0].third_option);
        $("#four").html(data[0].fourth_option);
        let ans = data[0].answer;
        console.log(ans);
        $("#input").val(data[0].id); ///   database question id...
      },
      error: function () {
        console.log("error");
      },
    });

    // When quiz is finsihed........................

    console.log("Question no.- " + srno);
    if (srno == 5) {
      clearInterval(clear);
      console.log(array);
      $.ajax({
        url: "backhend/insert_question_data.php",
        method: "POST",
        data: { userResponses: JSON.stringify(array), lan_id: id },
        // dataType: "json",
        success: function (response) {
          console.log("inserted sucessfully" + response);
        },
        error: function () {
          console.log("error");
        },
      });

      // check user result quiz result....................

      $.ajax({
        url: "backhend/check_user_for_result.php",
        method: "GET",

        success: function (data) {
          if (data) {

            $.ajax({
              url: "backhend/retrive_result_of_quiz.php",
              method: "POST",
              data: { userResponses: JSON.stringify(array), lan_id: id },
              dataType: "json",
              success: function (response) {
                console.log(response);
                correct = response.correctCount;
                wrong = response.wrongCount;
                empty = response.emptyCount;

                console.log("Correct: " + correct);
                console.log("Wrong: " + wrong);
                console.log("Empty: " + empty);
                $("#container_fluid").html(`<div class="mx-4 my-4">
                    <h2 class="text-light d-flex justify-content-center">Thank you for participating the quiz</h2><br>
                    <h2 class="text-light">Your Result:</h2>
                    <div class="border d-flex justify-content-around"><h4 class="text-light">Correct</h4><h4 class="text-success">${correct}</h4></div>
                    <div class="border d-flex justify-content-around"><h4 class="text-light">wrong</h4><h4 class="text-danger">${wrong}</h4></div>
                    <div class="border d-flex justify-content-around"><h4 class="text-light">Empty</h4><h4 class="text-light">${empty}</h4></div>
                    <div id="sub_or_pro_btn">
                    <button type="button" class="btn btn-outline-light" id="submit_btn" style=" font-family: 'Roboto Slab', serif;" >Details</button>
                    <button type="button" class="btn btn-outline-light" id="profile" style=" font-family: 'Roboto Slab', serif;" >Porfile</button>
                    </div>
                <div id="details" style="color: white; border: 2px solid white;">
                <table>
                <tr>
                    <th style="width: 600px;">Question</th>
                    <th style="width: 200px;">Your answer</th>
                    <th style="width: 200px;">Correct Answer</th>
                </tr>
                <table id ="add">
                <tr>
        
                </tr>
            </table>
            </table>
       
                </div>`);
                $("#details").css("visibility", "hidden");
              },
              error: function () {
                console.log("error");
              },
            });

          } else {

            window.location.href = "frontend.php";
          }
        },
        error: function () {
          alert("fail");
        },
      });
    }
    srno++;
    reset();
  }
  // });


  // *********************************** Function for details button **********************************//
  $("body").on("click", "#submit_btn", function () {
    $("#details").css("visibility", "visible");
    $.ajax({
      url: "backhend/sumary.php",
      method: "GET",
      data: { lan_id: id },

      success: function (data) {
        $("#add").html(data);
      },
      error: function () {
        console.log("function is fail");
      },
    });
  });

    // *********************************** Function for go to profile button **********************************//
    $("body").on("click", "#profile", function () {
      window.location.href = "profile.php";
      // $.ajax({
      //   url: "backhend/sumary.php",
      //   method: "GET",
      //   data: { lan_id: id },
  
      //   success: function (data) {
      //     $("#add").html(data);
      //   },
      //   error: function () {
      //     console.log("function is fail");
      //   },
      // });
    });


  // ******************************** function foe previous buton **********************************//
  $("#previous_btn").click(function () {
    console.log("function start for previous");
    let pre = $("#input").val();
    console.log(pre);
    srno--;
    if (srno < 1) {
      srno = "1";
    }
    $.ajax({
      url: "backhend/show_question_data.php",
      method: "POST",
      data: { lan_id: id, pre: pre },
      dataType: "json",

      success: function (data) {
        sec = 10;
        $("#number").html(srno + ".");
        $("#Question").html(data[0].question);
        $("#one").html(data[0].first_option);
        $("#two").html(data[0].second_option);
        $("#three").html(data[0].third_option);
        $("#four").html(data[0].fourth_option);
        let ans = data[0].answer;
        $("#input").val(data[0].id);
        let prequ = data[0].id;

        let obj = array_2.find((o) => o.put === prequ);
        let match = obj.val;
        nm.forEach((input) => {
          if (match == input.value) {
            console.log("True");
            input.checked = true;
          } else {
            console.log("False");
          }
        });
      },

      error: function () {
        console.log("function is fail");
      },
    });
  });

  //  ********************** function for reset the selected option *******************************************//
  let nm = document.querySelectorAll(".in");
  const reset = () => {
    nm.forEach((input) => {
      input.checked = false;
    });
  };

  // ********************************** countdown function ***************************************************//
  function countDown() {
    $("#time").html(sec);
    sec--;

    if (sec < 0) {
      next();
    }
  }
  let clear = setInterval(countDown, 1000);

  
})(window.jQuery);
