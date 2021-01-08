<!-- Modal Start-->
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="modal-title" id="addNewLabel">Add New <?php echo $page ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class=" p-3">
          <form class="row">
            <div class="form-group col-md-6 col-12">
              <label for="firstName" class="font-14 text-dark">First Name<span class="text-danger">*</span></label>
              <input type="text" name="firstname" id="firstName" placeholder="First Name" class="form-control" required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="lastName" class="font-14 text-dark">Last Name<span class="text-danger">*</span></label>
              <input type="text" name="lastname" id="lastName" placeholder="Last Name" class="form-control" 	required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="email" class="font-14 text-dark">Email<span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" placeholder="Email address here" class="form-control" required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="password" class="font-14 text-dark">Password<span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" placeholder="*******" class="form-control"	required />
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="role" class="font-14 text-dark">Select Role<span class="text-danger">*</span></label>
              <select class="custom-select" id="role">
                <option selected>Select Role</option>
                <option value="1">Admin</option>
                <option value="2">Developer</option>
                <option value="3">Designer</option>
              </select>
            </div>
            <div class="form-group col-md-6 col-12">
              <label for="department" class="font-14 text-dark">Department<span class="text-danger">*</span></label>
              <select class="custom-select" id="department">
                <option selected>Select Department</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Front end Developer</option>
              </select>
            </div>
            <div class="col-12 mt-3">
              <h5 class="mb-2">Allow Permission</h5>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="administrator" checked />
                <label class="custom-control-label" for="administrator">Administrator</label>
              </div>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="supervisor" />
                <label class="custom-control-label" for="supervisor">Supervisor</label>
              </div>
              <div class="custom-control custom-checkbox  custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="operator" />
                <label class="custom-control-label" for="operator">Operator</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End-->