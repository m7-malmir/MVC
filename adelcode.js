
$("#Err_PNL").hide();




$("#Req_Info").on("click", function () {
  let myarray = [];
  let row_count = $("#Req_Info").getNumberRows();
  for (let i = 1; i <= row_count; i++) {
    myarray[i] = $("#Req_Info").getValue(i, 1);
  }


  
  for (var a = 0; a < myarray.length; a++) {
    for (var b = a + 1; b < myarray.length; b++) {
      if (a == b || myarray[a] == "" || myarray[b] == "") {
        continue;
      }
      if (myarray[a] == myarray[b]) {
        $("#Req_Info").getControl(a, 1).css("background-color", "#e5383b");
        $("#Req_Info").getControl(b, 1).css("background-color", "#e5383b");
        $("#Req_Info").find("button").prop("disabled", true);
        $("#Err_PNL").show();
      } else if (myarray[a] != myarray[b]) {
        $("#Err_PNL").hide();
        var myElement = $("#Req_Info").getControl(a, 1);
        var myElement = $("#Req_Info").getControl(b, 1);
        myElement.css("background-color", "#fff");
        $("#Req_Info").find("button").prop("disabled", false);
      }
    }
  }
});
