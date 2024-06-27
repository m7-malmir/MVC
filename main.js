  
      for (var i = row; i <= row; i++) {
      $("#TargetGrid1").setValue('', i, 1); 
      $("#TargetGrid1").setValue('', i, 2);     
      $("#TargetGrid1").setValue('', i, 3);     
      $("#TargetGrid1").setValue('', i, 4);     
      $("#TargetGrid1").setValue('', i, 5);
      $("#TargetGrid1").setValue('', i, 6); 
      $("#TargetGrid1").setValue('', i, 7);     
      $("#TargetGrid1").setValue('', i, 8);     
      $("#TargetGrid1").setValue('', i, 9);     
      $("#TargetGrid1").setValue('', i, 10);  
      $("#TargetGrid1").setValue('', i, 11); 
      $("#TargetGrid1").setValue('', i, 12);     
      $("#TargetGrid1").setValue('', i, 13);     
      $("#TargetGrid1").setValue('', i, 14);     
      $("#TargetGrid1").setValue('', i, 15);  
      $("#TargetGrid1").setValue('', i, 16); 
      $("#TargetGrid1").setValue('', i, 17);     
      $("#TargetGrid1").setValue('', i, 18);     
      $("#TargetGrid1").setValue('', i, 19);     
      $("#TargetGrid1").setValue('', i, 20);  
      $("#TargetGrid1").setValue('', i, 21); 
      
      
      $("#TargetGrid1").setValue(in1_col1, i, 1); 
      $("#TargetGrid1").setValue(in1_col2, i, 2);     
      $("#TargetGrid1").setValue(in1_col3, i, 3);     
      $("#TargetGrid1").setValue(in1_col4, i, 4);     
      $("#TargetGrid1").setValue(in1_col5, i, 5);
      $("#TargetGrid1").setValue(in1_col6, i, 6); 
      $("#TargetGrid1").setValue(in1_col7, i, 7);     
      $("#TargetGrid1").setValue(in1_col8, i, 8);     
      $("#TargetGrid1").setValue(in1_col9, i, 9);     
      $("#TargetGrid1").setValue(in1_col10, i, 10);  
      $("#TargetGrid1").setValue(in1_col11, i, 11); 
      $("#TargetGrid1").setValue(in1_col12, i, 12);     
      $("#TargetGrid1").setValue(in1_col13, i, 13);     
      $("#TargetGrid1").setValue(in1_col14, i, 14);     
      $("#TargetGrid1").setValue(in1_col15, i, 15);  
      $("#TargetGrid1").setValue(in1_col16, i, 16); 
      $("#TargetGrid1").setValue(in1_col17, i, 17);     
      $("#TargetGrid1").setValue(in1_col18, i, 18);     
      $("#TargetGrid1").setValue(in1_col19, i, 19);     
      $("#TargetGrid1").setValue(in1_col20, i, 20);  
      $("#TargetGrid1").setValue(in1_col21, i, 21); 
      


  }
/////////////////////////
  $("#button0000000002").click( function() {
    $("#264953613667937ca5cecb6039294258").saveForm();
    var kala2 = $("#suggestVar004").getText();
    var row = $('#gridVar001').getNumberRows();

    for (var i = row; i <= row; i++) {
        $("#gridVar001").setValue(kala2, i, 1);   
      if ($("#suggestVar004").getText() != '')
      {
        $("#gridVar001").addRow();
      }else{
        alert('نام کالا را وارد نمایید');
      } 
    }    
});
////////////////////////////
////////////////////////////
$("#button0000000001").click( function() {
    $("#798156738667bcd6079e606056200253").saveForm();

         var row = $('#input1').getNumberRows();
         for (var i = row; i <= row; i++) {
         var in1_col1 = $("#input1").getText(1,1);

           $("#TargetGrid1").setText(in1_col1, i, 1); 
                 $("#TargetGrid1").addRow();
            }
});
  /////////////////////////////////////// 