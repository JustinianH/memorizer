

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ("boot.php");

/*

	1. Create Poem Variable
	2. Hide every word except first line
	3. Hide a random number of words per line


*/

$poem = "When, in disgrace with fortune and men’s eyes,<br/>
I all alone beweep my outcast state,<br/>
And trouble deaf heaven with my bootless cries,<br/>
And look upon myself and curse my fate,<br/>
Wishing me like to one more rich in hope,<br/>
Featured like him, like him with friends possessed,<br/>
Desiring this man’s art and that man’s scope,<br/>
With what I most enjoy contented least;<br/>
Yet in these thoughts myself almost despising,<br/>
Haply I think on thee, and then my state,<br/>
(Like to the lark at break of day arising<br/>
From sullen earth) sings hymns at heaven’s gate;<br/>
For thy sweet love remembered such wealth brings<br/>
That then I scorn to change my state with kings.";

$sonnet = new poem($poem); 

$sonnet->display($poem);

$sonnet->getFirstWord($poem);				



?>








