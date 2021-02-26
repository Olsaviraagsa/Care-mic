<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            <?= Flasher::Flash(); ?>
                        </div>
                        <form class="user" method="POST" action="<?=BASE_URL?>/login/getRegister">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" value="" placeholder="Full name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="" placeholder="Email Address" required>
                            </div>
                            <small><p id="info" style="text-color:red"></p></small>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            
                            <a class="small" href="<?= BASE_URL?>/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>