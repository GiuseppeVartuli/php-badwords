<?php 

if (isset($_GET['sentence'])){






$sentence = '';

var_dump($_GET);
var_dump($_GET['sentence']);
var_dump($_GET['word']);

$sentenceToCensor = $_GET['sentence'];
$wordToFind = $_GET['word'];

var_dump($sentenceToCensor, $wordToFind);
echo 'Original Sentence:' . $sentenceToCensor;
echo '<br>';
echo 'Original sentence lenght' . strlen($sentenceToCensor);

var_dump(str_replace($wordToFind, '***', $sentenceToCensor));

$censordSentence = str_replace($wordToFind, '***', $sentenceToCensor);
// echo '<br>';
echo $censordSentence;
// echo '<br>';
echo 'Censord Sentence:' . $sentenceToCensor;
echo '<br>';
echo 'Censord sentence lenght' . strlen($sentenceToCensor);
}
?>









