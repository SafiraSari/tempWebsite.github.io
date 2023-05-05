<!DOCTYPE html>
<html>
<head>
    <title>SOEN-287: A3 (social)</title>
    <link rel="stylesheet" href="a3.css">
</head>

<body>
    <table style="width:100%">
        <tr>
            <th><a href="index.php">HOME</a></th>
            <th><a href="resume.php">RESUME</a></th>
            <th><a href="projects.php">PROJECTS</a></th>
            <th><a href="contact.html">CONTACT</a></th>
            <th style="background-color: #C3C1AC;"><a href="social.php">SOCIAL</a></th>
            <th><a href="admin.html">ADMIN</a></th>
        </tr>
        <tr>
           <td colspan="6">
                <h1>SOCIAL</h1>
                
                <h3>Connect with me on Social Media!</h3> 

                <?php
                    // RETRIEVING TXT FILE
                    $fileName = "a3_social.txt";
                    $text = file_get_contents($fileName);
                    preg_match_all('#\{(.*?)\}#', $text, $match);
        
                ?>


                <div>
                    <img src="social_media_icons.jpg" 
                    alt="Social Media Icons" usemap="#image-map">
                    
                    <map name="image-map">
                        <area 
                            alt="Facebook"
                            shape="rect" 
                            coords="0,0,115,115"
                            href="<?php echo $match[1][0];?>"
                            target="_blank">

                        <area 
                            alt="Twitter"
                            shape="rect" 
                            coords="170,0,285,115"
                            href="<?php echo $match[1][1];?>"
                            target="_blank">
                        
                        <area 
                            alt="Instagram"
                            shape="rect" 
                            coords="0,170,115,285"
                            href="<?php echo $match[1][2];?>"
                            target="_blank">

                    </map>  

                </div>
           </td>
        </tr>
    </table>

</body>

</html>
