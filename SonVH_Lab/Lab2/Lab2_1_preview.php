<?php
    $intro = "None";
    $img = null;
    $name = "None";
    $dob = "None";
    $educationProcess = "None";
    $workingProcess = "None";
    $socialActivities = "None";
    $skills = "None";
    $experiences = "None";
    $certification = "None";
    $hobbies = "None";
    $desire = "None";
    if (isset($_POST["save-btn"])){
        $intro = explode("\r\n", trim($_POST["intro"]));
        $img = $_POST["img"];
        $name = $_POST["name"];
        $dob = $_POST["dob"];
        $workingProcess = explode("\r\n", trim($_POST["working-process"]));
        $educationProcess = explode("\r\n", trim($_POST["education-process"]));
        $socialActivities = explode("\r\n", trim($_POST["social-activities"]));
        $skills = explode("\r\n", trim($_POST["skills"]));
        $experiences = explode("\r\n", trim($_POST["experiences"]));
        $certification = explode("\r\n", trim($_POST["certifications"]));
        $hobbies = $_POST["hobbies"];
        $desire = explode("\r\n", trim($_POST["desire"]));
    }
    function preview($data){ 
        foreach ($data as $d){
            echo $d;
            echo '<br>';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SonVH</title>
        <link rel="stylesheet" href="preview.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
            <span class="personal-details">
                <h1>Personal Details</h1>
                <p class="say-hi">Hi all!</p>
                <p><?php preview($intro); ?></p>
            </span>  
            <div>
            <img src="<?php echo $img;?>" width="100%" height="100%"/>
            </div>
        </div>    
        <hr>
        <div class="resume-content">
            <div class="info name">
                <p class="title">Name</p>
                <div class="content">
                    <p><?php echo $name; ?></p>
                </div>              
            </div>
            <div class="info name">
                    <p class="title">Date of birth</p>
                    <div class="content">
                    <p><?php echo $dob; ?></p>
                    </div>              
            </div>
            <div class="info education-process">
                <p class="title">Education Process</p>
                <div class="content">
                    <p><?php preview($educationProcess); ?></p>
                </div>              
            </div>
            <div class="info working-process">
                <p class="title">Working Process</p>
                <div class="content">
                    <p><?php preview($workingProcess); ?></p>
                </div>              
            </div>
            <div class="info social-activities">
                <p class="title">Social Activities</p>
                <div class="content">
                    <p><?php preview($socialActivities); ?></p>
                </div>              
            </div>
            <div class="info skill">
                <p class="title">Skill</p>
                <div class="content">
                <p><?php preview($skills); ?></p>
                </div>              
            </div>
            <div class="info experiences">
                <p class="title">Experiences</p>
                <div class="content">
                    <p><?php preview($experiences); ?></p>
                </div>              
            </div>
            <div class="info Certifications">
                <p class="title">Certifications</p>
                <div class="content">
                <p><?php preview($certification); ?></p>
                </div>              
            </div>
            <div class="info hobbies">
                <p class="title">Hobbies</p>
                <div class="content">
                    <p><?php preview($hobbies); ?></p>
                </div>              
            </div>
            <div class="info desire">
                <p class="title">Desire</p>
                <div class="content">
                    <p><?php preview($desire); ?></p>
                </div>              
            </div>
        </div>  
    </body>

</html>