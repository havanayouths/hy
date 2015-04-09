<div class="single-widget-container">
                                <div >
                               <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title" >Havana <strong>Youth </strong>account sign in</h4>
                                    </div>
                                    <div class="modal-body">
                                              <form action="<?php echo site_url('signin_validation')?>"  id="validation-forms" class="form-horizontal form-label-left" method="post"
                                                    data-parsley-priority-enabled="false" accept-charset="utf-8" class="no-margin"
                                                    novalidate="novalidate">

                                                  <fieldset>
                                                      <legend class="section">
                                                      <span class="label label-custom">
                                                          Please provide your login credentials&nbsp;&nbsp;<i class="fa fa-user"></i>
                                                      </span>
                                                      </legend>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="username">
                                                              Username<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <input placeholder="Please type your user name here" type="username" id="lastname" name="username" class="form-control input-transparent input-sm"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-validation-threshold="1"
                                                                     required="required">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2" for="password">
                                                              Password<span class="required">&nbsp;*</span>
                                                          </label>
                                                          <div class="col-md-10">
                                                              <div class="input-group">
                                                              <input placeholder="Type your password here" type="password" id="password" name="password" class="form-control input-transparent"
                                                                     data-parsley-trigger="change"
                                                                     data-parsley-minlength="6"
                                                                     required="required"><span style="color: white;"class="input-group-addon" ><i class="fa fa-lock"></i></span>
                                                              
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </fieldset>
                                                  <fieldset>
                                                    <legend class="section">  </legend>
                                                     <div class="form-group">
                                                            <label class="control-label col-md-6" for="email">
                                                                <a>I forgot my password</a>
                                                            </label>
                                                         </div>
                                                  </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="checkbox checkbox-primary pull-left ">
                                            <input id="checkbox3" type="checkbox" required data-parsley-mincheck="1">
                                                        <label for="checkbox3">
                                                            Remember me
                                                        </label>
                                                    </div>
                                        
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Login Into Your Account&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                    </div>
                                        </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
        </div>