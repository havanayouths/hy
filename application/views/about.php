<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">About</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="<?php echo site_url('index.php');?>">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">About</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-md-8 col-sm-7">                         
                            <h3 class="title">Welcome to Namibia Medical Regulatory Council</h3>
                            <p><img class="img-responsive" src="assets/images/abt.jpg" alt="" /></p>
                            <p>The Namibia Medicines Regulatory Council (NMRC) is a statutory body established in 
                                terms of the Medicines and Related Substances Control Act, Act 13 of 2003, to regulate the 
                                use of medicines in Namibia. The NMRC is appointed by the Minister responsible for health. 
                                The NMRC's mission is to serve the public interest by developing and maintaining internationally 
                                acceptable standards of medicines control.  </p>
                            <p>
                                The NMRC appoints technical committees to assist it in carrying out its mandate of regulating the sale 
                                and use of medicines in Namibia. The office of the Registrar of Medicines serves as NMRC secretariat 
                                and provides administrative and technical support to the Council. The Registrar’s office is the 
                                Subdivision of Pharmaceutical Control and Inspection within the Division of Pharmaceutical Services of 
                                the Ministry of Health and Social Services. There are four sections within the subdivision  <a href="<?php echo site_url('productreg');?>">Medicines 
                                Registration</a>, <a href="<?php echo site_url('inspection');?>">Inspection and Licensing</a>, <a href="<?php echo site_url('qsl');?>">Quality Surveillance Laboratory</a> and the <a href="<?php echo site_url('tipc');?>">Therapeutic Information 
                                and Pharmacovigilance Centre</a>.
                            </p>
                            <div class="page-row">
                                <h4 class="text-highlight">INSPECTION AND LICENSING</h4>
                                <p>
                                   The Inspection and Licensing section is mainly responsible for compliance and enforcement of the Medicines and Related Substances Control Act, 2003 (Act 13 of 2003).  >>Click here to read more 
                                </p>
                            </div>
                            <div class="page-row">
                                <h4 class="text-highlight">MEDICINES REGISTRATION</h4>
                                <p>
                                   Registration of medicines is focal point of any regulatory framework. Registration section is therefore a very important administrative component within the Sub-Division “Pharmaceutical Control and Inspection” of Pharmaceutical Services in the Ministry of Health and Social Services. >>Click here to read more 
                                </p>
                            </div>
                            <div class="page-row">
                                <h4 class="text-highlight">QUALITY SURVILANCE LABORATORY (QSL)</h4>
                                <p>
                                   The QSL is located on plot 11 Voigt Street, on the same premises as the Government Stores, in the Southern Industrial Area of Windhoek. >>Click here to read more 
                                </p>
                            </div>
                            <div class="page-row">
                                <h4 class="text-highlight">THERAPEUTICS INFORMATION & PHARMACOVIGILANCE CENTRE(TIPC)</h4>
                                <p>
                                    TIPC is the ministry of health and social services' official centre for the provision of unbiased therapeutics information and pharmacovigilance services to health care professionals and the general public in Namibia. >>Click here to read more
                                </p>
                            </div>
                        </article><!--//page-content-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">  
                            <?php $this->load->view('widgets/videotour');?>
                            <?php $this->load->view('widgets/dcontacts');?>
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->
    