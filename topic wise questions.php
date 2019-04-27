<!DOCTYPE html>
<html>
<head>
	<title>QUESTIONS - topic based</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/css/mdb.min.css

">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/js/mdb.min.js"></script>
  

   <link rel="stylesheet" type="text/css" href="company.css">


   <script>
function showResult(str) {
  if (str.length==0) 
  { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
   
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
   



</head>
<body>

         <div id="nav-placeholder">

</div>

<?php 
include ('nav.php');
?>





<div class = "row">
    
<div id="side">

</div>

<?php
 include ('side.php');
?>



<div class = "col-lg-9 col-md-8 col-sm-8">	

<div class="container">


<h1 style="margin-top: 3%; font-size: 350%; margin-left: 0%; margin-bottom: 0%; text-align: center;">TOPIC WISE QUESTIONS</h1>
 <hr style="margin-top: 0.5%;">

 <ul>

    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">ARRAYS</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/kth-smallestlargest-element-unsorted-array/">K’th smallest element</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/trapping-rain-water/">Trapping Rain Water</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-pythagorean-triplet-in-an-unsorted-array/">Pythagorean Triplet</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/chocolate-distribution-problem/">Chocolate Distribution Problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/stock-buy-sell/">Stock buy and sell</a></li>
   </ol>
     
    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">STRING</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/check-for-balanced-parentheses-in-an-expression/">Parenthesis Checker</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/reverse-words-in-a-given-string/">Reverse words in a given string</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-n-th-lexicographically-permutation-string-set-2/">Permutations of a given string</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/longest-palindromic-substring-set-2/">Longest Palindrome in a String</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/check-whether-two-strings-are-anagram-of-each-other/">Anagram</a></li>
   </ol>

    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">LINKED LIST</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/reverse-linked-list-groups-given-size-set-2/">Reverse a Linked List in groups of given size</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/detect-and-remove-loop-in-a-linked-list/">Remove loop in Linked List </a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/add-two-numbers-represented-by-linked-lists/">Add two numbers represented by linked lists</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/pairwise-swap-elements-of-a-given-linked-list/">Pairwise swap elements of a linked list by swapping data </a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/sort-linked-list-0s-1s-2s-changing-links/">Given a linked list of 0s, 1s and 2s, sort it.</a></li>
   </ol>
    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">TREE</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/diameter-of-a-binary-tree-in-on-a-new-method/">Diameter of Binary Tree</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/lowest-common-ancestor-in-a-binary-search-tree/">Lowest Common Ancestor in a BST </a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/level-order-traversal-in-spiral-form/">Level order traversal in spiral form </a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-maximum-path-sum-two-leaves-binary-tree/">Maximum path sum</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/convert-a-given-binary-tree-to-doubly-linked-list-set-2/">Binary Tree to DLL</a></li>
   </ol>

    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">RECURSION</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/flood-fill-algorithm-implement-fill-paint/">Flood fill Algorithm</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/count-possible-paths-top-left-bottom-right-nxm-matrix/">Number of paths</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/write-a-c-program-that-given-a-set-a-of-n-numbers-and-another-number-x-determines-whether-or-not-there-exist-two-elements-in-s-whose-sum-is-exactly-x/">Combination Sum</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-water-in-a-glass/">Water Overflow</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/josephus-problem-set-1-a-on-solution/">Josephus problem</a></li>
   </ol>
     
    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">GRAPH</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/breadth-first-traversal-for-a-graph/">BFS traversal of graph</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/greedy-algorithms-set-6-dijkstras-shortest-path-algorithm/">Implementing Dijkstra</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/minimum-cost-path-left-right-bottom-moves-allowed/">Minimum Cost Path</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/strongly-connected-components/">Strongly Connected Components (Kosaraju's Algo)</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-whether-path-two-cells-matrix/">Find whether path exists</a></li>
   </ol>

    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">DYNAMIC PROGRAMMING</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/knapsack-problem/">0 - 1 Knapsack Problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/longest-common-subsequence/">Longest Common Subsequence</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-the-longest-path-in-a-matrix-with-given-constraints/">Find the longest path in a matrix</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-11-egg-dropping-puzzle/">Egg Dropping Puzzle</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-7-coin-change/">Coin Change</a></li>
   </ol>
    
 </ul>

</div>
</div>
</div>

<div id="footer">

</div>

<?php
include ('footer.php');
?>

    
</footer>

</body>
</html>

