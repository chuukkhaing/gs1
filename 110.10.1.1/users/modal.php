<!-- Modal -->
<div class="modal fade" id="users-modal" tabindex="-1" aria-labelledby="users-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="users-modal-label">
          <i class="fa-solid fa-user"></i> Users
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="person_create_form">
          <div class="username_already_take_alrt">
            <p class="p-2 m-0 text-danger">
              Username <strong> already taken</strong>
            </p>
          </div>
          <div class="users_username_required">
            <p class="p-2 m-0 text-danger">
              Username <strong>required</strong>
            </p>
          </div>
          <div class="col mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="users_password_required">
            <p class="p-2 m-0 text-danger">
              Password <strong>required</strong>
            </p>
          </div>
          <div class="col mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="users_permission_required">
            <p class="p-2 m-0 text-danger">
              <strong>Select </strong>permission
            </p>
          </div>
          <div class="users_default_value_only">
            <p class="p-2 m-0 text-danger">
              Default value <strong>can't be change</strong>
            </p>
          </div>
          <div class="col mb-3">
            <select class="form-select" name="permission" id="permission" required>
              <option value="">Permission</option>
              <option value="admin">Admin</option>
              <option value="viewer">Viewer</option>
            </select>
          </div>
          <div class="col text-center">
            <button type="submit" class="btn btn-outline-primary">
              <i class="fa-solid fa-plus"></i> Create
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
