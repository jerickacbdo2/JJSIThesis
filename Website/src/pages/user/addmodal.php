<div id="addStudModal" class="modal fade">
    <form method="post">
        <div class="modal-dialog modal-sm" style="width:300px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username:</label>
                                <input required name="txt_uname" id="txt_uname" class="form-control input-sm" type="text" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input required name="txt_pass" id="txt_pass" class="form-control input-sm" type="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <select class="form-control input-sm">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="hr">HR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-primary btn-sm" id="btn_add_stud" name="btn_add_stud" value="Add User" />
                </div>
            </div>
        </div>
    </form>
</div>