<h1> This is a test PHP/MVC app </h1><BR>

<div> The first variable = <b><?php echo $view_data->default_var; ?></b> </div><BR>
<div> The loaded data is: <b><?php echo $view_data->some_data; ?></b> </div><BR>

<a href="test_mvc.php?click_object=link1"> Click here to display some more text below </a><BR>
<b> <?php echo $view_data->link1_text;?> </b>

<BR><BR>

<a href="test_mvc.php?click_object=link2"> or click here to display other text below </a><BR>
<b> <?php echo $view_data->link2_text;?> </b>