$("*").on("mouseenter", function () {
let row_count = $("#group_cost_grid-body").getNumberRows();
for (var i = 0; i < row_count; i++) {

$("#group_cost_grid-body input[id='form[group_cost_grid]["+i+"][g2_shaba_number]']").on("click", function () {
  alert();
  //var hp=$("#group_cost_grid-body select[id='form[group_cost_grid]["+i+"][g2_banks_list]");
});
}

});














// let row_count = $("#person_cost_grid").getNumberRows();
// for (var i = 0; i < row_count+1; i++) {
// var io = "";
// $("#group_cost_grid-body input[id='form[group_cost_grid]["+i+"][g2_shaba_number]']").on("keypress", function (eve) {
//   if (eve.key == "Backspace" || eve.key == "Delete" || eve.key == "Alt") {
//     io = io.slice(0, io.length - 1).trim();
//   }
//   if (eve.key != "Backspace" && eve.key != "Delete" && eve.key != "Shift") {
//     var shaba = eve.key;
//     io = io + shaba;

//     if (io.length >= 5) {
//       var x = io.slice(3, 5);
//      if (x == "62") {
//       $("#group_cost_grid-body select[id='form[group_cost_grid]["+i+"][g2_banks_list]").val("8");//ayande
//       }else if (x == "17") {
//         $("#group_cost_grid-body select[id='form[group_cost_grid]["+i+"][g2_banks_list]").val("30");//meli
//       }else if (x == "19") {
//         $("#group_cost_grid-body select[id='form[group_cost_grid]["+i+"][g2_banks_list]").val("20");//saderat
//       }
//     }  
//   }

// });
// }