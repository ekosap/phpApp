<div class="row">
    <div class="box box-success box-solid">
        <div class="box-header">
            <label for="title" class="box-title">Data Administrator</label>
        </div>
        <div class="box-body">
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th class="col-xs-2 text-center">No</th>
                        <th class="col-xs-3 text-center">Username</th>
                        <th class="col-xs-4 text-center">Email</th>
                        <th class="col-xs-1 text-center">Role</th>
                        <th class="col-xs-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data['users'] as $user) :?>
                    <tr>
                        <td class="text-center"><?php echo $i;?></td>
                        <td class="text-center"><?php echo $user['username'];?></td>
                        <td class="text-center"><?php echo $user['email'];?></td>
                        <td class="text-center"><?php echo $user['roleID'];?></td>
                        <td class="text-center"></td>
                    </tr>
                <?php $i++; endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>