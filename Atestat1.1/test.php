<?php
      if (!empty($_POST)) {
            $s=1;
            $i1=$_POST['i1'];
            $i2=$_POST['i2'];
            $i3=$_POST['i3'];
            $i4=$_POST['i4'];
            $i5=$_POST['i5'];
            $i6=$_POST['i6'];
            $i7=$_POST['i7'];
            $i8=$_POST['i8'];
            $i9=$_POST['i9'];
            if($i1=='b') $s++;
            if($i2=='a') $s++;
            if($i3=='d') $s++;
            if($i4=='c') $s++;
            if($i5=='a') $s++;
            if($i6=='c') $s++;
            if($i7=='d') $s++;
            if($i8=='a') $s++;
            if($i9=='d') $s++;
            if($s>9) echo "<p style='text-align:center; font-size:24px;font-family:'courier';> Felicitari, ai trecut testul cu un punctaj de $s/10!</p>";
            else echo "<p style='text-align:center; font-size:24px;font-family:'courier';> Mai incearca, ai obtinut doar $s puncte din 10!</p>"; }
            ?>