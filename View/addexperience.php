<?php require 'includes/header.php'?>




<section>
    <div class="container4">
    <h1 class="text-form">Add An Experience</h1>
    <p><i class="fas fa-code-branch" aria-hidden="true"></i> Add any developer/programming positions that
        you have had in the past</p><small>* = required field</small>
    <form>
        <div><input class="log" type="text" placeholder="* Job Title" name="title" required="" value=""></div>
        <div><input class="log" type="text" placeholder="* Company" name="company" required="" value=""></div>
        <div><input class="log" type="text" placeholder="Location" name="location" value=""></div>
        <div >
            <h4>From Date</h4><input class="log" type="date" name="from" value="">
        </div>
        <div>
            <p><input class="log" type="checkbox" name="current" value="false"> Current Job</p>
        </div>
        <div>
            <h4>To Date</h4><input class="log"  type="date" name="to" value="">
        </div>
        <div><textarea name="description" cols="30" rows="5"
                placeholder="Job Description"></textarea></div><input class="btn btn-primary" type="submit" ><a 
             href="">Go Back</a>
    </form>
</div>
</section>

<?php require 'includes/footer.php'?>