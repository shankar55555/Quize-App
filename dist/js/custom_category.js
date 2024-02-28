$(function () {

//******************************* ajax function for retrive category ***********************************//
  function showcategory() {
    $.ajax({
      url: "../../backhend/category_backhend.php/retrive_Category_data.php",
      type: "GET",

      success: function (data) {
        console.log("retrive data sucessfuly.");
        $("#inside_cat-div").html(data);
      },
      error: function () {
        console.log("function is fail");
      },
    });
  }
//   showcategory();

    //   ******************************* ajax function for add language ***********************************//
    $("#add_cat").click(function (e) {
      e.preventDefault();
      console.log("button pressed by you");
      let language = $("#input_of_category_data").val();
      technology = { category: language };
      console.log(technology);
  
      $.ajax({
        url: "../../backhend/category_backhend.php/add_Category.php",
        data: JSON.stringify(technology),
        type: "POST",
  
        success: function (data) {
          // console.log("data saved sucessfully in database");
          if (data === "Language added sucessfully") {
            $("#msg").html(
              data + "   " + `<img src="../../images/tick.png" width="20px">`
            );
          } else if (data == "") {
            $("#msg").html(data + "empty");
          }
  
          $("#myForm")[0].reset();
  
          showcategory();
        },
  
        error: function (data) {
          console.log("function is fail");
        },
      });
    });

      //******************************* ajax function for deleting category ***********************************//
  $("#inside_cat-div").on("click", "#delete_category", function () {
    alert("Press ok to delete the category");
    let id = $(this).attr("data-sid");
    console.log(id);
    mydata = { sid: id };

    $.ajax({
      url: "../../backhend/category_backhend.php/cat_delete.php",
      type: "POST",
      data: JSON.stringify(mydata),

      success: function (data) {
        // console.log(data);
        alert(data);
        showcategory();
      },
    });
  });
  showcategory();




  //******************************* ajax function for view language ***********************************//
//   $("#inside_lan-div").on("click", "#view_category", function () {
//     alert("Press ok to view the category");
//     let id = $(this).attr("data-sid");
//     console.log(id);
//     mydata = { sid: id };

//     var dataToSend = id;
//     var targetPage = "languages.html";

//     window.location.href =
//       targetPage + "?data=" + encodeURIComponent(dataToSend);
//   });

//   function view() {
//     var dataReceived = decodeURIComponent(window.location.search.split("=")[1]);
//     let language_id = dataReceived;
//     mydata = { id: language_id };
//     console.log(mydata);
//     $.ajax({
//       url: "../../backhend/view.php",
//       type: "POST",
//       data: JSON.stringify(mydata),

//       success: function (data) {
//         console.log("function is scucess");
//         $("#question-card").html(data);
//       },
//       error: function () {
//         console.log("function is fail");
//       },
//     });
//   }
//   view();



  //******************************* ajax function for view category ***********************************//
//   $("#option_cat").change(function () {
//     var id = $(this).find(":selected").attr("id");
//     mydata = { selectedOptionid: id };
//     $("#lang-id").val(id);

//     $.ajax({
//       url: "../../backhend/all questions/retrive_data_Html_question.php",
//       type: "POST",
//       data: JSON.stringify(mydata),

//       success: function (data) {
//         $("#question-card").html(data);
//       },
//       error: function () {
//         alert("error");
//       },
//     });
//   });
});