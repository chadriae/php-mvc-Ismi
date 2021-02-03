<?php require 'includes/header-logged-in.php' ?>

<section>
    <div class="container4">
        <h1 class="text-form">Dashboard</h1>
        <p class="text-login">
            <i class="fas fa-user"  aria-hidden="true"></i>
            <strong>Welcome <?= $_SESSION['username'] ?>, you can edit your profile or
                chat with the Dev Community.</strong></p>
        <div><a class="space" href="index.php?page=dashboard"><i class="fas fa-user-circle" aria-hidden="true"></i> Edit Profile</a><a class="space" href="index.php?page=addexperience"><i class="fab fa-black-tie " aria-hidden="true"></i> Add Experience</a><a class="space" href="index.php?page=addeducation"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Add Education</a><a class="space" href="index.php?page=blog"><i class="fas fa-users " aria-hidden="true"></i> Dev Community</a>
        </div>
        <h3 class="small"> Experience credentials  </h3>
        <table>
            <thead>
                <tr>
                    <th class="small">Company</th>
                    <th class="small">Title</th>
                    <th class="small">Years</th>
                    <th class="small"></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <h3 class="small">Education credentials</h3>
        <table>
            <thead>
                <tr>
                    <th class="small">School</th>
                    <th class="small">Degree</th>
                    <th class="small">Years</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div><button class="btn btn-primary"><i class="fas fa-user-minus" aria-hidden="true"></i> Delete
                my Account</button></div>

    </div>
</section>
<?php require 'includes/footer.php' ?>