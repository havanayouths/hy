<div class="content container">
<div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h3 class="heading-title pull-left">Adverse Reaction Form</h3>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Administrator</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
    <h5><strong>WIDGETS</strong></h5>
<div class="page-content">
<div class="row">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="widget  radius-bordered">
            <div class="widget-header">
                <span class="widget-caption">Please fill in all the sections</span></br>
            </div>
            <div class="widget-body">
                <div class="docs-example">
                    <ul class="nav nav-tabs tabs-flat">
                        <li class="active"><a href="#info-tab" data-toggle="tab">Patient Information</a></li>
                        <li class=""><a href="#address-tab" data-toggle="tab">Adverse event information</a></li>
                        <li class=""><a href="#medicine-tab" data-toggle="tab">Information on medicines</a></li>
                        <li class=""><a href="#reporter-tab" data-toggle="tab">Reporter information</a></li>
                    </ul>

                    <form action="/just/adversef"  method="post" accept-charset="utf-8" id="accountForm"  class="form-horizontal bv-form">
                        <div class="tab-content tabs-flat">
                            <div class="tab-pane active" id="info-tab">
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Patient initials or Hospital Reg. No</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="ini" data-bv-field="ini"><i class="form-control-feedback" data-bv-field="ini" style="display: none;"></i>
                                    </div>
                                </div>
                                
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Company</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="company" data-bv-field="company"><i class="form-control-feedback" data-bv-field="company" style="display: none;"></i>
                                    </div>
                                </div>
                                
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Date of Birth</label>
                                    <div class="col-lg-8">
                                            <div class="input-group">
                                                            <input name="date" type="text" class="form-control" id="reservation" />
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                                    <label class="col-lg-4 control-label">Age</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="age"
                                                               required
                                                               min="10"
                                                               data-bv-greaterthan-inclusive="false"
                                                               data-bv-greaterthan-message="The input must be greater than or equal to 10"
                                                               max="100"
                                                               data-bv-lessthan-inclusive="true"
                                                               data-bv-lessthan-message="The input must be less than 100" />
                                                        <!--<input class="form-control" name="age"
                                                        required
                                                        type="range"
                                                        min="10"
                                                        max="100"
                                                        data-bv-between-message="The input must be between 10 and 100" />-->
                                                    </div>
                                </div>
                                
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Weight</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="jobTitle" data-bv-field="jobTitle"><i class="form-control-feedback" data-bv-field="jobTitle" style="display: none;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address-tab">
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Address</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="address" data-bv-field="address"><i class="form-control-feedback" data-bv-field="address" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">City</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="city" data-bv-field="city"><i class="form-control-feedback" data-bv-field="city" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-lg-4 control-label">Country</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="country" data-bv-field="country">
                                            <option value="">Select a country</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="IT">Italy</option>
                                            <option value="JP">Japan</option>
                                            <option value="RU">Russian</option>
                                            <option value="US">United State</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="other">Other</option>
                                        </select><i class="form-control-feedback" data-bv-field="country" style="display: none;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                            <button type="submit" class="btn btn-blue">Validate</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       </div>
    </div>
</div>
</div>
</div>

  <!--Basic Scripts-->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>
    <!--Beyond Scripts-->
    <script src="assets/js/beyond.min.js"></script>
    <!--Page Related Scripts-->
    <script src="assets/js/validation/bootstrapValidator.js"></script>
    <script>
        $(document).ready(function () {

            $("#registrationForm").bootstrapValidator();

            $('#togglingForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    firstName: {
                        validators: {
                            notEmpty: {
                                message: 'The first name is required'
                            }
                        }
                    },
                    lastName: {
                        validators: {
                            notEmpty: {
                                message: 'The last name is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    job: {
                        validators: {
                            notEmpty: {
                                message: 'The job title is required'
                            }
                        }
                    },
                    department: {
                        validators: {
                            notEmpty: {
                                message: 'The department name is required'
                            }
                        }
                    },
                    mobilePhone: {
                        validators: {
                            notEmpty: {
                                message: 'The mobile phone number is required'
                            },
                            digits: {
                                message: 'The mobile phone number is not valid'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    homePhone: {
                        validators: {
                            digits: {
                                message: 'The home phone number is not valid'
                            }
                        }
                    },
                    officePhone: {
                        validators: {
                            digits: {
                                message: 'The office phone number is not valid'
                            }
                        }
                    }
                }
            })
            .find('button[data-toggle]')
            .on('click', function () {
                var $target = $($(this).attr('data-toggle'));
                // Show or hide the additional fields
                // They will or will not be validated based on their visibilities
                $target.toggle();
                if (!$target.is(':visible')) {
                    // Enable the submit buttons in case additional fields are not valid
                    $('#togglingForm').data('bootstrapValidator').disableSubmitButtons(false);
                }
            });


            $('#accountForm').bootstrapValidator({
                // Only disabled elements are excluded
                // The invisible elements belonging to inactive tabs must be validated
                excluded: [':disabled'],
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    ini: {
                        validators: {
                            notEmpty: {
                                message: 'The Patient initials or Hospital Reg. No is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'The address is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'The city is required'
                            }
                        }
                    }
                }
            });

            $('#html5Form').bootstrapValidator();
        });
    </script>
</div>
