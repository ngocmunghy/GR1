<div class="modal" tabindex="-1" role = "dialog" id = "mdlQuestion">
  <div class="modal-dialog" role = "document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="question-area" class="form-label">Question</label>
          <textarea class="form-control" id="question-area" rows="3" placeholder="Input new question here ..."></textarea>
        </div>
        <div class="mb-3">
          <label for="optA" class="form-label">Option A</label>
          <textarea class="form-control" id="optA" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="optB" class="form-label">Option B</label>
          <textarea class="form-control" id="optB" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="optC" class="form-label">Option C</label>
          <textarea class="form-control" id="optC" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="optD" class="form-label">Option D</label>
          <textarea class="form-control" id="optD" rows="1"></textarea>
        </div>

        <div class = "form-group">
          <label class="form-label">Correct answer</label>
          <div class="row">

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" name="ans"> Option A
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" name="ans"> Option B
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" name="ans"> Option C
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" name="ans"> Option D
                </label>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>