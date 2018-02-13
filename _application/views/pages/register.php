  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">

                      <?php
                      $error_msg=$this->session->flashdata('error_msg');
                      if($error_msg){
                          echo $error_msg;
                      }
                      ?>

                      <form class="m-login__form m-form" action="<?php echo base_url('user/register_user'); ?>">
                          <div class="form-group m-form__group">
                              <input class="form-control m-input" type="text" placeholder="Fullname" name="user_name">
                          </div>
                          <div class="form-group m-form__group">
                              <input class="form-control m-input" type="text" placeholder="Email" name="user_email" autocomplete="off">
                          </div>
                          <div class="form-group m-form__group">
                              <input class="form-control m-input" type="password" placeholder="Password" name="user_password">
                          </div>
                          <div class="form-group m-form__group">
                              <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="confirm_password">
                          </div>
                          <div class="m-login__form-sub">
                              <label class="m-checkbox m-checkbox--focus">
                                  <input type="checkbox" name="agree">
                                  I Agree to the
                                  <a href="#" class="m-link m-link--focus">
                                      terms and conditions
                                  </a>
                                  .
                                  <span></span>
                              </label>
                              <span class="m-form__help"></span>
                          </div>
                          <div class="m-login__form-action">
                              <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                  Sign Up
                              </button>
                              <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                  Cancel
                              </button>
                          </div>
                      </form>
                      <span style="alignment: center"><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></span><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
