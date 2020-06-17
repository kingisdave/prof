<div class="container-fluid bg-secondary">
	<form class="form">
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value=" Administrative and Regulatory Issues">
    <label class="custom-control-label" for="customRadio2"> Administrative and Regulatory Issues</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="Art History and Aesthetic Practices" required>
    <label class="custom-control-label" for="customRadio">Art History and Aesthetic Practices</label>
  </div>
   <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="General Issues" required>
    <label class="custom-control-label" for="customRadio">General Issues</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="Opportunities" required>
    <label class="custom-control-label" for="customRadio2">Opportunities</label>
  </div>
   <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="Research" required>
    <label class="custom-control-label" for="customRadio">Research</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="Visual Culture" required>
    <label class="custom-control-label" for="customRadio2">Visual Culture</label>
  </div>
</form>
</div>

<i class="fa fa-plus btn btn-lg text-primary btn-info m-t-10 m-b-10 mediaShow" style="font-size:20px;margin-bottoms: 0px !Important;"> <span> Add media file</span></i>
                                                    <div class="col-lg-12 mediaContent" style="margin-top:-20px; display:none">
                                                    <div class="col-lg-6 card-box">
                                                        <label class="" for="file-type">Select a FIle type</label>
                                                        <select class="form-control" id="file-type" name="file-type">
                                                            <option value="none">Choose one</option>
                                                            <option value="Image">Image</option>
                                                            <option value="Video">Video</option>
                                                            <option value="Audio">Audio</option>
                                                            <option value="PDF">PDF file</option>
                                                        </select>
                                                            <label for="image" id="imageLabel" class="btn btn-primary" style="margin:5px;*display: none;">Upload <span id="typeName"></span> File</label><span id="fileName">No file chosen (File must be one of the following format - .jpg, .png, .gif, .mp3, .mp4 or .pdf)</span>
                                                            <input type="file" id="image" style="*display:none;opacity: 0; z-index: -1; position: absolute;" name="post_media">
                                                            <br><button class="btn btn-danger" id="cancelMedia" style="display:none;">Cancel</button>
                                                        <div>
                                                          
                                                        </div>
                                              
                                                    </div>
                                                </div>
                                                    
                                                    
                                                    <ul class="nav nav-pills profile-pills m-t-10">
<!--  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom" -->
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio1" value="Art History and Aesthetic Practices" required>
                                                        <label for="radio1">
                                                            Art History and Aesthetic Practices
                                                        </label>
                                                    </div>

                                                </li>
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio2" value="Visual Culture" required>
                                                        <label for="radio2">
                                                            Visual Culture
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio3" value="Research" required>
                                                        <label for="radio3">
                                                            Research
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio5" value="Administrative and Regulatory Issues" required>
                                                        <label for="radio5">
                                                            Administrative and Regulatory Issues
                                                        </label>
                                                    </div>

                                                </li>
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio6" value="Opportunities" required>
                                                        <label for="radio6">
                                                            Opportunities
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="m-r-15">
                                                    <div class="radio radio-custom">
                                                        <input type="radio" name="radio" id="radio4" value="General Issues" required>
                                                        <label for="radio4">
                                                            General Issues
                                                        </label>
                                                    </div>
                                                </li>
                                              
                                            </ul>