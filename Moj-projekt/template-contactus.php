<?php 
/*
Template Name: Contact Us
*/
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">


            

            <div class="row"> 
            
                    <div class="col-lg-6">
                    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


}
</style>
</head>
<body>

<h3>Contact US</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="continent">Continent</label>
    <select id="continent" name="country">
      <option value="europe">Europe</option>
      <option value="na">North America</option>
      <option value="sa">South America</option>
      <option value="africa">Africa</option>
      <option value="mideast">Middle-east</option>
      <option value="australia">Australia</option>
      <option value="asia">Asia</option>
    </select>

    <label for="subject">Put your text in here</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
     
                </div>
                    <div class="col-lg-6"> 
                      
                    <h3> If you want to contact us about anything, feel free to do so. We are more than happy to hear from you. <h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.jpg" alt="contact" class="center" style="width:500px;height:500px";>
                    </div>

            </div>

            


</div>
</section>


<?php get_footer();?>