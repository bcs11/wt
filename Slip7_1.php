<?php
$dom=new DomDocument();
$dom->load("Slip7_1.xml");
echo "<b>movies title</b><br>";
$t=$dom->getElementsByTagName("title");
foreach($t as $node)
{
	print $node->textContent;
	echo "<br>";
}
echo "<b>actor name</b><br>";
$t1=$dom->getElementsByTagName("actor");
foreach($t1 as $node)
{
	print $node->textContent;
	echo "<br>";
}
?>
###########################################################################
<?xml version="1.0"?>
<movieinfo>
  <movie no="101">
  <title>Sooryavanshi</title>
  <actor>akshay kumar</actor>
  <ryear>2021</ryear>
  </movie>
<movie no="102">
  <title>Simba</title>
  <actor>Ranbir Singh</actor>
  <ryear>2020</ryear>
  </movie>
<movie no="103">
  <title>Bahubali</title>
  <actor>Prabhas</actor>
  <ryear>2018</ryear>
  </movie>
<movie no="104">
  <title>Radhe</title>
  <actor>Salman Khan</actor>
  <ryear>2020</ryear>
  </movie>
</movieinfo>

####################################################################
Importpandasaspd
Frommlxtend.preprocessingimportTransactionEncoder
Frommlxtend.frequent_patternsimportapriori,association_rules
Df=pd.read_csv(‘Market_Basket_Optimisation.csv’,header=None)

Df.dropna(inplace=True)

Te=TransactionEncoder()
Te_ary=te.fit(df.values).transform(df.values)
Df=pd.DataFrame(te_ary,columns=te.columns_)

Frequent_itemsets=apriori(df,min_support=0.01,use_colnames=True)

Rules=association_rules(frequent_itemsets,metric=”lift”,min_threshold=1)

Print(“OriginalDataset:\n”)
Print(df.head())
Print(“\nFrequentItemsets:\n”)
Print(frequent_itemsets)
Print(“\nAssociationRules:\n”)
Print(rules