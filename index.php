<!DOCTYPE html>
<html>
<head>
    <title>SOEN-287: A3 (index)</title>
    <link rel="stylesheet" href="a3.css">
</head>

<body>
    <table style="width:100%">
        <tr>
            <th style="background-color: #C3C1AC;"><a href="index.php">HOME</a></th>
            <th><a href="resume.php">RESUME</a></th>
            <th><a href="projects.php">PROJECTS</a></th>
            <th><a href="contact.html">CONTACT</a></th>
            <th><a href="social.php">SOCIAL</a></th>
            <th><a href="admin.html">ADMIN</a></th>
        </tr>
        <tr>
           <td colspan="6">
                <h1>HOME</h1>
                

                <h3 style="text-align: center">Professional Statement</h3> 

                <div>

                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_index.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][0]."\n"; 
                    ?>

                </div>


                <h3 style="text-align: center">Brief Biography</h3> 

                <div>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_index.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][1]."\n";
                    ?>

                </div>


           </td>
        </tr>
    </table>
</body>

</html>