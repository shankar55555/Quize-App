  // ******************************************** profile.php ***********************//
  $(document).ready(function(){
    console.log("click");
    $.ajax({
      url: "backhend/getting_user_data.php",
      method: "GET",

      success: function (data) {
        console.log("data");
        $("#table_2").html(data);
      },
      error: function (data) {
        console.log("error");
      },
    });
  });


