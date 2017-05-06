<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PrintItNow</title>
<?php include'includes/head.php'; ?>
</head>
<body>
<?php include'includes/header.php'; ?>
<section>
  <div class="container">
    <div class="col-md-12">
      <div class="form-wrap">
        <form>   
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="glyphicon glyphicon-minus"></span> Step#1 -  User Information </a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body  u-information">
                <fieldset class="user-inforamtion">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" placeholder="Name*" class="form-control" required/>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email*" placeholder="jane@firefly.com" class="form-control" required/>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" placeholder="Contact Number*" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Alternate Contact Number" class="form-control" required/>
                  </div>
                  
                 <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="text-center">
                      <button class="btn btn-default pull-right submit-bttn" type="button" id="upload-file-nxt">Upload File</button>
                  </div>
                 </div>
                 
              </fieldset>
              </div>
            </div>
          </div>
          
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span class="glyphicon glyphicon-plus"></span> Step#2 - Select Your Vendor</a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <fieldset class="upload-file">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <select class="form-control sect-opt">
                        <option selected>Choose Your Vendor</option>
                        <option>Vendor1</option>
                        <option>Vendor2</option>
                      </select>
                    </div>
                  </div>
                  
                  
                  
                  <div class="col-md-12 text-center"><a href="#" class="btn btn-default submit-bttn">Next</a>  </div>
                  
                </fieldset>
              </div>
            </div>
          </div>
          
         
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <span class="glyphicon glyphicon-plus"></span> Step#3 -  Upload  file and fill order information </a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <fieldset class="upload-file1 m-b-30">
                     <legend>First File Uploading</legend>
                  <div class="col-md-12 col-sm-12 col-xs-12 m-b-20">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="from-group">
                          <input type="file" class="form-control" placeholder="Upload Your File">
                        </div>
                      </div>
                      
                       <div class="col-md-6 col-sm-6 cols-xs-12">
                       		<p style="padding-top:10px;">Your file type is doc,docx,pdf,jpg</p>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control sect-opt">
                        <option selected>Paper Size*</option>
                        <option>A4</option>
                        <option>A5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="from-group">
                      <select class="form-control sect-opt">
                        <option selected>Print Option*</option>
                        <option>Coloured</option>
                        <option>Black & White</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Print one sided</option>
                        <option>Print both sided</option>
                       </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Orientation*</option>
                        <option>Landscape</option>
                        <option>Portrait</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Pages / sheet</option>
                        <option>1</option>
                        <option>2</option>
                        <option>4</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="No of Copies*">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Total no pages*">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt" placeholder="">
                        <option>Binding</option>
                        <option selected>Wiro binding</option>
                        <option>Soft binding</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pick Up Date">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pick Up Time">
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="pull-left">
                          <label class="">Print &nbsp; &nbsp;</label>
                          <label class="radio-inline no-pad-right">
                            <input type="radio" name="optradio">
                            All Pages</label>
                          <label class="radio-inline no-pad-right">
                            <input type="radio" name="optradio">
                            Custom</label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 pad">
                          <div class="from-group">
                            <input type="text" class="form-control" placeholder="From">
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 pad">
                          <div class="from-group">
                            <input type="text" class="form-control" placeholder="To">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 text-center"> <a href="#" class="btn btn-default pull-right submit-bttn">Add More</a> </div>
                  
                </fieldset>
                
                  <fieldset class="upload-file1 m-b-30">
                     <legend>Second File Uploading</legend>
                  <div class="col-md-12 col-sm-12 col-xs-12 m-b-20">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="from-group">
                          <input type="file" class="form-control" placeholder="Upload Your File">
                        </div>
                      </div>
                      
                       <div class="col-md-6 col-sm-6 cols-xs-12">
                       		<p style="padding-top:10px;">Your file type is doc,docx,pdf,jpg</p>
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control sect-opt">
                        <option selected>Paper Size*</option>
                        <option>A4</option>
                        <option>A5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="from-group">
                      <select class="form-control sect-opt">
                        <option selected>Print Option*</option>
                        <option>Coloured</option>
                        <option>Black & White</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Print one sided</option>
                        <option>Print both sided</option>
                       </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Orientation*</option>
                        <option>Landscape</option>
                        <option>Portrait</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt">
                        <option  selected>Pages / sheet</option>
                        <option>1</option>
                        <option>2</option>
                        <option>4</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="No of Copies*">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Total no pages*">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <select class="form-control  sect-opt" placeholder="">
                        <option>Binding</option>
                        <option selected>Wiro binding</option>
                        <option>Soft binding</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pick Up Date">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pick Up Time">
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="pull-left">
                          <label class="">Print &nbsp; &nbsp;</label>
                          <label class="radio-inline no-pad-right">
                            <input type="radio" name="optradio">
                            All Pages</label>
                          <label class="radio-inline no-pad-right">
                            <input type="radio" name="optradio">
                            Custom</label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 pad">
                          <div class="from-group">
                            <input type="text" class="form-control" placeholder="From">
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 pad">
                          <div class="from-group">
                            <input type="text" class="form-control" placeholder="To">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 text-center"> <a href="#" class="btn btn-default pull-right submit-bttn">Add More</a> </div>
                  
                </fieldset>
                
                <div class="col-md-12 text-center">
                   <!--<a href="review.php" class="btn btn-default pull-right submit-bttn  m-l-5">Review</a>-->  
                   <a href="#" class="btn btn-default pull-right submit-bttn m-l-5">Submit</a>
                   
                </div>
             
              </div>
            </div>
          </div>
          
          
         
          
          
        </div>
          </form>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/foot.php'; ?>
</body>
</html>