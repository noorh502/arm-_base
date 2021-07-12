<html>
<head>
    <link rel="stylesheet" type="text/css" href="st.css">
    <title>base control</title>
</head>

<body>
    <p class="A" style="font-size:50px;">DIRECTION CONTROL</p>
    <form action="style1.php" method="POST" name="form1">
        
            <input class="rd" type="submit" value="RIGHT" name="right">
            <input class="sd" type="submit" value="STOP" name="stop">
            <input class="fd" type="submit" value="FORWARD" name="forward">
            <input class="ld" type="submit" value="LEFT" name="left">
            <input class="bd" type="submit" value="Backward" name="Backward">

        
    </form>
   
    <p class="B" style="font-size:50px;">slidecontainer</p><br>
    <div>
        <label>montors</label>
        <hr>
        <label for"myRange">Motor1 </label>
        <input type="range" name="quantity1" min="1" max="180" value="10" class="slider" id="myRange1" />

        <hr>
        <label for"myRange">Motor2 </label>
        <input type="range" name="quantity2" min="1" max="180" value="10" class="slider" id=" myRange2" />

        <hr>
        <label for"myRange">Motor3</label>
        <input type="range" name="quantity3" min="1" max="180" value="10" class="slider" id=" myRange3" />

        <hr>
        <label for"myRange">Motor4 </label>
        <input type="range" name="quantity4" min="1" max="180" value="10" class="slider" id=" myRange4" />
        <hr>
        <label for"myRange">Motor5 </label>
        <input type="range" name="quantity5" min="1" max="180" value="10" class="slider" id="myRange5" />
        <hr>
        <label for"myRange">Motor6 </label>

        <input type="range" name="quantity6" min="1" max="180" value="10" class="slider" id="myRange6" />
        <hr>
        <input type="submit" value="sav" name="sav" style="font-size:30px;background-color:blak;border-radius:30px;">
        <input type="submit" value="ran" name="ran" style="font-size:30px;background-color:blak;border-radius:30px;">


    </div>
    
</body>