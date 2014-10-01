<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Title</title>
  

</head>
<body class="front-page">
<header>
	<h1>HTML Form</h1>
</header>
    <section class='container'>
      <?php if(empty($name)): ?>
    	<form action="." method="post">
        <label>Name:</label>
          <input type="text" name="name" value="" required><br>
        <label>Email:</label>
          <input type="email" name="email" value="" required><br>
        <label>Select you major:</label><br>
          <input type="radio" name="major" value="Computer Science">Computer Science<br>
          <input type="radio" name="major" value="Web Development Design">Web Development and Design<br>
          <input type="radio" name="major" value="Computer Information Technology">Computer information Technology<br>
          <input type="radio" name="major" value="Computer Engineering">Computer Engineering<br>
        <label>Where have you been?:</label><br>
        <input type="checkbox" name="visited[]" value="North America">North America<br>
        <input type="checkbox" name="visited[]" value="South America">South America<br>
        <input type="checkbox" name="visited[]" value="Europe">Europe<br>
        <input type="checkbox" name="visited[]" value="Asia">Asia<br>
        <input type="checkbox" name="visited[]" value="Australia">Australia<br>
        <input type="checkbox" name="visited[]" value="Africa">Africa<br>
        <input type="checkbox" name="visited[]" value="Antartica">Antartica<br>
        <label>Comments:</label><br>
        <textarea name="comments"></textarea><br>
        <input type="submit" name="action" value="Submit">
      </form>
    <?php else: 
        echo $new_page;
        endif;
    ?>
    </section>


</body>
</html>
