<div class="card">
    <div class="card-header">CATATAN PERKEMBANGAN PASIEN TERINTEGRASI</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm table-bordered text-xs">
                   <thead>
                    <th>Tgl / Jam</th>
                    <th>Profesi</th>
                    <th class="text-center">Hasil Pemeriksaan, Analisa, Rencana, Penatalaksanaan Pasien ( Ditulis dengan format SOAP, disertai target yang terukur, evaluasi hasil, tata laksana dituliskan dalam assesmen.</th>
                   </thead>
                   <tbody>
                    <?php $__currentLoopData = $ass_kep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->tglwaktu_assesmen); ?></td>
                            <td>Perawat Ruangan</td>
                            <td>
                                Sumber Data <?php echo e($d->sumber_data); ?> <br> 
                                Keluhan Utama <?php echo e($d->keluhan_utama); ?> <br>
                                tekanan darah <?php echo e($d->ttv_tekanan_darah); ?> <br>
                                frekuensi nafas <?php echo e($d->ttv_freq_napas); ?> <br>
                                frekuensi nadi <?php echo e($d->ttv_freq_nadi); ?> <br>
                                suhu badan <?php echo e($d->ttv_suhu); ?> <br><br>                           
                                
                                <p class="text-bold">Rencana Keperawatan</p>                           
                                    <?php echo e($d->rencana_perawat); ?>

                                <p class="text-bold">Tindakan Keperawatan</p>                           
                                    <?php echo e($d->tindakan_perawat); ?>

                                <p class="text-bold">Evaluasi Keperawatan</p>                           
                                    <?php echo e($d->evaluasi_perawat); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                </table>
            </div>
        </div>        
    </div>
</div><?php /**PATH C:\xampp\htdocs\semerusmart3\resources\views/erm/cppt.blade.php ENDPATH**/ ?>