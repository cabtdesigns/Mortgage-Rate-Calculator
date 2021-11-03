# Mortgage Rate Calculator

<p>
This client receives an excel file daily with new rates. 
They wanted to be able to use those rates on their website to calculate a users mortgage rate when the user inputs some basic information
The client was not extremely technical so I had to make it easy for them to update the rate tables. I used <a href="https://github.com/markcell/jquery-tabledit">jQuery-Tabledit v1.2.3</a>
to allow them to edit tables directly.
This was later made to work on thier WordPress website as a plug in. I have striped it out to work as a stand alone app. Results are displayed to the right of the calculator on a desktop, and above the calculator on mobile.
<a href="http://165.232.129.211/mmlt/calculator/index.php">Working example</a> can be seen <a href="http://165.232.129.211/mmlt/calculator/index.php">HERE</a>
</p>

## Technology

<ul>
<li>php</li>
<li>MySQL</li>
<li>JavaScript</li>
<li><a href="https://github.com/markcell/jquery-tabledit">jQuery-Tabledit v1.2.3</a></li>
<li>css</li>
<li>HTML</li>
</ul>

## Installation

<p>To install on your system download files and then upload them to your server. 
You will need to create a database with 2 tables in it and connect the files to your database. 
I used MySQL as a database.
</p><p>The headers for the Home Ready 30 Year tables are</p>
<ul>
<li>id</li>
<li>rate</li>
<li>fifteenday</li>
</ul>
<p>The LVT Table uses</p>
<ul>
<li>id</li>
<li>fico</li>
<li>group1</li>
<li>group2</li>
<li>group3</li>
<li>group4</li>
<li>group5</li>
<li>group6</li>
<li>group7</li>
<li>group8</li>
<li>group9</li>
</ul>

## Credits
Celso Marques - <a href="https://github.com/markcell/jquery-tabledit">markcell jQuery-Tabledit v1.2.3</a> 



