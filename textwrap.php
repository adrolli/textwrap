<?php

$defaultWrapAfter = 15;
$defaultPlaceholderText = "Enter some long text and I wrap it for you.";

function textwrap($givenText, $length) {
    if(strlen($givenText) < $length) {
      return $givenText;
    }

    $position = 0;

    while($position + $length - 1 < strlen($givenText)) {

        $leftPart = substr($givenText, 0, $position + $length - 1);
        $rightPart = substr($givenText, $position + $length - 1);
        $emptySpacePosition = strpos($rightPart, " ");

        if($emptySpacePosition > 0) {
            $rightPart = preg_replace('/\s+/', "\n", $rightPart, 1);
        }

        $givenText = $leftPart . $rightPart;
        $position = $position + $length + $emptySpacePosition;
    }

    return htmlentities($givenText);
}

if ( !isset( $_SERVER['REQUEST_METHOD'] ) ) {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

if(empty($_GET['wrapTextAfter'])){
    $wrapTextAfter = $defaultWrapAfter;
} else {
    $wrapTextAfter = $_GET['wrapTextAfter'];
}
  
if(empty($_GET['givenText'])){
    $givenText = $defaultPlaceholderText;
} else {  
    $givenText = $_GET['givenText'];
}

// $wrappedText = wordwrap($givenText, $wrapTextAfter);
$wrappedText = textwrap($givenText, $wrapTextAfter);

if ( !isset( $_SERVER['REQUEST_METHOD'] ) ) {
    echo $wrappedText;
}