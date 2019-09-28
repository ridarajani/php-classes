<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
    <?php
    require('constant.php');

    $error = [];
        if(isset($_POST['Submit'])){
            if(empty(trim($_POST['Name']))){
                $error['NAME'] = NAME;
            }
            if(empty(trim($_POST['FatherName']))){
                $error['FATHER'] = FATHER;
            }
            if(empty($_POST['Gender'])){
                $error['GENDER'] = GENDER;
            }
            if(empty($_POST['Cities'])){
                $error['CITY'] = CITY;
            }
            if(!isset($_POST['Skill'])){
                $error['SKILL'] = SKILL;
            }
            if (count($error) == 0){
                echo SUBMITTED;
            }
        }
    ?>
    <form method="post">
        <div>
            <label for="Name">Name</label>
            <input type="text" value="<?php echo ($error) ? (isset($_POST['Name']) ? $_POST['Name']   : '' ) : "" ;  ?> " name="Name">
            <span><?php echo array_key_exists('NAME', $error)  ? $error['NAME'] : '' ?></span>
        </div>
        <div>
            <label for="Father's Name">Father's Name</label>
            <input type="text" value="<?php echo ($error) ? ( isset($_POST['FatherName']) ? $_POST['FatherName'] : '') : ""; ?> " name="FatherName">
            <span><?php echo array_key_exists('FATHER', $error)  ? $error['FATHER'] : '' ?></span>
        </div>
        <div>
            <label for="Gender">Gender</label>
            <input type="radio" value="Male" name="Gender" 
            <?php echo ($error) ? (isset($_POST['Gender']) && $_POST['Gender']=="Male" ? "checked" : "") : "" ;?>>Male
            <input type="radio" value="Female" name="Gender" <?php echo ($error) ? (isset($_POST['Gender']) && $_POST['Gender']=="Female" ? "checked" : "" ) : "" ;
            ?>>Female
            <span><?php echo array_key_exists('GENDER', $error) ? $error['GENDER'] : '' ?></span>
        </div>
        <div>
        <select name="Cities">
                <option value="" <?php echo ($error) ? (isset($_POST['Cities']) && $_POST['Cities']=="" ? "selected" : "") : ""; ?>>Select your City</option>
                <option value="Lahore" <?php echo ($error) ? (isset($_POST['Cities']) && $_POST['Cities']=="Lahore" ? "selected" : "") : ""; ?>>Lahore</option>
                <option value="Islamabad" <?php echo ($error) ? (isset($_POST['Cities']) && $_POST['Cities']=="Islamabad" ? "selected" : "") : ""; ?>>Islamabad</option>
                <option value="Karachi" <?php echo ($error) ? (isset($_POST['Cities']) && $_POST['Cities']=="Karachi" ?  "selected" : "") : ""; ?>>Karachi</option>
            </select>
            <span><?php echo array_key_exists('CITY', $error) ? $error['CITY'] : '' ?></span>
        </div>
        <div>
        <label for="Skills">Skills:</label>
            <input type="checkbox" value="SkillOne" Name="Skill[]" <?php echo ($error) ? (isset($_POST['Skill']) && in_array("SkillOne", $_POST['Skill']) ?  "checked" : '') : "" ; ?>>Skill One
            <input type="checkbox" value="SkillTwo" Name="Skill[]" <?php echo ($error) ? (isset($_POST['Skill']) && in_array("SkillTwo", $_POST['Skill']) ? "checked" : "") : ""; ?>>Skill Two
            <input type="checkbox" value="SkillThree" Name="Skill[]" <?php echo ($error) ? (isset($_POST['Skill']) && in_array("SkillThree", $_POST['Skill']) ? "checked" : "") : ""; ?>>Skill Three
            <input type="checkbox" value="SkillFour" Name="Skill[]" <?php echo ($error) ? (isset($_POST['Skill']) && in_array("SkillFour", $_POST['Skill']) ? "checked" : "") : ""; ?>>Skill Four
            <span><?php echo array_key_exists('SKILL', $error) ? $error['SKILL'] : '' ?></span>
        </div>
        <div>
            <input type="submit" value="Submit" name="Submit">
        </div>
    </form>
    <p>Prepared by : Rida Rajani</p>
</body>
</html>