$(document).ready(function () {


  $(window).on("load", function() {
    console.log("window Loaded");
    document.getElementById('ig1').src = "css/images/load-ic.gif";
    var i = 1;
    $.ajax({
              type: "POST",
              data: {refer: 'get-info'},
              url: "core/worker.php",
              success: function(data){
                var myObj = JSON.parse(data);
                document.getElementById('loadimg').innerHTML = '<img id="ig1">';
                $('.loadimg').addClass('remove-loader');
                $('.user-tb').removeClass('hide-user-tb');
                /*
                for (var dt in myObj) {
                  $('.user-tb').append("<tr class='u-tb-tr'>" + "<td>" + i +"</td>" + "<td>" + myObj[dt]['Section'] +"</td>" + "<td>" + myObj[dt]['Course id'] +"</td>" + "<td>" + myObj[dt]['Youtube Video Url'] +"</td>" + "</tr>");
                  i++;
                }
                */
                for (var dt in myObj) {
                  $('.user-tb').append("<tr class='u-tb-tr'>" + "<td>" + i +"</td>" + "<td colspan='2' id='tvc'>" +
                  "<iframe src='https://www.youtube.com/embed/"+ get_url(myObj[dt]['Youtube Video Url']) +"' width='420' height='215' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
                  +"</td>" + "<td>" + "<span class='span1'><u>Section</u> - "+ myObj[dt]['Section'] +"</span>" +
                  "<span class='span2'><u>Course Id</u> - "+ myObj[dt]['Course id'] +"</span>" + "</td>" + "</tr>");
                  i++;
                }
              }
    });
  })

  $('.fs1, .fs2').on('change',function(){
    var sec = $('.fs1').find("option:selected").val();
    var id = $('.fs2').find("option:selected").val();
    console.log('sec-'+sec + '&& id-'+id);
    var i = 1;
    $(".u-tb-tr").empty();
    $.ajax({
      type: "POST",
      data: {refer: 'filter-res',sec: sec,id: id},
      url: "core/worker.php",
      success: function(data){
        //console.log(data);
        var myObj = JSON.parse(data);
        document.getElementById('loadimg').innerHTML = '<img id="ig1">';
        $('.loadimg').addClass('remove-loader');
        $('.user-tb').removeClass('hide-user-tb');
        /*for (var dt in myObj) {
          $('.user-tb').append("<tr class='u-tb-tr'>" + "<td>" + i +"</td>" + "<td>" + myObj[dt]['Section'] +"</td>" + "<td>" + myObj[dt]['Course id'] +"</td>" + "<td>" + myObj[dt]['Youtube Video Url'] +"</td>" + "</tr>");
          i++;
        }*/

        //var vid = myObj[dt]['Youtube Video Url'];

        for (var dt in myObj) {
          $('.user-tb').append("<tr class='u-tb-tr'>" + "<td>" + i +"</td>" + "<td colspan='2' id='tvc'>" +
          "<iframe src='https://www.youtube.com/embed/"+ get_url(myObj[dt]['Youtube Video Url']) +"' width='420' height='215' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
          +"</td>" + "<td>" + "<span class='span1'><u>Section</u> - "+ myObj[dt]['Section'] +"</span>" +
          "<span class='span2'><u>Course Id</u> - "+ myObj[dt]['Course id'] +"</span>" + "</td>" + "</tr>");
          i++;
        }


      }
    });
  });


  $('.mfd').one("click", function() {

  });

});
function get_url(url) {
  //var url= 'http://youtu.be/0zM3nApSvMg';
  var urlsplit= url.split(/^.*(youtu.be\/|v\/|embed\/|watch\?|youtube.com\/user\/[^#]*#([^\/]*?\/)*)\??v?=?([^#\&\?]*).*/);
  //console.log("url->"+urlsplit[3]);
  //console.log("url2->"+urlsplit[2]);
  return urlsplit[3];
}
//get_url();
/*
<tr class="u-tb-tr">
  <td> 6 </td>
  <td colspan="2" id="tvc">
    <iframe src='https://www.youtube.com/embed/ygf9cukqHW8' width='420' height='215' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
  </td>
  <td>
    <span class='span1'><u>Section</u> - use3@user.com</span>
    <span class='span2'><u>Course Id</u> - usfsdser.com</span>
  </td>
</tr>

*/
