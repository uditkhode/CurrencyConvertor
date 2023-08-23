<?php
if(isset($_POST["submit"]))
{
    $a=$_POST['a'];
    $currency=$_POST['currency'];
    
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    body {
            background-image: url("image/money.jpg");
            background-repeat: no-repeat;
            background-position: center;
            margin: 0; 
            /* Remove default body margin */
        }

        .container {
           
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
           // transform: scale(33); /* Set the scale to 33% (zoom in) */
            //transform-origin: top center;
        }
    h2
    {
        text-align: center;
            color: white; 
            font-size:50px;
    } 
    .result[type="text"]
    {
            margin-top: 20px;
            width: 80%; 
            background-color: #dcd5f0;
            border-radius: 5px;
            height:2px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            cursor: pointer;
    }
    input[type="submit"]
    {
        width: 100px;
        padding: 10px;
        border: 10px solid rgb(145, 1, 255);
        background-color: #ca4747;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        align-items: center;
        transition-duration: 0.2s;
        margin-left: 150px;
        cursor: pointer;
    }
    input[type="submit"]:hover
    {
        background-color: rgb(114, 83, 209);
        color: rgb(255, 255, 255);
        font-size: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 10px;
    }

    select
    {
        display: block;
        padding: 10px;
        margin-top: 20px;
        background-color: #ffffff;
        color: #000000;
        border: none;
        border-radius: 5px;
        font-family: 'Times New Roman', Times, serif;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        cursor: pointer;
    }
    select:hover
    {
        color: #2d57b0;
        transition: 0.3s;
    }

    input[type="text"]
    {
            margin-top: 20px;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 5px;
    }
    .add-img option[value="pounds"] 
    {
            background-image: url('user1.png');
            background-repeat: no-repeat;
            background-position: left center;
            padding-left: 30px;
    }
    img
    {
        border-radius:20px;
    }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>CURRENCY CONVERTOR</h2>
    <div class="container">
    <form method="POST" name="userinput">
        <h3>Enter value in INR</h3>
        <input type="text" name="a" value="">
    <lable for="currency"><h3 >CONVERT IN</h3></label>    
    <select class="add-img" name="currency" id="currency">

        <option value="" style="background-color:#000000 ; color:#ffffff;">____select country___</option>  
        <option class="add-img" value="pounds">pounds</option>  
        <option value="usdoller">us doller</option>     
        <option value="japanese yen">japanese yen</option>     
        <option value="Afghanistan">Afghanistan</option>        
        <option value="China">China</option>        
        <option value="Indonesia">Indonesia</option>        
        <option value="Japan">Japan</option>        
        <option value="Malaysia">Malaysia</option>        
        <option value="South Korea">South Korea</option>        
        <option value="Sri Lanka">Sri Lanka</option>        
        <option value="Pakistan">Pakistan</option>        
        <option value="Thailand">Thailand</option>        
        <option value="Taiwan">Taiwan</option>        
        <option value="United Arab Emirates">United Arab Emirates</option>        
</select>
<br>
<br>
<input style=" margin-left:50px;" class="result" type="text" value="
        
        
<?php
if(isset($_POST["submit"]))
{
    if (!empty($a))
    {
        if($currency == "pounds")
        {
          $pounds = $a * 0.0095;
          echo floatval($pounds).' <img src="image/img1.jpg" width="20px" height="20px">';
         
        }
        elseif($currency == "usdoller")
        {
            $usdoller = $a * 0.012;
            echo floatval($usdoller);

        }

        elseif($currency == "japanese Yen")
        {

            $jy = $a * 1.72;
            echo floatval($jy);
        }

        elseif($currency == "Afghanistan")
        {
            $Afghanistan = $a * 1.03;
            echo floatval($Afghanistan);

        }

        elseif($currency == "China")
        {
            $China = $a * 0.087;
            echo floatval($China);

        }
        elseif($currency == "Indonesia")
        {
            $Indonesia = $a * 183.32;
            echo floatval($Indonesia);

        }
        elseif($currency == "Japan")
        {
            $Japan = $a * 1.71;
            echo floatval($Japan);

        }
        elseif($currency == "Malaysia")
        {
            $Malaysia = $a * 0.055;
            echo floatval($Malaysia);

        }
        elseif($currency == "South Korea")
        {
            $SouthKorea = $a * 15.76;
            echo floatval($SouthKorea);

        }
        elseif($currency == "Sri Lanka")
        {
            $SriLanka = $a * 3.87;;
            echo floatval($SriLanka);

        }
        elseif($currency == "Pakistan")
        {
            $Pakistan = $a * 3.44;
            echo floatval($Pakistan);

        }


        elseif($currency == "Thailand")
        {
            $Thailand = $a * 0.42;
            echo floatval($Thailand);

        }
        elseif($currency == "Taiwan")
        {
            $Taiwan = $a * 0.38;
            echo floatval($Taiwan);

        }
        elseif($currency == "United Arab Emirates")
        {
            $aed = $a * 0.044;
            echo floatval($aed);

        }

    }

else
    {
    echo"please enter any number first";
    }

}


?>   
" 
name="">
        <br>
        <br>

<input type="submit" name="submit" value="check">

</div>
</form>
</body>
</html>