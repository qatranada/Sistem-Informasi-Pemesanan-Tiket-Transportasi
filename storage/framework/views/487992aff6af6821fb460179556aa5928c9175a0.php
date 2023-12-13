
<?php $__env->startSection('title', 'Cari Kursi'); ?>
<?php $__env->startSection('styles'); ?>
  <style>
    a:hover {
      text-decoration: none;
    }
    
    .kursi {
      box-sizing: border-box;
      border: 2px solid #858796;
      width: 100%;
      height: 120px;
      display: flex;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="javascript:window.history.back();" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
        <?php for($i = 1; $i <= $transportasi->jumlah; $i++): ?>
          <?php
            $array = array('kursi' => 'K' . $i, 'rute' => $data['id'], 'waktu' => $data['waktu']);
            $cekData = json_encode($array);
          ?>
          <?php if($transportasi->kursi($cekData) != null): ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
              <a href="<?php echo e(route('pesan', ['kursi' => 'K' . $i, 'data' => Crypt::encrypt($data)])); ?>">
                <div class="kursi bg-white">
                  <div class="font-weight-bold text-primary m-auto" style="font-size: 26px;">K<?php echo e($i); ?></div>
                </div>
              </a>
            </div>
          <?php else: ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="kursi" style="background: #858796">
                <div class="font-weight-bold text-white m-auto" style="font-size: 26px;">K<?php echo e($i); ?></div>
              </div>
            </div>
          <?php endif; ?>
        <?php endfor; ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script>
    function formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\andes\Ticket-Laravel\resources\views/client/kursi.blade.php ENDPATH**/ ?>