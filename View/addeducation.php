<?php require 'includes/header.php'?>






<h1>EDUCATION</h1>

<section class="container3">
    <h1 >Add Your Education</h1>
    <p ><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add any school, bootcamp, etc that you have
        attended</p><small>* = required field</small>
    <form >
        <div >
            <input type="text" placeholder="* School or Bootcamp" name="school" required=""
                value="">
        </div>
        <div ><input type="text" placeholder="* Degree or Certificate" name="degree" required=""
                value=""></div>
        <div><input type="text" placeholder="Field Of Study" name="fieldofstudy" value=""></div>
        <div >
            <h4>From Date</h4><input type="date" name="from" value="">
        </div>
        <div>
            <p><input type="checkbox" name="current" value="false"> Current School or Bootcamp</p>
        </div>
        <div>
            <h4>To Date</h4><input type="date" name="to" value="">
        </div>
        <div ><textarea name="description" cols="30" rows="5"
                placeholder="Program Description"></textarea></div><input type="submit" ><a
             href="/dashboard">Go Back</a>
    </form>
</section>






<?php require 'includes/footer.php'?>