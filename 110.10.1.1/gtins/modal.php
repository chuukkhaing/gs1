<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <i class="fa-solid fa-barcode"></i> GTINs
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="gtins_create_form">
          <div class="quantity_required">
            <p class="p-2 m-0 text-danger">
              Quantity <strong>required</strong>
            </p>
          </div>
          <div class="col mb-3">
            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" required>
          </div>
          <div class="yearly_required">
            <p class="p-2 m-0 text-danger">
              Yearly <strong>required</strong>
            </p>
          </div>
          <div class="col mb-3">
            <input type="text" name="yearly" id="yearly" class="form-control" placeholder="Yearly">
          </div>
          <div class="price_required">
            <p class="p-2 m-0 text-danger">
              Price <strong>required</strong>
            </p>
          </div>
          <div class="col mb-3">
            <input type="text" name="price" id="price" class="form-control" placeholder="Price" required>
          </div>
          <div class="member_required">
            <p class="p-2 m-0 text-danger">
              Member <strong>required</strong>
            </p>
          </div>
          <div class="member_default_value_only">
            <p class="p-2 m-0 text-danger">
              Default Value <strong>can't be change</strong>
            </p>
          </div>
          <div class="col mb-3">
            <select class="form-select" name="member" id="member" required>
              <option value="">Member</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="status_required">
            <p class="p-2 m-0 text-danger">
              Status <strong>required</strong>
            </p>
          </div>
          <div class="status_default_value_only">
            <p class="p-2 m-0 text-danger">
              Default Value <strong>can't be change</strong>
            </p>
          </div>
          <div class="col mb-3">
            <select class="form-select" name="status" id="status" required>
              <option value="">Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
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
