<?php require 'includes/header.php'?>


<h1>EXP PAGE </h1>

<section class="container3">
    <h1>Add An Experience</h1>
    <p><i class="fas fa-code-branch" aria-hidden="true"></i> Add any developer/programming positions that
        you have had in the past</p><small>* = required field</small>
    <form>
        <div><input type="text" placeholder="* Job Title" name="title" required="" value=""></div>
        <div><input type="text" placeholder="* Company" name="company" required="" value=""></div>
        <div><input type="text" placeholder="Location" name="location" value=""></div>
        <div >
            <h4>From Date</h4><input type="date" name="from" value="">
        </div>
        <div>
            <p><input type="checkbox" name="current" value="false"> Current Job</p>
        </div>
        <div>
            <h4>To Date</h4><input type="date" name="to" value="">
        </div>
        <div><textarea name="description" cols="30" rows="5"
                placeholder="Job Description"></textarea></div><input type="submit" ><a
             href="">Go Back</a>
    </form>
</section>

<?php require 'includes/footer.php'?>