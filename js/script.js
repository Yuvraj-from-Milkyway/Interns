$(document).ready(function () {

  var sc1 = [112,113];
  var sc2 = [221,223];
  var sc3 = [331,322];
  var sc4 = [442,448];

  $('.s1').on('change',function() { 

    var item = $(this).find("option:selected").val();
    var sec = item;    
    $(".d2").empty();
    $(".d2").css({'display':'block', "margin-top": "20px"});

    $(".d2").append("<div class='st-sub-inner'><select class='s2' name='id' id='' required> <option value=''>Choose Course Id</option> </select></div>");

    var myItems = [];
    function loop_ed(val) {
      myItems.push( "<option>"+val+"</option>" );
    }
    var myList = $( ".s2" );
    if (item == 1) {
      sc1.forEach(loop_ed);
    } else if (item == 2){
      sc2.forEach(loop_ed);
    } else if (item == 3){
      sc3.forEach(loop_ed);
    } else if (item == 4){
      sc4.forEach(loop_ed);
    } else{
      $(".d2").empty();
      $(".d2").css({'display':'none'});
    }
    myList.append( myItems.join( "" ) );

    $('.s2').on('change',function(){
      var id = $(this).find("option:selected").val();      
      $(".d3").empty();
      $(".d3").css({'display':'block', "margin-top": "20px"});
      $(".d3").append("<div class='d4'><input type='text' class='url' name='url' placeholder='Enter Youtube URL Here'/></div>");

      $('.d4 .url').on('change', function () {
        var url = $(this).val();        
      });
    });
  });
});
