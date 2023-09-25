

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <?php
    if(@$type==1){
        ?>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
<link  rel="stylesheet" href="<?=$action->helper->loadcss('rf1.css')?>">
        <?php
    }

    ?>
    
    
    <link  rel="stylesheet" href="<?=$action->helper->loadcss('main.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>"> 
    <title><?=@$title?></title>
</head>
<body>
