					<div id="card-alert" class="card deep-red">
                      <div class="card-content white-text">
                        <p>{{ $request->session()->get('message') }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>