<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
     <link rel="stylesheet" href="css/master.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="js/master.js" charset="utf-8"></script>
   </head>
   <body>
     <section>
       <div class="m-div">
         <div class="col-md-8 col-sm-8 col-8">
           <fieldset class='field'>
             <legend class="filter">Filter results</legend>
             <div class="mfd">
               <form class="" action="" method="post">
                 <div class="fd1">
                   <select class="fs1" name="fsec">
                     <option value="">Choose Your Section</option>
                     <option value="1">|</option>
                     <option value="2">||</option>
                     <option value="3">|||</option>
                     <option value="4">||||</option>
                   </select>
                 </div>
                 <div class="fd2">
                   <select class="fs2" name="fcid">
                     <option value="">Select Course Id</option>
                     <option value="112">112</option>
                     <option value="113">113</option>
                     <option value="221">221</option>
                     <option value="223">223</option>
                     <option value="331">331</option>
                     <option value="322">322</option>
                     <option value="442">442</option>
                     <option value="448">448</option>
                   </select>
                 </div>
               </form>
             </div>
           </fieldset>
         </div>

         <div class="col-md-12 col-sm-12 col-12">
           <fieldset class='field'>
             <legend class="allus">Requested Content</legend>

             <div class="loadimg" id = "loadimg">
               <img id="ig1"></img>
             </div>
             <form class="" action="" method="post">
                 <table class="user-tb hide-user-tb">
                   <tr class="u-tb-tr-m">
                     <th> No. </th>
                     <th colspan="2"> Available Videos </th>
                     <th> From </th>
                   </tr>
                   <!--<tr class="u-tb-tr">
                     <td> 1 </td>
                     <td> User1 </td>
                     <td> user@user.com </td>
                     <td> Pending </td>
                   </tr>
                   <tr class="u-tb-tr">
                     <td> 2 </td>
                     <td> User2 </td>
                     <td> use2@user.com </td>
                     <td> Successful </td>
                   </tr>
                   <tr class="u-tb-tr">
                     <td> 3 </td>
                     <td> User3 </td>
                     <td> use3@user.com </td>
                     <td> Pending </td>
                   </tr>
                   <tr class="u-tb-tr">
                     <td> 4 </td>
                     <td colspan="2">
                       <iframe id="player" type="text/html" width="420" height="315" src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1" frameborder="0"></iframe>
                     </td>
                     <td> User3 </td>
                   </tr>-->
                   <!--<div class="video-container">
                     <iframe src="https://www.youtube.com/embed/klZNNUz4wPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>-->
                   <!--<tr class="u-tb-tr">
                     <td> 5 </td>
                     <td colspan="2" id="tvc">
                       <iframe src="https://www.youtube.com/embed/klZNNUz4wPQ" width="420" height="215" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </td>
                     <td>
                       <span class="span1"><u>Section</u> - use3@user.com</span>
                       <span class="span2"><u>Course Id</u> - usfsdser.com</span>
                     </td>
                   </tr>
                   <tr class="u-tb-tr">
                     <td> 6 </td>
                     <td colspan="2" id="tvc">
                       <iframe src="https://www.youtube.com/embed/ygf9cukqHW8" width="420" height="215" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </td>
                     <td>
                       <span class="span1"><u>Section</u> - use3@user.com</span>
                       <span class="span2"><u>Course Id</u> - usfsdser.com</span>
                     </td>
                   </tr>-->

                 </table>
             </form>

           </fieldset>
         </div>

       </div>
     </section>
   </body>
 </html>
