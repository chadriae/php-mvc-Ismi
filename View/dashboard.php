<?php require 'includes/header.php'?>
<section>
  
   


    <!-- REAL START ABOVE ARE A LINK AND USELESS INFO  -->

    <div class="container">
    
    <p><a href="index.php">To index page</a></p>
        <h1>Create Your Beconnect Profile </h1>
        <p><i class="fas fa-user"></i> Let's get some information to make your profile stand out</p>
        <small>* = required field</small>


        <form action="">
            <select name="career" id="career">
                <option value="developer">Developer</option>
                <option value="juniordeveloper">Junior Developer</option>
                <option value="seniordeveloper">Senior Developer</option>
                <option value="manager">Manager</option>
                <option value="studentorLearning">Student or Learning</option>
                <option value="InstructororTeacher ">Instructor or Teacher</option>
                <option value="intern">Intern</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <small>Give us an idea on where you are in your career </small><br>
            <input type="text" id="company" name="company" placeholder="Company"><br>
            <small>Could be your own company or one you work for</small><br>
            <input type="text" id="website" name="website" placeholder="Website"><br>
            <small>Could be your own or acompany website</small><br>
            <input type="text" id="location" name="location" placeholder="Location"><br>
            <small>City & state suggested (eg. Gent , O-VL) </small><br>
            <input type="text" id="skills" name="skills" placeholder="Skills"><br>
            <small>Please use comma separated values (eg. HTML, CSS,JavaScript,PHP)</small><br>
            <input type="text" id="github" name="github" placeholder="Github Username"><br>
            <small>If you want your latest repos and a Github link, include your username</small><br>
            <textarea name="textarea" id="textarea" cols="30" rows="10"
                placeholder="A short Bio about yourself"></textarea><br>
            <small>Tell us a Little bit about yourself </small><br><br>
            <small>Upload your profile pic (100mb for now i think )</small><br>
            <input type="file" name="fileupload" accept="image/*" value=" file" /><br><br>
            <!--Submit form button -->
            <input type="submit" name="submit" value="submit form">
            <input type="reset" name="reset" value="Reset form" />
        </form>
        

    </div>






</section>
<?php require 'includes/footer.php'?>