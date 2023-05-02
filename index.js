function loadtable() {
  $("#main-content").load("table.php");
}

loadtable();

$("#insert").on("submit", function (e) {
  e.preventDefault();
  let id = $("#idrow").val();
  console.log(id);
  if (id == "") {
    console.log("inside insert");
    callajax(1, new FormData(this));
  }
});

function deleterow(x) {
  console.log(x);
  let obj = {
    id: x,
  };
  callajax(4,obj);
}

function updaterow(x) {
  $("#insert").attr("id", "update");
  $.ajax({
    url: "update.php",
    type: "POST",
    data: {
      id: x,
    },
    dataType: "JSON",
    success: function (data) {
      $("#idrow").val(x);
      $("#name").val(data.name);
      $("#email").val(data.email);
      data.doi.includes("php") == true
        ? $("#customCheck1").prop("checked", true)
        : $("#customCheck1").prop("checked", false);
      data.doi.includes("java") == true
        ? $("#customCheck2").prop("checked", true)
        : $("#customCheck2").prop("checked", false);
      data.doi.includes("js") == true
        ? $("#customCheck3").prop("checked", true)
        : $("#customCheck3").prop("checked", false);
      $("#submit").html("update");

      $("#update").on("submit", function (e) {
        e.preventDefault();
        callajax(2, new FormData(this));
      });
    },
    error: function (data) {
      console.log("error");
      console.log(data);
    },
  });
}

function deleteimage(id, imageid) {
  let obj = { id : id, x: imageid };
  callajax(3, obj);
//   $.ajax({
//     url: "deleteimage.php",
//     type: "POST",
//     data: { id : id, x: imageid },
//     success: function (data) {
//       $("#targetLayer").html(data);
//       loadtable();
//       // return false;
//     },
//     error: function (data) {
//       console.log("error");
//       console.log(data);
//     },
//   });
}

function callajax(flag, formdta) {
  let link = flag == 1 ? "insert.php" : "updatedata.php";
  if (flag == 3) link = "deleteimage.php";
  if (flag == 4) link = "delete.php";
  var condition = flag == 1 || flag == 2; 
  console.log(formdta)
  let obj ={
    url: link,
    type: "POST",
    contentType: false,
    cache: false,
    processData: false,
    data: JSON.parse(formdta),
    success: function (data) {
      $("#targetLayer").html(data);
      loadtable();
      // return false;
    },
    error: function (data) {
      console.log("error");
      console.log(data);
    }
  }
   let obj2 ={
    url: link,
    type: "POST",
    contentType: false,
    success: function (data) {
      $("#targetLayer").html(data);
      loadtable();
      // return false;
    },
    error: function (data) {
      console.log("error");
      console.log(data);
    }
  }
  $.ajax({
    url: link,
    type: "POST",
    contentType: false,
    cache: false,
    processData: false,
    data: JSON.parse(formdta),
    success: function (data) {
      $("#targetLayer").html(data);
      loadtable();
      // return false;
    },
    error: function (data) {
      console.log("error");
      console.log(data);
    }
  });
}
