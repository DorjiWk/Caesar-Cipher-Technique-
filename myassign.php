<?php 
// Caesar Cipher Technique using php 

// function to receive text and shift and to return the encrypted text 
function encrypt($text, $s) 
{ 
	$result = ""; 

  // traverse text 
	for ($i = 0; $i < strlen($text); $i++) 
	{ 
		 
		if (ctype_upper($text[$i])) 
			$result = $result.chr((ord($text[$i]) + 
							$s - 65) % 26 + 65); 

	// Encrypt Lowercase letters 
	else
		$result = $result.chr((ord($text[$i]) + 
						$s - 97) % 26 + 97); 
	} 

	// Return the result 
	return $result; 
} 

// Driver Code 
$text = "DORJI wangchuk"; 
$s = 3; 
echo "Text : " . $text; 
echo "\nShift: " . $s; 
echo "\nCipher: " . encrypt($text, $s); 
 
?> 
result:
Text : DORJI wangchuk
Shift: 3
Cipher: GRUMLWzdqjfkxn