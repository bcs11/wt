<html>
<body>
<form method="POST" action="Slip3_1.php">

Enter UserName:
<input type="text" name="txt1" id="txt1">
<br>
Enter Password:<input type="text" name="txt2" id="txt2">
<br>

<input type="submit" value="login"">

</form>
</body>
</html>

#########################################################################
  <?php
session_start();

if(!isset($_SESSION['count']))
$_SESSION['count']=0;
$username=$_POST['txt1'];
$password=$_POST['txt2'];

			if($username==""&&$password=="")
			  {
					echo"Enter All Details";
			}

			if($username=="ty"&&$password=="123456")
			{
					echo"login Successfull";
					$_SESSION['count']=0;
			}
                        else 
    		{     
                         $_SESSION['count']=$_SESSION['count']+1;
                      
			if($_SESSION['count']>2)
			{
			echo ("You Exceeded the Limit...ie,3");
			$_SESSION['count']=0;
 			
			}
			else
			{
		echo"Login Failed ... Wrong Details Entered... attempts made:". $_SESSION['count'];
			include('a.html');
			}
		}
?>

###########################################################################
Import pandas as pd
Data={‘UserID’:[1,2,3,4,5,6,7,8,9,10],
‘Gender’:[‘Male’,‘Male’,‘Female’,‘Female’,‘Male’,‘Male’,‘Female’,‘Female’,‘Male’,‘Female’],
‘Age’:[19,35,26,27,19,27,32,25,33,45],
‘EstimatedSalary’:[19000,20000,43000,57000,76000,58000,82000,32000,69000,
65000],
‘Purchased’:[0,0,0,1,1,0,1,0,1,1]}
Df=pd.DataFrame(data)
Fromsklearn.model_selectionimporttrain_test_split
X=df.iloc[:,1:4].values
Y=df.iloc[:,4].values
X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.3,random_state=0)
Fromsklearn.linear_modelimportLogisticRegression
Lr=LogisticRegression(random_state=0)
Lr.fit(X_train,y_train)

Observation=[[0,30,87000]]
Prediction=Lr.predict(observation)
Print(prediction)

Observations=[[0,30,87000],[1,50,45000],[1,22,30000]]
Predictions=Lr.predict(observations)
Print(predictions)