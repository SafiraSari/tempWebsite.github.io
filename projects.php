<!DOCTYPE html>
<html>
<head>
    <title>SOEN-287: A3 (projects)</title>
    <link rel="stylesheet" href="a3.css">
</head>

<body>
    <table style="width:100%">
        <tr>
            <th><a href="index.php">HOME</a></th>
            <th><a href="resume.php">RESUME</a></th>
            <th style="background-color: #C3C1AC;"><a href="projects.php">PROJECTS</a></th>
            <th><a href="contact.html">CONTACT</a></th>
            <th><a href="social.php">SOCIAL</a></th>
            <th><a href="admin.html">ADMIN</a></th>
        </tr>
        <tr>
           <td colspan="6">
                <h1>PROJECTS</h1>
                
                <h3>Check out my Past Work!</h3>


            <ol type="I" reversed style="text-align: justify;">
                <li>
                    
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_projects.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][0]."\n";
                    ?>
                    
                </li>

                <li>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_projects.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][1]."\n";
                    ?>
                </li>

                <li>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_projects.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][2]."\n";
                    ?>
                </li>


            </ol>

           </td>
        </tr>
    </table>

</body>

</html>