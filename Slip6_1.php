<?php
$xml=simplexml_load_file('Slip6_1.xml') or die("can not load");
echo"BOOK DETAILS<br>";
echo"<table border='1'>";
echo"<tr><th>bid</th><th>bname</th><th>author</th><th>publication</th><th>price</th></tr>";
foreach($xml->Book as $a)
{
echo "<tr>";
echo"<td>".$a['bid']."</td>";
echo "<td>".$a->bname."</td>";
echo "<td>".$a->author."</td>";
echo "<td>".$a->publication."</td>";
echo"<td>".$a->price."</td></tr>";
}
echo"</table>";
?>

###########################################################################
<?xml version="1.0" ?>

<bookinfo>
<Book bid="b001">

<bname>java</bname>
<author> abc </author>
<publication>Vision</publication>
<price>123</price>
</Book>

<Book bid="b002">

<bname>PHP</bname>
<author> pqr </author>
<publication>Techmax</publication>
<price>250</price>
</Book>

<Book bid="b001">

<bname>OS</bname>
<author> qqq </author>
<publication>Nirali</publication>
<price>127</price>
</Book>
</bookinfo>

###########################################################################

Importpandasaspd
Frommlxtend.preprocessingimportTransactionEncoder
Frommlxtend.frequent_patternsimportapriori,association_rules

TID=
{1:[“bread”,”milk”],2:[“bread”,”diaper”,”beer”,”eggs”],3:[“milk”,”diaper”,”beer”,”coke”],4:[“bread”,”mil
k”,”diaper”,”beer”],5:[“bread”,”milk”,”diaper”,”coke”]}
Transactions=[]
Forkey,valueinTID.items():
Transactions.append(value)
Te=TransactionEncoder()
Te_ary=te.fit_transform(transactions)
Df=pd.DataFrame(te_ary,columns=te.columns_)

Min_sup_values=[0.2,0.4,0.6]
Formin_supinmin_sup_values:
Frequent_itemsets=apriori(df,min_support=min_sup,use_colnames=True)
Rules=association_rules(frequent_itemsets,metric=”confidence”,min_threshold=0.7)
Print(“Min_sup:”,min_sup)
Print(“FrequentItemsets:”)
Print(frequent_itemsets)
Print(“AssociationRules:”)
Print(rules)
