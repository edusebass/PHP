/*                 PHP
PHP is often used to build dynamic web pages. 
A dynamic web page is one where each visitor to the website gets a customized page that can look different than how the site looks to another visitor. 
This is in contrast to static web pages which provide the same content to each visitor.
*/
/*
n order to create this dynamic behavior, PHP was designed to work closely with HTML. 
PHP can be used directly in-line with an HTML document. 
When the web site is delivered from the back-end to the front-end, the PHP content is executed and added to the HTML to form one HTML document. 
The start of in-line PHP is denoted with <?php and the end is denoted with ?>.
*/
//example

<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";?>

/*
So when the code above is executed, it outputs the text into the HTML file and the front-end will receive the following HTML document:
*/
