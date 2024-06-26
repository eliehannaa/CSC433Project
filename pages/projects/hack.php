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
        <img style="border: 5px solid darkblue" height="50%" src="../../images/hack.jpg" />
        <p>
            I wrote a Python script that takes a URL as its first argument and
            performs some operations on it. The script uses the requests library to
            retrieve the HTML content of the URL and then uses regular expressions
            to extract various information from it. Specifically, the script
            extracts all of the URLs contained in the HTML and writes them to a file
            called files_output.bat. Additionally, the script reads two input files
            called dirs_dictionary.bat and subdomains_dictionary.bat that contain
            lists of directories and subdomains to try, respectively. For each
            directory and subdomain, the script constructs a full URL by appending
            it to the original URL and then sends a GET request to that URL. If the
            request succeeds (i.e., returns a status code between 200 and 299), the
            script writes the URL to either directories_output.bat or
            subdomains_output.bat, depending on whether it was a directory or
            subdomain that was tried.
        </p>
        <a target="_blank" href="https://github.com/eliehanna2/website-enumerator">Link</a>
    </div>
</body>

</html>