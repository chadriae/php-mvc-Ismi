<?php require 'includes/header-logged-in.php' ?>

<section>
    <div class="container4">
        <h1 class="text-form">Dashboard</h1>
        <p>
            <i class="fas fa-user" aria-hidden="true"></i>
            <strong>Welcome zoo, you can edit your profile or
                chat with the Dev Community.</strong>
        </p>
        <div><a href="index.php?page=dashboard"><i class="fas fa-user-circle" aria-hidden="true"></i> Edit Profile</a><a
                href="index.php?page=addexperience"><i class="fab fa-black-tie " aria-hidden="true"></i> Add
                Experience</a><a href="index.php?page=addeducation"><i class="fas fa-graduation-cap"
                    aria-hidden="true"></i> Add Education</a><a href="index.php?page=blog"><i class="fas fa-users "
                    aria-hidden="true"></i> Dev Community</a>
        </div>
        <h3>Experience credentials</h3>
        <table>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Title</th>
                    <th>Years</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <h3>Education credentials</h3>
        <table>
            <thead>
                <tr>
                    <th>School</th>
                    <th>Degree</th>
                    <th>Years</th>
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