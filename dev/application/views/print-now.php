<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PrintItNow</title>
  <?php $this->load->view('includes/head'); ?>
</head>
<body>
<?php $this->load->view('includes/header'); ?>
<section>
  <div class="container">
    <div class="col-md-12">
      <div class="form-wrap">
        <form id="UploadForm" autocomplete="off" name="UploadForm" method="post" action="<?php echo MAINSITE_URL_INDEX.'confirm_order'?>" enctype="multipart/form-data">
          <input type="hidden" value="1" name="printorder" />
        <div class="panel-group" id="accordion">
          <span id="p_err"></span>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="javascript:void(0)" id="user_info"> <span class="glyphicon glyphicon-minus"></span> Step#1 - User Information </a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body  u-information">
                <fieldset class="user-inforamtion" id="deletetabs1">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" placeholder="Name*" maxlength="30" id="p_name" name="name" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email*" name="email" maxlength="50" id="p_email" placeholder="jane@firefly.com*" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="contact" maxlength="13" id="p_ph" placeholder="Contact Number*" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="alternate_contact" maxlength="13" id="p_alt_ph" placeholder="Alternate Contact Number" class="form-control"/>
                  </div>
                  
                 <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="text-center">
                      <button class="btn btn-primary btn-sx print-now-bttn" type="button" id="upload-file-nxt">Upload File</button>
                  </div>
                 </div>
                 
              </fieldset>
              </div>
            </div>
          </div>
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a href="javascript:void(0)" id="vender_info"> <span class="glyphicon glyphicon-plus"></span> Step#2 - Vendor Information</a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <fieldset class="upload-file">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <select class="form-control sect-opt" id="p_vendor" name="vendor">
                        <option value="">Choose Your Vendor</option>
                        <option value="Vendor1">Vendor1</option>
                        <option value="Vendor2">Vendor2</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-12 text-center"> <a href="javascript:void(0) " class="btn btn-default pull-right submit-bttn" id="next">Next</a> </div>
                  
                </fieldset>
              </div>
            </div>
          </div>
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a href="javascript:void(0)" id="user_order"> <span class="glyphicon glyphicon-plus"></span> Step#3 - Order information </a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div id="AddFileInputBox">
                  
                  <fieldset class="upload-file1 m-b-30">  
                    <legend><a href="javascript:void(0)" style="color:#fff;" class="show_div" showing='1' value='1'>First File Uploading</a></legend>

        					 <div id="TabHideShow_1">
                    <div class="col-md-12 col-sm-12 col-xs-12 m-b-20">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="from-group">
                            <input type="file" name="file[]" class="form-control" placeholder="Upload Your File">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 cols-xs-12">
                       		<p style="padding-top:10px;">Your file type is doc,docx,pdf,jpg</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <select class="form-control sect-opt" name="data[paper_size][]">
                          <option value="">Paper Size*</option>
                          <option value="A3">A3</option>
                          <option value="A4">A4</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="from-group">
                        <select class="form-control sect-opt" name="data[print_option][]">
                          <option value="">Print Option*</option>
                          <option value="Coloured">Coloured</option>
                          <option value="Black and White">Black & White</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <select class="form-control  sect-opt" name="data[print_sided][]">
                          <option value="Print one sided">Print one sided</option>
                          <option value="Print both sided">Print both sided</option>
                         </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <select class="form-control  sect-opt" name="data[orientation][]">
                          <option value="">Orientation*</option>
                          <option value="Landscape">Landscape</option>
                          <option value="Portrait">Portrait</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <select class="form-control  sect-opt" name="data[pages][]">
                          <option value="">Pages / sheet</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="6">6</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <input type="number" name="data[no_of_copy][]" class="form-control" placeholder="No of Copies*">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <input type="number" name="data[total_no_pages][]" class="form-control" placeholder="Total no pages*">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <select class="form-control  sect-opt" name="data[binding][]">
                          <option value="">Binding</option>
                          <option value="Wiro binding">Wiro binding</option>
                          <option value="Soft binding">Soft binding</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control datepick" id="datepicker1" name="data[pick_up_date][]" placeholder="Pick Up Date*">
                      </div>
                    </div>
                    <?php /*
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="data[pick_up_time][]" placeholder="Pick Up Time">
                      </div>
                    </div>
                    */ ?>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="pull-left">
                            <label class="">Print* &nbsp; &nbsp;</label>
                            <label class="radio-inline no-pad-right">
                              <input type="radio" value="all" checked name="data[optradio][1]">
                              All Pages</label>
                            <label class="radio-inline no-pad-right">
                              <input type="radio" value="cus" name="data[optradio][1]">
                              Custom</label>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-12 pad">
                            <div class="from-group">
                              <input type="text" name="data[from][]" class="form-control" placeholder="From">
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2 col-xs-12 pad">
                            <div class="from-group">
                              <input type="text" name="data[to][]" class="form-control" placeholder="To">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
				          </div>
                </fieldset>
				      
              </div>
                
              <div class="col-md-12 text-center">
                <a href="#" id="AddMoreFileBox" class="btn btn-default pull-right submit-bttn">Add More</a>
                <input type="button" id="btn_save" name="submit1" value="Submit" class="btn btn-default pull-right submit-bttn m-l-5">
              </div>
            
            </div>
          </div>
        </div>
      </div>
		  <?php /*<div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>*/ ?>
    </form>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/foot'); ?>
</body>
</html>