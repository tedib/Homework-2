<!doctype html>
<html>
<head>
    <title>Homework-1</title> 
</head> 

<?php
    function is_prime($number)
    {
        $prime = true;
        for($i = 2; $i < $number/2 ; $i++)
        {
            if($number % $i == 0)
            {
                $prime = false;
                break;
            }
        }
        return $prime;
    }
    
    function find_3_prime($arr)
    {
        $count = 0;
        if(sizeof($arr) > 0)
        {
            foreach($arr as $item)
            {
                if(is_prime($item))
                {
                    $count++;
                    if($count == 3)
                    {
                        return $item;
                    }
                }
            }
        }
    }
    
    function check_exists($arr)
    {
        $numbers = array(146, 284, 871);
        
        foreach($numbers as $number)
        {
            if(in_array($number, $arr))
            {
                echo "<p>The number $number exists in the array.</p>";
            }
            else
            {
                echo "<p>The number $number does not exist in the array.</p>";
            }
        }
    }
    
    $arr = range(20, 1000, 37);    
?>

<body>
<?php
    echo "<p>" . find_3_prime($arr) . "</p>";
    check_exists($arr);
?>
</body>

</html>