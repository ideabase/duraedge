<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DuraEdge Patterns</title>
    <meta name="description" content="Page Description Goes Here">
  </head>
  <body>
       <!-- Header -->
       <?php include 'header.php';?>

       <!-- The page content goes here -->
       <main>
         <h1>Heading 1</h1>
         <h2>Heading 2</h2>
         <h3>Heading 3</h3>
         <h4>Heading 4</h4>
         <h5>Heading 5</h5>
         <h6>Heading 6</h6>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <button>button</button>
         <a href="#">Link</a>
         <ul class="color__list">
           <p>$Brown</p>
           <li>
             <span class="color color__brown"/>
           </li>
           <p>$red</p>
           <li>
             <span class="color color__red"/>
           </li>
           <p>$green</p>
           <li>
             <span class="color color__green"/>
           </li>
           <p>$orange</p>
           <li>
             <span class="color color__orange"/>
           </li>
           <p>$tan</p>
           <li>
             <span class="color color__tan"/>
           </li>
           <p>$lightBlue</p>
           <li>
              <span class="color color__lightBlue"/>
           </li>
        </ul>
       </main>

       <!-- Footer -->
       <?php include 'footer.php';?>


      <!-- Live Reload - For local environment only -->
      <script src="../assets/js/min/scripts-min.js"></script>
      <script src="//localhost:35729/livereload.js"></script>
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="screen" /> <!-- Add your stylesheet here, before the closing HTML tag -->
  </body>
</html>
