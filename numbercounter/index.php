<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbercounter</title>
</head>
<body>
<?php
$myNumber=floor(rand(0,100));
$result="";
if($myNumber>=0 && $myNumber<=10):
    
    switch($myNumber):
        case 0:
            $result = 'nolla';
            break;
        case 1:
            $result = 'yksi';
            break;
        case 2:
            $result = 'kaksi';
            break;
        case 3:
            $result = 'kolme';
            break;
        case 4:
            $result = 'neljä';
            break;
        case 5:
            $result = 'viisi';
            break;
        case 6:
            $result = 'kuusi';
            break;
        case 7:
            $result = 'seitsemän';
            break;
        case 8:
            $result = 'kahdeksan';
            break;
        case 9:
            $result = 'yhdeksan';
            break;

        case 10:
            $result = 'kymmenen';
            break;
        default:
            break;
        endswitch;
    endif;
        

        if (0 <= $myNumber && $myNumber <= 10) :
    switch($myNumber):
        case 0:
            $result = 'nolla';
            break;
        case 1:
            $result = 'yksi';
            break;
        case 2:
            $result = 'kaksi';
            break;
        case 3:
            $result = 'kolme';
            break;
        case 4:
            $result = 'neljä';
            break;
        case 5:
            $result = 'viisi';
            break;
        case 6:
            $result = 'kuusi';
            break;
        case 7:
            $result = 'seitsemän';
            break;
        case 8:
            $result = 'kahdeksan';
            break;
        case 9:
            $result = 'yhdeksan';
            break;

        case 10:
            $result = 'kymmenen';
            break;
        default:
            break;
        endswitch;
        

 elseif (10 < $myNumber && $myNumber <= 19) :
    $remainer = $myNumber - 10;
    switch($remainer):
        case 1:
            $result = 'yksi';
            break;
        case 2:
            $result = 'kaksi';
            break;
        case 3:
            $result = 'kolme';
            break;
        case 4:
            $result = 'neljä';
            break;
        case 5:
            $result = 'viisi';
            break;
        case 6:
            $result = 'kuusi';
            break;
        case 7:
            $result = 'seitseman';
            break;
        case 8:
            $result = 'kahdeksan';
            break;
        case 9:
            $result = 'yhdeksan';
            break;
            
        default:
            break;
        endswitch;
    $result .= 'toista';
   
 elseif (20 <= $myNumber && $myNumber <= 99) :
    $module = floor($myNumber / 10);
    $remainer = $myNumber % 10;
    
    switch($module):
        case 1:
            $result .= 'yksi';
            break;
        case 2:
            $result .= 'kaksi';
            break;
        case 3:
            $result .= 'kolme';
            break;
        case 4:
            $result .= 'neljä';
            break;
        case 5:
            $result .= 'viisi';
            break;
        case 6:
            $result .= 'kuusi';
            break;
        case 7:
            $result .= 'seitseman';
            break;
        case 8:
            $result .= 'kahdeksan';
            break;
        case 9:
            $result .= 'yhdeksan';
            break;    
            
        default:
            break;
        endswitch;

    $result .= 'kymmentä';

    switch($remainer):
        case 1:
            $result .= 'yksi';
            break;
        case 2:
            $result .= 'kaksi';
            break;
            case 3:
                $result .= 'kolme';
                break;
            case 4:
                $result .= 'neljä';
                break;
            case 5:
                $result .= 'viisi';
                break;
            case 6:
                $result .= 'kuusi';
                break;
            case 7:
                $result .= 'seitseman';
                break;
            case 8:
                $result .= 'kahdeksan';
                break;
            case 9:
                $result .= 'yhdeksan';
                break;    
            
        default:
            break;
    
    endswitch;

        
 else :
    $result = 'sata';

endif;
    

?>

<h1>Do you know how <?php echo $myNumber?> is in Finnish?</h1>
<h2>It is <?php echo $result?></h2>



  
</body>
</html>