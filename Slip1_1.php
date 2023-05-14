<html>
<body bgcolor='pink'>
<form action="Slip1_1.php" method="GET">
<br>
<input type='submit' value='OK'>
</form>
</body>
</html>
 ###########################################################################
 <?php
session_start();
if(isset($_SESSION['cnt']))
{
  $_SESSION['cnt']+=1;
}
else
{
$_SESSION['cnt']=1;
}
echo "you have visited the page".$_SESSION['cnt']."times";
echo "<a href=Slip1_1.php> click here</a>";
?>

######################################################################
 
Importnumpyasnp
Importpandasaspd
Fromsklearn.model_selectionimporttrain_test_split
Fromsklearn.linear_modelimportLinearRegression

Data={‘Position’:[‘CEO’,‘charman’,‘director’,‘SeniorManager’,‘JuniorManager’,‘Intern’],
‘Level’:[1,2,3,4,5,6],
‘Salary’:[50000,80000,110000,150000,200000,250000]}
Df=pd.DataFrame(data)

X=df.iloc[:,1:2].values
Y=df.iloc[:,2].values

X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.3,random_state=0)
Print(“X_train:\n”,X_train)
Print(“y_train:\n”,y_train)
Print(“X_test:\n”,X_test)
Print(“y_test:\n”,y_test)

Regressor=LinearRegression()
Regressor.fit(X_train,y_train)

Print(“Coefficients:”,regressor.coef_)
Print(“Intercept:”,regressor.intercept_)
