<html>
<head>
<?php include("../includes/head.php"); ?>
<style>
.section-article p {
    width:90%;
}

.imgpointer:hover {
    cursor:pointer;
}
</style>

<script type="text/javascript" >
$(document).ready(function() {
    $('.imgpointer').click(function() {
        var imageurl = "showimages.php?image="+this.src;
      PopUP(imageurl, 'image', 650, 450, 0);
    }); 
});

function PopUP (urlParm, wname, ht, wt, restrict) 
{
    var winLeft, winTop;
    
    winLeft = (screen.width-wt)/2;
    winTop = (screen.height-(ht+110))/2; 

    if (restrict == 1)
    {
        popNew = window.open(urlParm,wname,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,width="+wt+",height="+ht+",left="+ winLeft+",top="+winTop+",resizable=0"); 
    }
    else
    {
        popNew = window.open(urlParm,wname,"toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,width="+wt+",height="+ht+",left="+winLeft+",top="+winTop+",resizable=1");       
    }
    return false;
}
</script>
</head>
<body>
<?php include("../includes/banner.php"); ?>

<div id="main-content">

<div id="section-panel">
<div class="section-article">
<h2>SendPicCip IOS iPhone Aplication</h2>

<div style="position:relative;display:block;">
<p>I wrote SendPicClick originally for my own use. I like to walk, and as I do, I find that there are various images 
I would like to share with friends and family. I didn't want to use some uber-broadcasting medium like Facebook, so I 
created this app.</p>
<p>The app works quite simply. You select the </p>
<img height="60" src="images/sendpicclipicon.png">
</div>
<div style="padding-top:20px;float:left; width:40%;">
and are presented with the  following screen:
<img style="padding-left:15%;padding-top:5px;" height="250" id="start" class="imgpointer" src="images/sendpicclipstart.png">
</div>
<div style="padding-top:20px;float:left; width:40%;">
From this menu you can do the following:
<ul>
<li><a href="#takepicture" style="text-decoration:none;">Take a Picture</a></li>
<li><a href="#takevideo" style="text-decoration:none;">Take a Video</a></li>
<li><a href="#selectcontacts" style="text-decoration:none;">Select Contacts</a></li>
<li><a href="#viewcontacts" style="text-decoration:none;">View Selected Contacts</a></li>
<li><a href="#clearcontacts" style="text-decoration:none;">Clear Selected Contacts</a></li>
</ul>
</div>

<div style="clear:both;padding-top:35px;width:85%;">
<h3 id="takepicture">Take a Picture</h3>
You can not take a picture until you have selected one or more contacts from your contact list.
 Once you have done this just point the iPhone and select the <span style="color:maroon;font-weight:bold;">Take Picture</span> button. You will be presented 
 with the iPhone camera interface. Take your picture and an email will come up with the picture attached
 and you contacts filled in. You may add people, change the subject - all the same functionality as if 
 you created the email from your email app. When you are finished select Send and the email with your 
picture will be on its way.
</div>

<div style="clear:both;padding-top:35px;width:85%;">
<h3 id="takevideo">Take a Video</h3>
You can not take a video until you have selected one or more contacts from your contact list.
 Once you have done this just point the iPhone and select the <span style="color:maroon;font-weight:bold;">Take Video</span> button. You will be presented 
 with the iPhone video camera interface. Take your video and when finished an email will come up with the video attached
 and you contacts filled in. You may add people, change the subject - all the same functionality as if 
 you created the email from your email app. When you are finished select Send and the email with your 
video will be on its way.
</div>

<div style="clear:both;padding-top:35px;width:85%;">
<h3 id="selectcontacts">Select Contacts</h3>
The select contacts function brings up a list of all the contacts in your iPhone Contacts app. The contacts list will appear 
as follows:
</div>

<div style="padding-top:20px;float:left; width:30%;">
<img style="padding-left:15%;padding-top:5px;" height="250" id="list" class="imgpointer" src="images/contactslist.png">
</div>
<div style="padding-top:20px;float:left; width:50%;">
This list will have check boxes next to all you contact names. Checking on any check box immeadeatly includes that 
conatct in your list. Un checking the check box removes that contact form your list. 
<br /><br />The contacts are listed in email 
alphabetical order. You can also search for a contact from the search box at the top of the form. You can return to the 
main page by hitting the back button or swiping right.
</div>

<div style="clear:both;padding-top:35px;width:85%;">
<h3 id="viewcontacts">View Selected Contacts</h3>
The view selected contacts function brings up a list of all the contacts that you have currently selected. The selected contacts list will appear 
as follows:
</div>

<div style="padding-top:20px;float:left; width:30%;">
<img style="padding-left:15%;padding-top:5px;" height="250" id="list" class="imgpointer" src="images/viewselected.png">
</div>
<div style="padding-top:20px;float:left; width:50%;">
You can un select any contacts that are currently checked. But you can not add any.
<br /><br />
You can return to the 
main page by hitting the back button or swiping right.
</div>

<div style="clear:both;padding-top:35px;width:85%;">
<h3 id="clearcontacts">Clear Selected Contacts</h3>
The clear selected contacts function removes all previously selected contacts from your list. When selected, the 
<span style="color:maroon;font-weight:bold;">Clear Selected Contacts</span> will show the following dialog:
</div>

<div style="padding-top:20px;float:left; width:30%;">
<img style="padding-left:15%;padding-top:5px;" height="250" id="list" class="imgpointer" src="images/clearcontacts.png">
</div>
<div style="padding-top:20px;float:left; width:50%;">
After selecting this option, you will need to go back and create a new select contacts list before taking taking pictures or videos.
</div>

<div style="clear:both;width:85%;height:400px;">
<br />
I hope you enjoy using this as much as I do. Please feel free to contact me with any ideas or other useful comments at <a href="mailto:yellowrangler.me@gmail.com?Subject=SendPicClip%20Commnets">Yellowrangler</a>

</div>

</div> <!-- end of section-article -->
</div> <!-- end of section-panel -->

</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
