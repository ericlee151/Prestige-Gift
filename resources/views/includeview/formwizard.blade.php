    <div class="stepwizard">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-6"> 
                    <a href="#step-1" type="button" class="btn btn-success btn-circle btn-fab btn-round" style="background-color: black;">
                        <i class="material-icons">format_paint</i>
                    </a>
                    <p><small>Customization</small></p>
                </div>
                <div class="stepwizard-step col-xs-6"> 
                    <a href="#step-2" type="button" class="btn btn-default btn-circle btn-fab btn-round" style="background-color: black;" disabled>
                       <i class="material-icons">person</i> 
                    </a>
                    <p><small>Information</small></p>
                </div>
            </div>
        </div>
    </div>
    
    <form role="form">
        <div class="setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 align="center">Customize Your Gift</h3>
            </div>
            <div class="panel-body">
                
                <div class="row">
                    <div class="col-xs-6">
                        <img src="http://www.dhresource.com/260x260s/f2-albu-g5-M01-38-D3-rBVaI1jLfC-AFJd7AATWMrDxtd8269.jpg/beautiful-new-manufacturers-selling-wholesale.jpg" alt="" class="img-rounded img-responsive">
                    </div>
                    <div class="col-xs-6">
                        <h4>Ribbon Color</h4>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: red; margin-left: 10px; border: 2px solid black;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: blue; margin-left: 10px;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: green; margin-left: 10px;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: yellow; margin-left: 10px;"></div>
                        </div>
                        <h4>Box Color</h4>
                        <div class="row">
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: red; margin-left: 10px; border: 2px solid black;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: blue; margin-left: 10px;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: green; margin-left: 10px;"></div>
                            <div class="col-sm-3 col-xs-3" style="width: 20px; height: 20px; background-color: yellow; margin-left: 10px;"></div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 30px;"></div>
                <h4>Your Note </h4>
                <textarea class="form-control" placeholder="Here can be your nice text" rows="5"></textarea>

                <div style="margin-bottom: 40px;"></div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-warning nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 align="center">Your Personal Information</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                   <label class="control-label">Email</label>
                    <input maxlength="100" type="email" required="required" class="form-control" placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <label class="control-label">Phone Number</label>
                    <input maxlength="100" type="email" required="required" class="form-control" placeholder="Your Phone Number" />
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input type="date" required="required" class="form-control" />
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Time</label>
                            <input type="time" required="required" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Location</label>                    
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6361.621810330773!2d104.92692236192924!3d11.55644804829549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2skh!4v1495547222514" width="auto" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios"> Send to My belove one!
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" checked=""> Delivery to my door!
                    </label>
                </div>

                <div style="margin-bottom: 40px;"></div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="/payment"><button class="btn btn-warning nextBtn pull-right" type="button">NEXT</button></a>
            </div>
        </div>

        

    </form>