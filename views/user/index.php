<h1>Welcome <?php echo $name = $user->first_name." ".$user->last_name ?></h1>
<hr/>
<div class="column two-third">
    <h3>My Profile</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user->email; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $user->username; ?></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><?php echo $user->company; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $user->phone; ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="column one-fourth">
    <h3>My Account</h3>
    <ul class="list-group">
    <?php if($user->group_name == 'teacher') : ?>
        <li class="list-group-item"><a class="button" href="<?php echo site_url('teacher/course'); ?>">My courses</a></li>
        <li class="list-group-item"><a class="button" href="<?php echo site_url('teacher/course/create'); ?>">Add Course</a></li>
    <?php else : ?>
        <li class="list-group-item"><a class="button" href="<?php echo site_url('student/course'); ?>">My courses</a></li>
    <?php endif; ?>
        <li class="list-group-item"><a class="button" href="<?php echo site_url('user/edit_profile'); ?>">Edit Profile</a></li>
        <li class="list-group-item"><a class="button" href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
    </ul>
</div>
<div class="clear"></div>