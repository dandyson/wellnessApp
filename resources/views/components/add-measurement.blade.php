  <!-- Modal -->
  <div class="modal fade effect-slide-in-right" id="add-measurement" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <form class="form-horizontal">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div>
                          <div class="card-header">
                              <h4 class="card-title mb-1">Default Form</h4>
                              <p class="mb-2">It is Very Easy to Customize and it uses in your website
                                  apllication.</p>
                          </div>
                          <div class="card-body pt-0">
                              <div class="form-group">
                                  <input type="date" class="form-control" id="add-date" placeholder="Date">
                              </div>
                              <div class="form-group">
                                  <input type="number" class="form-control" id="add-chest" placeholder="Chest">
                              </div>
                              <div class="form-group">
                                <input type="number" class="form-control" id="add-waist" placeholder="Waist">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="add-left-arm" placeholder="Left Arm">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="add-right-arm" placeholder="Right Arm">
                            </div>
                            
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" wire:click="store">Add</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
