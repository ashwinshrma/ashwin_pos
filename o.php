<?php include('header.php'); ?>
<section id="plugin" class="container-fluid">
  <div class="col-md-4">
	<nav>
    	<ul>
    		<h2>Main Menu</h2>
      		<li><a href="list.php">User Listing</a></li>
      		<li><a href="#">Add User</a></li>
    	</ul>
  	</nav>
  </div>
        <h2 style="text-align: center;">Add User</h2>
        <form action="/action_page.php">
          <label for="img">Select image:</label>
          <input type="file" id="img" name="img" accept="image/*" onchange="previewFile()">
          <img src="" height="100"><br><br>
          <label for="fname">First Name:</label>
          <input type="text" name="fname" style="margin-right: 50px">
          <label for="lname">Last Name:</label>
          <input type="text" name="lname"><br><br>
          <label for="mnumber">Mobile No:</label>
          <input type="Number" name="mnumber" style="margin-right: 50px">
          <label for="plugin-email"class="email-label" style="margin-right: 35px ">Email:</label>
          <input id="plugin-email"name="plugin-email"type="email"placeholder="your@email.com"><br><br>
          <label for="DOB">Date of Birth:</label>
          <input type="date" id="DOB" name="DOB"><br><br>
          <label for="pwd">Password:</label>
          <input type="password" name="pwd"id="myInput" style="margin-right: 58px">
          <label for="cpwd">Confirm Password:</label>
          <input type="password" name="cpwd"id="conInput"><br>
          <input type="checkbox" onclick="myFunction()" style="margin-right: 4px;margin-left: 67px;">Show Password<br><br>
          <label for="video">Select Intro video:</label>
          <input type="file" id="video" name="video" accept="video/*" onchange="previewFile()"><br><br>
          <label for="video">Select favorite video:</label>
          <input type="file" id="video" name="video" accept="video/*" onchange="previewFile()"><br>
          <h3>BIO</h3>
      <div class="col-sm-4"style="height: 103px;width:100%;position:relative;">
        <div id="div2" style="max-height:100%;overflow:auto;">
          <div id="div3" style="height:100px;border:5px">
          <textarea></textarea>
          </div>
        </div>
        <a href="tel:5554280940" style="float: right;">Call us at 555-428-0940</a><br>
        <input type="submit" value="submit"style="text-align: center;float: right;width: 145px;height: 39px;font-size: 20px;">
      </div><br><br>
    </form>
  </section>
      </div>
<?php include('footer.php'); ?>