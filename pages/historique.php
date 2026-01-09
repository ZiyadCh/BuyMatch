<?php 
require_once "../classes/Acheteur.php";
?>
<!DOCTYPE html>
<title>My Example</title>

<style>
/* This wrapper provides the dark background for the component to live in. */
/* On your website, this would likely be your <body> or a main container. */
.dark-mode-container {
    background-color: #1a1a1a;
    padding: 20px;
    border-radius: 8px;
}

.dark-mode-table {
    width: 100%;
    border-collapse: collapse;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: #e0e0e0; /* Main text color (light gray) */
}

.dark-mode-table thead th {
    padding: 12px 15px;
    background-color: #2c2c2c; /* Slightly lighter than the main bg for headers */
    border-bottom: 2px solid #444; /* A stronger border for the header */
    text-align: left;
    font-size: 0.9rem;
    font-weight: 600;
    color: #ffffff; /* Pure white for headers for emphasis */
}

.dark-mode-table tbody td {
    padding: 12px 15px;
    border-bottom: 1px solid #333; /* Very subtle row divider */
}

/* Zebra-striping can also work in dark mode, but here we opt for a hover effect */
.dark-mode-table tbody tr:hover {
    background-color: #252525; /* A subtle highlight on hover */
}

/* Remove border on the last row */
.dark-mode-table tbody tr:last-child td {
    border-bottom: none;
}

.dark-mode-table .code {
    font-family: 'SF Mono', 'Courier New', monospace;
    background-color: #3a3a3a;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 0.85rem;
}
.dark-mode-table .status-ok {
    color: #4caf50; /* Green */
    font-weight: bold;
}
.dark-mode-table .status-failed {
    color: #e57373; /* Red */
    font-weight: bold;
}

</style>

<!-- The dark container is for demonstration purposes. -->
<!-- You would apply the .dark-mode-table class to your table within your site's dark theme. -->
<div class='dark-mode-container'>
    <table class='dark-mode-table'>
        <thead>
            <tr>
                <th scope='col'> Match  id</th>
                <th scope='col'>categorie ticket</th>
                <th scope='col'>prix</th>
            </tr>
        </thead>
        <tbody>
            
 <?php 
 $acheteur = new acheteur($_SESSION['id'],0,0,0,0,0,0);
 $acheteur->afficherHistorique();
 ?>
        </tbody>
    </table>
</div>
