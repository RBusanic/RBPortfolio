Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Gender: <input type="radio" name="gender"
               <?php if (isset($gender) && $gender=="female") echo "checked";?> vaule="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male

        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
Comment: <text area="comment" rows="5" cols="40"><?php echo $comment;?></text>
