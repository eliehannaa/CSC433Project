<?php 
session_start();
if(!isset($_SESSION["name"])){
    header("location:../../index.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body style="background-color: beige">
    <a href="../../pages/portfolio.php">
        <i class="fa fa-home" style="font-size: 36px; color: darkblue"></i></a>
    <div style="text-align: center">
        <img style="border: 5px solid darkblue" src="../../images/sort.JPG" />
        <p>
            Quicksort, a popular sorting algorithm known for its efficiency, can
            also benefit from parallelization. The key idea is to partition the
            array into subarrays, each handled independently by different processing
            units. Concurrently applying the quicksort algorithm to these subarrays
            allows for parallel execution, leading to a more rapid sorting process.
            However, careful consideration must be given to load balancing and
            synchronization to optimize performance and ensure accurate sorting.
        </p>
        <a target="_blank" href="https://github.com/eliehanna2/Parallel-Programming">Link</a>
    </div>
</body>

</html>