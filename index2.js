$(document).ready(function () {
  $("*").on("mouseenter", function () {
    let row_count = $("#Req_Info").getNumberRows();
  for (i = 0; i <= row_count; i++) {
      $("#Req_Info-body input[id='form[Req_Info]["+i+"][Personal_Code]']").attr("oninput","duplicates()"); 
    
	}
  
   });
 });

    function duplicates() {
  let myarray = [];
  let row_count = $("#Req_Info").getNumberRows();
  for (var i = 1; i < row_count+1; i++) {
         myarray[i] =$("#Req_Info-body input[id='form[Req_Info]["+i+"][Personal_Code]']").val(); 
  }
   for (var i = 0; i < myarray.length; i++) {
      let flag = false;
      for (var j = 0; j < myarray.length; j++) {
          if (i == j || myarray[i] == "" || myarray[j] == "")
              continue;
          if (myarray[i] == myarray[j]) {
            flag = true;
            $("#Req_Info-body input[id='form[Req_Info]["+i+"][Personal_Code]']").css("background-color", "#e5383b");
          }
      }
     
     if(flag==false)
         $("#Req_Info-body input[id='form[Req_Info]["+i+"][Personal_Code]']").css("background-color", "#fff");
            
  }
}