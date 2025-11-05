  <div class="card notification-card  notification-warning">
      <div class="card-body">
          <table class="container-fluid">
              <div class="d-flex flex-row">

                  <div class="d-flex gap-3">
                      <h5>
                          {{ $title }}
                      </h5>


                  </div>


                  <div class="d-flex flex justify-content-end gap-3 container-fluid">
                      <div>
                          <a style="text-decoration:none" href="{{ $route }}">
                              <button class='btn btn-primary'>Ver</button>
                          </a>

                          {{-- <a data-id="{{route('notification.read', $id)}}" style="text-decoration:none" onclick="sayHello(this)">
                    <button class='btn btn-danger'>Omitir</button>
                    </a> --}}

                          </form>
                      </div>

                  </div>
              </div>
          </table>
      </div>
  </div>

  <script type="module" src="{{ asset('js/Notification/NotificationHandler.js') }}"></script>
