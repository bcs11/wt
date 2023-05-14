<html>
<body>
<form action="slip2_1.php" method="get">
<center>
<b>Select font style :</b><input type=text name=s1> <br>
<b>Enter font size : </b><input type=text name=s><br>
<b>Enter font color : </b><input type=text name=c><br>
<b>Enter background color :</b> <input type=text name=b><br>
<input type=submit value="Next">
</center>
</form>
</body>
</html>
##################################################################################################
 <?php
echo "style is ".$_GET['s1']."<br>color is ".$_GET['c']."<br>Background color is ".$_GET['b']."<br>size is ".$_GET['s'];
setcookie("set1",$_GET['s1'],time()+3600);
setcookie("set2",$_GET['c'],time()+3600);
setcookie("set3",$_GET['b'],time()+3600);
setcookie("set4",$_GET['s'],time()+3600);
?>

<html>
<body>
<form action="slip2_2.php">
<input type=submit value=OK>
</form>
</body>
</html> 

###########################################################################
<?php
$style = $_COOKIE['set1'];
$color = $_COOKIE['set2'];
$size = $_COOKIE['set4'];
$b_color = $_COOKIE['set3'];
$msg = "Welcome to IP";
echo "<body bgcolor=$b_color>";
echo "<font face=$style color=$color size=$size>$msg";
echo "</font></body>";
?>
########################################################################

Importnumpyasnp
Importpandasaspd
Fromsklearn.model_selectionimporttrain_test_split
Fromsklearn.linear_modelimportLinearRegression

Data={‘YearsExperience’:[1,2,3,4,5,6,7,8,9,10],
‘Salary’:[50000,60000,70000,80000,90000,100000,110000,120000,130000,140000]}
Df=pd.DataFrame(data)

X=df.iloc[:,0:1].values
Y=df.iloc[:,1].values

X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.3,random_state=0)

Print(“X_train:\n”,X_train)
Print(“y_train:\n”,y_train)
Print(“X_test:\n”,X_test)
Print(“y_test:\n”,y_test)

Regressor=LinearRegression()
Regressor.fit(X_train,y_train)

Print(“Coefficients:”,regressor.coef_)
Print(“Intercept:”,regressor.intercept_)
