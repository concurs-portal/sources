<?php
require_once ("controllers/test_controller.php");
require_once ("models/test_model.php");
require_once ("views/test_view.php");


//create 3 independent objects - one for each, the model, the view and the controller
$main_model = new testModel();
$main_view  = new testView("templates/test_template.php", $main_model->view_data);
$main_controller = new testController($main_model, $main_view);


?>