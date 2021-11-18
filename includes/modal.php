<!-- Modal for Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title w-100 text-center" id="exampleModalLabel">Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="loginForm">
                    <div class="modal-body">
                        <p class="text-center"><i class="fas fa-exclamation"></i>This is only a sample for Interface, doesn't connect with Database.</p>
                        <div class="form-group">
                            <label for="loginName">Username</label>
                            <input type="text" class="form-control" id="loginName" placeholder="username" name="loginName" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPass">Password</label>
                            <input type="password" class="form-control" id="loginPass" placeholder="password"  name="loginPass" required>
                            <i class="fas fa-lock-open" id="toggleLoginPass" data-toggle="tooltip" data-placement="right" title="Show the password"></i>
                        </div>

                        <div class="alternative">
                            <p>or you don't have an account yet?</p>
                            <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">create account!</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" name="login" id="loginBtn"><a id="loginLink">Login</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal for Create Account -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title w-100 text-center" id="exampleModalLabel">Get Started!</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <p class="text-center"><i class="fas fa-exclamation"></i>This is only a sample for Interface, doesn't connect with Database.</p>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <small id="passError"></small>
                        <input type="password" class="form-control" id="password1" name="password1" required>
                        <i class="fas fa-lock-open" id="toggleSigninPass1" data-toggle="tooltip" data-placement="right" title="Show the password"></i>
                    </div>
                    <div class="form-group">
                        <label for="password">Please enter the Password again</label>
                        <input type="password" class="form-control" id="password2" name="password2" required>
                        <i class="fas fa-lock-open" id="toggleSigninPass2" data-toggle="tooltip" data-placement="right" title="Show the password"></i>
                    </div>
                    <div class="alternative">
                        <p>or do you have an account?</p>
                        <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</a>
                    </div>
              </div><!-- modal-body -->
              <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" id="signup"><a id="signupLink">Sign Up</a></button>
              </div><!-- modal footer -->
            </form>
          </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div> <!-- Modal for Create Account -->