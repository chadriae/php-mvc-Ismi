<?php require 'includes/header.php'?>



<section>
<div class="container4">
    <h1 class="text-form" >Add Your Education</h1>
    <p ><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add any school, bootcamp, etc that you have
        attended</p><small>* = required field</small>
    <form >
        <div >
            <input class="log" type="text" placeholder="* School or Bootcamp" name="school" required=""
                value="">
        </div>
        <div ><input class="log" type="text" placeholder="* Degree or Certificate" name="degree" required=""
                value=""></div>
        <div><input class="log" type="text" placeholder="Field Of Study" name="fieldofstudy" value=""></div>
        <div >
            <h4>From Date</h4><input class="log" type="date" name="from" value="">
        </div>
        <div>
            <p><input class="log" type="checkbox" name="current" value="false"> Current School or Bootcamp</p>
        </div>
        <div>
            <h4>To Date</h4><input class="log" type="date" name="to" value="">
        </div>
        <div ><textarea name="description" cols="30" rows="5"
                placeholder="Program Description"></textarea></div><input class="btn btn-primary"  type="submit" ><a
             href="/dashboard">Go Back</a>
    </form>
<div>
</section>






<?php require 'includes/footer.php'?>