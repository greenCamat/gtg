@extends('layout.master')
@section('title', 'GTG - Submit Order')
@section('content')
<!-- /.row -->

        <!-- Submit order Form -->
        <div class="row">
            <div class="col-md-8">
                <h3>Submit form</h3>
                <form name="sentMessage" id="submitForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" style="width: 350px;" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" style="width: 200px;" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" style="width: 200px;" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Preferred delivery date:</label>
                            <input disabled type="date" class="form-control glyphicon glyphicon-calendar" id="pref_data" style="width: 200px;">(For Member use Only.)
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Delivery options:</label>
							  <select class="form-control" id="del_opt" required data-validation-required-message="Please select delivery options.">
							    <option>Select</option>
							    <option>Personal delivery</option>
							    <option>Delivery to someone else</option>
							  </select>(For Member use Only.)
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Payment options:</label>
                            	<input disabled type="text" class="form-control" value="Cash on Deliver">
							  <!--<select class="form-control" id="del_opt" required data-validation-required-message="Please select delivery options.">
							    <option>Select</option>
							    <option>Cash on deliver</option>Kapag hindi member naka disable yung iba, Credit, Debit card lang pwede.
							    <option>Paypal</option>
							    <option>Credit card</option>
							    <option>Debit card</option> naka comment ito para sa VIP user. Phase 2 natin yon-->
							  </select>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Address:</label>
                            <input type="text" style="width: 500x;" class="form-control" id="address" required data-validation-required-message="Please enter your address.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="controls">
                            <label>City:</label>
                            <input type="text" style="width: 350px;" class="form-control" id="city" required data-validation-required-message="Please enter your city.">
                            <p class="help-block"></p>
                        </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message/Notes:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

@endsection

