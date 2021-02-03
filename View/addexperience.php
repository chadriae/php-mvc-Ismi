<?php require 'includes/header-logged-in.php'?>




<section>
    <div class="container4">
    <div class="test1 test">    
    <h1 class="text-form">Add An Experience</h1>
    <p class="text-login" ><i class="fas fa-code-branch" aria-hidden="true"></i> Add any developer/programming positions that
        you have had in the past</p><br>
        <small class="small">* = Required field</small>
    <form>
        <div><input class="log" type="text" placeholder="* Job Title" name="title" required="" value=""></div>
        <div><input class="log" type="text" placeholder="* Company" name="company" required="" value=""></div>
        <div><input class="log" type="text" placeholder="Location" name="location" value=""></div>
        <div >
            <h4 class="small">From Date</h4><input class="log" type="date" name="from" value="">
        </div>
        <div>
            <p class="small" ><input class="log" type="checkbox" name="current" value="false"> Current Job</p>
        </div>
        <div>
            <h4 class="small">To Date</h4><input class="log"  type="date" name="to" value="">
        </div>
        <div><textarea  class="small" name="description" cols="30" rows="5"
                placeholder="Job Description"></textarea></div><input class="btn btn-primary" type="submit" ><a 
             href="">Go Back</a>
        </form>
</div>
</section>

<?php require 'includes/footer.php'?>