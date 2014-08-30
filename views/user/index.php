<h1>Welcome <?php echo $user->first_name." ".$user->last_name ?></h1>
<h4>My Profile</h4>
<table class="table table-stripped">
    <tbody>
        <tr>
            <td>Email</td>
            <td><?php echo $user->email; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $user->username; ?></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><?php echo $user->group_name; ?></td>
        </tr>
    </tbody>
</table>
<?php echo anchor('user/logout', 'Logout', 'class="button"') ?>
<style type="text/css">
     .table{
        width:100%;
    }
    .table tr{
        border-left:1px solid #ccc;
        border-top:1px solid #ccc;
    }
    .table td{
        border-right:1px solid #ccc;
        border-bottom:1px solid #ccc;
        padding:3px;
    }
</style>