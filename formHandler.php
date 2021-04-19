
-==========================================================================================================

<?php
$name = '';
$city = '';
$educationStr = '';
$gender = '';
$checkedMale = '';
$checkedFeMale = '';
$education = array();
if(isset($_POST['submit'])){
   
    $name = ($_POST['name']);
    $city = ($_POST['city']);
    if(isset($_POST['gender'])){
        $gender = ($_POST['gender']);
            if($gender == 'Male'){
                $checkedMale = "checked = 'checked'";
            }if($gender == 'Female'){
                $checkedFeMale = "checked = 'checked'";
            }
    }
    if(isset($_POST['education'])){
        $education = $_POST['education'];
        $educationStr = implode("  , " , $education);
    }
   
    echo "Name: - $name</br>";
    echo "City: - $city</br>";
    echo "Gender: - $gender</br>";
    echo "Education: - $educationStr</br>";
}
?>


<form method="post">
    Name: - <input type="text" name="name" value="<?php echo $name ?>"> <br><br>
    Password: - <input type="password" name="password"><br><br>
    Gender: -
    <input type="radio" name="gender" value="Male" <?php echo $checkedMale ?>>Male
    <input type="radio" name="gender" value="Female" <?php echo $checkedFeMale ?>>Female
    <br><br>
    City: - 
    <?php
        $cityArr = array('Rangput','Bogura','Khulna','Jessor','Dhaka');
        
    ?>
    <select name="city">
        <option >Select City</option>
        <?php
            foreach($cityArr as $lists){
                if($city == $lists){
                    echo "<option selected>$lists</option>";
                }else{
                    echo "<option>$lists</option>";
                }
                
        }
        ?>
    </select>
    <br><br>
    Education: -
    <?php
        $educationArr = array('M.Tech','B.Tech','B.Sc','MBA');
        foreach($educationArr as $list){
          if(in_array($list,$education)){
            echo "<input type='checkbox' name='education[]' value= '$list' checked ='checked'>$list";
          }else{
            echo "<input type='checkbox' name='education[]' value= '$list'>$list";
          }
        }
    ?>
    <br><br>
    <input type="submit" name="submit">
</form>



-==========================================================================================================

<?php
    $name='';
    $read='';
    $gender='';
    $checkedMale='';
    $checkedFemale ='';
    $subjectStr ='';
    $subject = array();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $read = $_POST['read'];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            if($gender =='Male'){
                $checkedMale = 'checked';
            }if($gender =='Female'){
                $checkedFemale = 'checked';
            }
        }

        if(isset($_POST['subject'])){
            $subject = $_POST['subject'];
            $subjectStr = implode("," , $subject);
        }
    }


    echo "Name - $name<br>";
    echo "Gender - $gender<br>";
    echo "Do You Want to Read? - $read<br>";
    echo "Subject - $subjectStr<br>";

?>

<br>

<form action="" method="post">
Name:
<input type="text" name="name" value="<?php echo $name?>"> 
<br> 
<br>
Gender:-
<input type="radio" name="gender" value="Male" <?php echo $checkedMale ?>>Male
<input type="radio" name="gender" value="Female" <?php echo $checkedFemale ?>>Female
<br>
<br>
Do you love to read?
<?php
    $readArr = array('Yes','No');
?>
<select name="read">
    <option>Choose Now</option>
    <?php
        foreach($readArr as $list){
            if($read == $list){
                echo "<option selected>$list</option>";
            }else{
                echo "<option>$list</option>";
            }
        }
    ?>
</select>
<br>
<br>
Subject:
<?php
    $subjectArr = array('English','Bangla');
    foreach($subjectArr as $list){
        if(in_array($list, $subject)){
            echo "<input type='checkbox' value='$list' name='subject[]' checked>$list";
        }else{
            echo "<input type='checkbox' value='$list' name='subject[]'>$list"; 
        }
    }
?>

<br>
<br>
<input type="submit" value="Submit" name="submit">

</form>
