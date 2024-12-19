<?php
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4" style="background-image: url('bg_reg.jpg'); background-size: cover;">
            <div class="modal-header border-0" >
                <h3 style="color: white;">Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div class="login">
                    <form id="register" action="#" method="post" class="row" >
                        
                        <div class="col-12" >
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                          <input type="date" class="form-control mb-3" id="dob" name="dob" placeholder="Date of Birth">
                        </div>
                        <div class="col-12">
                          <input type="text" class="form-control mb-3" id="roll" name="roll" placeholder="Roll Number">
                      </div>
                      <!--  -->
                      
                      <div class="col-12">
                          <select  class="form-control mb-3" style="height: 60px;" id="clas" name="clas" >
                            <option value="BA">BA</option>
                            <option value="BBA">BBA</option>
                            <option value="BCA">BCA</option>
                            <option value="BCOM">BCOM</option>
                            <option value="BSC">BSC</option>
                            <option value="BVOC">BVOC</option>
                          </select>
                      </div>
                      
                      <div class="col-12">
                          <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                      </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="sslcm" name="sslcm" placeholder="SSLC marks in %">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="pucm" name="pucm" placeholder="PUC marks in %">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="New Password">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="signup" style="background-color: yellow; color: black; font-weight: bold;">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>