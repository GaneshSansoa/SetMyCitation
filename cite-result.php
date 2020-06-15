

<?php
include_once('config/config.php');
include_once(ROOT_PATH.'header.php');

include "vendor/autoload.php";
use Seboettg\CiteProc\StyleSheet;
use Seboettg\CiteProc\CiteProc;

$get_data = $_POST["data"];
$type = $_POST["formatType"];
print_r($type);
//$data = file_get_contents($get_data);
$style = StyleSheet::loadStyleSheet($type);
$customstyle = StyleSheet::loadCustomStyleSheet("Lola");
echo $customstyle;

$citeProc = new CiteProc($style);
$bibliography = $citeProc->render(json_decode($get_data), "bibliography");
$cssStyles = $citeProc->renderCssStyles();
// echo $bibliography;
//echo json_encode(array('bibliography'=> $bibliography));
//die;
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Static Slider 1  -->
                <!-- ============================================================== -->
                <section id="citation-result">
                    <div class="spacer banner" style="background-image:url(images/background-6.png);">
                        <div class="container">
                        <h4>Generated Result</h4>
                            <div class="row">
                                <div class="col-md-8 ">
                                    <div class="card p-4">
                                        <div class="row text-center align-items-center">
                                            <div class="col-md-9" id="cite" ><?php echo $bibliography;?></div>
                                            <div class="col-md-3" id="actions">
                                                <?php if(isset($_COOKIE["token"])):?>
                                                    <div class="d-inline-block cursor-pointer" id="copy" data-clipboard-action="copy" data-clipboard-target="#cite">
                                                        <i class="fa fa-copy"></i>
                                                        <p id="copy-alert">copy</p>
                                                    </div>
                                                    <div class="d-inline-block cursor-pointer" id="save" data-toggle="modal" data-target="#saveDialog">
                                                        <i class="fa fa-save"></i>
                                                        <p id="save-alert">save</p>
                                                    </div>
                                                <?php else:?>
                                                    <div class="d-inline-block cursor-pointer" id="copy" data-clipboard-action="copy" data-clipboard-target="#cite">
                                                        <i class="fa fa-copy"></i>
                                                        <p>copy</p>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="card bg-success-gradiant text-white">
                                    <div class="card-body">
                                        <h6 class="font-medium text-white">Join Now</h6>
                                        <p class="m-t-20">Lorem ipsum dolor sit amet, consecte tuam porttitor, nunc et fringilla.</p>
                                        <a href="#f4" class="linking">Learn More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<div class="modal" tabindex="-1" role="dialog" id="saveDialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Save Citation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
window.addEventListener('load', function() {
	$(document).ready(function(){
		$("#save").click(function(){
			
		});
	});
},false);
</script>

<?php include_once(ROOT_PATH.'footer.php');
?>