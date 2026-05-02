 <?php if ($sec->section == 'contact'): ?>
     <div class="<?= $sec->lebar; ?>">
         <div class="container py-4">

             <h3><?= $sec->title ?></h3>

             <?= $sec->content ?>

         </div>
     </div>

 <?php endif; ?>