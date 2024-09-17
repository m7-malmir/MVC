<h2>create an acount</h2>
<form action="" method="post">
  <div class="row">
    <div class="col">
    <div class="mb-3">
      <label class="form-label">Firstname</label>
      <input type="text" name="firstname" value="<?php echo $model->firstname ?>" 
      class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : ''?>">
      <div class="invalid-feedback">
        <?php echo $model->getFirstError('firstname') ?>
      </div>
  </div>
    </div>
    <div class="col">
    <div class="mb-3">
      <label  class="form-label">lastname</label>
      <input type="text" name="lastname" class="form-control"  >
  </div>
    </div>
  </div><!--row-->
  
  <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" name="email" class="form-control"  >

  </div>
  <div class="row">
    <div class="col">
    <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="text" name="password" class="form-control"  >
  </div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label">confirm password</label>
    <input type="text" name="confirmpassword" class="form-control"  >
  </div>
    </div>
  </div><!--row-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>