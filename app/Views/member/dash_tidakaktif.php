<?= $this->extend('member/headerfooter_mem') ?>

<?= $this->section('title') ?>
  Dashboard Member
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div class="container">
      <p class="proile-rating  text-right" style="font-size: 20px;color: #313030">Status :  <span class="badge badge-secondary" style="color: white">Innactive</span>
      </p>
    </div>

  <div class="container">
    <div class="card bg-oren">
      <div class="card-body"><center><h6 style="color: white;font-size: 15px">Your account is innactive<br>Please register by selecting the package</h6></center></div>
    </div>
  </div>

                  
<?= $this->endSection() ?>