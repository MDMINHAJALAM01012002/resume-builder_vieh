<?php
$cv['contact']= str_replace('\\',"",$cv['contact']);
$cv['skills']= str_replace('\\',"",$cv['skills']);
$cv['experience']= str_replace('\\',"",$cv['experience']);
$cv['education']= str_replace('\\',"",$cv['education']);

 $contact = json_decode($cv['contact']);
 $skills = json_decode($cv['skills']);
 $experience = json_decode($cv['experience']);
 $education = json_decode($cv['education']);
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
<link  rel="stylesheet" href="<?=$action->helper->loadcss('rf1.css')?>">
    
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>"> 
    <title><?=@$title?></title>
</head>
<body>


<div id="doc2" class="yui-t7">


	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?=@$cv['name']?></h1>
					<h2><?=@$cv['headline']?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a id="pdf" href="#"><?=$contact->mobile?></a></h3>
						<h3><a href="mailto:<?=$contact->email?>"><?=$contact->email?></a></h3>
						
						<h3><?=$contact->address?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Objective</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?=$cv['objective']?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
							<p class="talent">
                         <?=$cv['skills']?>
							</p>
                </div>
				</div>
					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Education</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">


			<div class="job">
			<p class="job">
                         <?=$cv['experience']?>
</p>	
							</div>


							
						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Experience</h2>
						</div>
						<div class="yui-u">
						<p class="talent">
                         <?=$cv['education']?>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?=$cv['name']?> &mdash; <a href="<?=$contact->email?>"><?=$contact->email?></a> &mdash; <?=$contact->mobile?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
