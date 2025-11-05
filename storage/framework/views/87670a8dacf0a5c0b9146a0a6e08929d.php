  <div class="card notification-card  notification-warning">
      <div class="card-body">
          <table class="container-fluid">
              <div class="d-flex flex-row">

                  <div class="d-flex gap-3">
                      <h5>
                          <?php echo e($title); ?>

                      </h5>


                  </div>


                  <div class="d-flex flex justify-content-end gap-3 container-fluid">
                      <div>
                          <a style="text-decoration:none" href="<?php echo e($route); ?>">
                              <button class='btn btn-primary'>Ver</button>
                          </a>

                          

                          </form>
                      </div>

                  </div>
              </div>
          </table>
      </div>
  </div>

  <script type="module" src="<?php echo e(asset('js/Notification/NotificationHandler.js')); ?>"></script>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/notification-banner.blade.php ENDPATH**/ ?>