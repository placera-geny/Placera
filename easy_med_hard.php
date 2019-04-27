<!DOCTYPE html>
<html>
<head>
	<title>QUESTIONS - Difficulty wise</title>
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


<h1 style="margin-top: 3%; font-size: 320%; margin-left: 0%; margin-bottom: 0%; text-align: center;">QUESTIONS BASED ON DIFFICULTY LEVEL</h1>
 <hr style="margin-top: 0.5%;">

 <ul>

    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">EASY</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/largest-sum-contiguous-subarray/">Largest Sum Contiguous Subarray</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-the-missing-number/">Find the Missing Number</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-subarray-with-given-sum/">Find subarray with given sum</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/sort-an-array-of-0s-1s-and-2s/">Sort an array of 0s, 1s and 2s</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/equilibrium-index-of-an-array/">Equilibrium index of an array</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-14-maximum-sum-increasing-subsequence/">Maximum Sum Increasing Subsequence</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/leaders-in-an-array/">Leaders in an array</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/reverse-an-array-in-groups-of-given-size/">Reverse an array in groups of given size</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/check-for-balanced-parentheses-in-an-expression/">Check for balanced parentheses in an expression</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/write-your-own-atoi/">Write your own atoi()</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/write-a-c-program-to-get-count-of-leaf-nodes-in-a-binary-tree/">To count leaf nodes in a binary tree</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/flood-fill-algorithm-implement-fill-paint/">Flood fill Algorithm</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-16-floyd-warshall-algorithm/">Floyd Warshall Algorithm</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/quick-sort/">Quick Sort</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/a-program-to-check-if-a-binary-tree-is-bst-or-not/">To check if a binary tree is BST or not</a></li>
   </ol>
    <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">MEDIUM</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/minimum-number-platforms-required-railwaybus-station/">Minimum Number of Platforms Required for a Railway/Bus Station</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/sliding-window-maximum-maximum-of-all-subarrays-of-size-k/">Maximum of all subarrays of size k</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/serialize-deserialize-binary-tree/">Serialize and Deserialize a Binary Tree</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/josephus-problem-set-1-a-on-solution/">Josephus problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/greedy-algorithms-set-6-dijkstras-shortest-path-algorithm/">Dijkstra’s shortest path algorithm</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/knapsack-problem/">0-1 Knapsack Problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/backtracking-set-3-n-queen-problem/">N Queen Problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/backtracking-set-7-suduku/">Sudoku</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/backttracking-set-2-rat-in-a-maze/">Rat in a Maze</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/reverse-linked-list-groups-given-size-set-2/">Reverse a Linked List in groups of given size</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/flattening-a-linked-list/">Flattening a Linked List</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/sum-of-two-linked-lists/">Add two numbers represented by linked lists </a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/topological-sorting/">Topological Sorting</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-number-of-islands/">Find the number of islands</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-7-coin-change/">Coin Change</a></li>
   </ol>
       <li style="font-size: 200%; font-weight: bold; margin-left: 2%;  margin-bottom: 0.5%;">HARD</li>
    <ol>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/find-water-in-a-glass/">To find amount of water in a given glass</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-11-egg-dropping-puzzle/">Egg Dropping Puzzle</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/boggle-set-2-using-trie/">Word Boggle</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/minimum-cost-path-left-right-bottom-moves-allowed/">Minimum Cost Path with Left, Right, Bottom and Up moves allowed</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/dynamic-programming-set-31-optimal-strategy-for-a-game/">Optimal Strategy for a Game</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/snake-ladder-problem-2/">Snake and Ladder Problem</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/given-sorted-dictionary-find-precedence-characters/">Given a sorted dictionary of an alien language, find order of characters</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/partition-a-set-into-two-subsets-such-that-the-difference-of-subset-sums-is-minimum/">Partition a set into two subsets such that the difference of subset sums is minimum</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/number-subarrays-product-less-k/">Number of subarrays having product less than K</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/shortest-common-supersequence/">Shortest Common Supersequence</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/count-total-set-bits-in-all-numbers-from-1-to-n/">Count total set bits in all numbers from 1 to n</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/allocate-minimum-number-pages/">Allocate minimum number of pages</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/place-k-elements-such-that-minimum-distance-is-maximized/">Place k elements such that minimum distance is maximized</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/k-maximum-sum-overlapping-contiguous-sub-arrays/">K maximum sums of overlapping contiguous sub-arrays</a></li>
      <li style="font-size: 130%;"><a href="https://www.geeksforgeeks.org/check-possible-transform-one-string-another/">Check if it is possible to transform one string to another</a></li>
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

