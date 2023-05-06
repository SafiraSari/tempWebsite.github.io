<!DOCTYPE html>
<html>
<head>
    <title>SOEN-287: A3 (resume)</title>
    <link rel="stylesheet" href="a3.css">
    
</head>

<body>
    <table style= "width: 100%">
        <tr>
            <th><a href="index.php">HOME</a></th>
            <th style="background-color: #C3C1AC;"><a href="resume.php">RESUME</a></th>
            <th><a href="projects.php">PROJECTS</a></th>
            <th><a href="contact.html">CONTACT</a></th>
            <th><a href="social.php">SOCIAL</a></th>
            <th><a href="admin.html">ADMIN</a></th>
        </tr>
        <tr>
            <td colspan="6">
            <h1>RESUME</h1>
            
            <dl>
                <dt>EDUCATION</dt>
                <dd>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_resume.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][0]."\n"; 
                    ?>

                </dd>
            </dl>

            <dl>
                <dt>PROFESSIONAL & TECHNICAL SKILLS</dt>
                <dd>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_resume.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][1]."\n"; 
                    ?>

                </dd>
            </dl>

            <h4>AWARDS/RECOGNITION</h4>
            <ol>
                <li>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_resume.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][2]."\n"; 
                    ?>

                </li>
            </ol>


            <h4>WORK EXPERIENCE</h4>
            <ol>
                <li>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_resume.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][3]."\n"; 
                    ?>

                </li>
            </ol>


            <dl style="text-align: left;">
                <dt>REFEREE</dt>
                <dd>
                    <?php
                        // DISPLAYING TXT FILE
                        $fileName = "a3_resume.txt";
                        $text = file_get_contents($fileName);
                        preg_match_all('#\{(.*?)\}#', $text, $match);
                        echo $match[1][4]."\n"; 
                    ?>


                </dd>
            </dl>

            <input type="submit" value="Download Full CV">
            </td>


        </tr>
    </table>
</body>

</html>
