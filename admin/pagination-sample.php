<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodePel">
      <title> Table #4: Simple pagination Example </title>
      <!-- Style CSS -->
      <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
      <!-- Demo CSS (No need to include it into your project) -->
      <!-- <link rel="stylesheet" href="./assets/css/demo.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
      <!-- <link rel="stylesheet" href="./assets/js/jstable.css" />
    <script src="jstable.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
  
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
        ${document}.ready(function(){
            $('#example').DataTable();
        });
    </script>    
</head>
   <body>
      
      <!--$%adsense%$-->
      <main class="cd__main">
         <!-- Start DEMO HTML (Use the following code into your project)-->
         <main>
  <div class="pagination">
    <button class="backward" id="first">first</button>
    <button class="backward" id="prev">previous</button>
    <button class="forward" id="next">next</button>
    <button class="forward" id="last">last</button>
    <div class="page-numbers" id="pageNumbers"></div>
  </div>
  <div class="table-wrapper">
 
    <table id="example" class="display" style="width:100%">
    <!-- <table id="paginatedTable"> -->
        
    <thead>
      <tr>
        <th>name</th>
        <th>code</th>
        <th>emoji</th>
        <th>category</th>
        <th>cldr short name</th>
        <th>alt names</th>
        <th>emoji version</th>
        <th>unicode version</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>grapes</td>
        <td>U+1F347</td>
        <td>🍇</td>
        <td>fruit</td>
        <td>grapes</td>
        <td>grape</td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>melon</td>
        <td>U+1F348</td>
        <td>🍈</td>
        <td>fruit</td>
        <td>melon</td>
        <td>cantaloupe, honeydew, muskmelon</td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>watermelon</td>
        <td>U+1F349</td>
        <td>🍉</td>
        <td>fruit</td>
        <td>watermelon</td>
        <td> </td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
       <tr>
        <td>watermelon</td>
        <td>U+1F349</td>
        <td>🍉</td>
        <td>fruit</td>
        <td>watermelon</td>
        <td> </td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>tangerine</td>
        <td>U+1F34A</td>
        <td>🍊</td>
        <td>fruit</td>
        <td>tangerine</td>
        <td>mandarin, orange</td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>lemon</td>
        <td>U+1F34B</td>
        <td>🍋</td>
        <td>fruit</td>
        <td>lemon</td>
        <td>lemonade</td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>banana</td>
        <td>U+1F34C</td>
        <td>🍌</td>
        <td>fruit</td>
        <td>banana</td>
        <td>plantain</td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>pineapple</td>
        <td>U+1F34D</td>
        <td>🍍</td>
        <td>fruit</td>
        <td>pineapple</td>
        <td> </td>
        <td>1.0</td>
        <td>6.0</td>
      </tr>
      <tr>
        <td>mango</td>
        <td>U+1F96D</td>
        <td>🥭</td>
        <td>fruit</td>
        <td>⊛ mango</td>
        <td> </td>
        <td>11.0</td>
        <td>11.0</td>
      </tr>
     
    </tbody>
  </table>
  
  </div>
</main>
         <!-- END EDMO HTML (Happy Coding!)-->
      </main>
      
      <!-- Script JS -->
      <!-- <script src="./assets/js/script.js"></script> -->
      <!--$%analytics%$-->
   </body>
</html>