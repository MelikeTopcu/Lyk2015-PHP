<meta charset="utf-8">
<?php
function getAllQuestions($path = ""){
    $questions=array();
    $doWeHaveData = false;

// mysql veritabanına baglan : localhost domain name yada ip adresi olabilr
$connection=mysql_connect("localhost", "root", "");

if(!$connection)
    die("MySQL sunucuna bağlanamadı");
// baglantının üstünden utf8 standartı konuşacagmızı söylüyoruz
mysql_set_charset("UTF8",$connection);

// ihtiyac duydugun veritabanından bilgi almak için
if(!mysql_select_db("quiz",$connection))

    die("veritabani secilemedi");

//belirli bir tablodaki tüm verileri çek // istenilen bilgi onda varmı ?

$questionsRS=mysql_query("SELECT * FROM  questions");

//diziye çevir // kaynagı dogru yorumlamak adına
   while($question=mysql_fetch_array($questionsRS,MYSQL_ASSOC)) {

       $questions[]=array(

           'question' => $question['question'],
           'options' => array (
           'a' => $question['option_a'],
           'b' => $question['option_b'],
           'c' => $question['option_c'],
           'd' => $question['option_d'],
     ),
        'answer' => $question['answer']
   );
   }

    if(count($questions)>0) $doWeHaveData=true;


//diziyi istenilen çıktı haline getir

    if(!$doWeHaveData) {

        $questionsDataFilePath = $path . "data/questions.txt";


        if (file_exists($questionsDataFilePath)) {

            $questionsDataFile = fopen($questionsDataFilePath, "r");
            $encodedQuestions = fread($questionsDataFile, filesize($questionsDataFilePath));
            fclose($questionsDataFile);

            if ($encodedQuestions) {
                //dizi yapıp ver
                $questions = json_decode($encodedQuestions, true);
                //die(var_dump($questions));
                $doWeHaveData = true;
            }
        }
    }

        // yoksa standart diziyi gönder
        if (!$doWeHaveData) {
            $questions = array(
                array(
                    'question' => "Cumhuriyet hangi yıl ilan edildi?",
                    'options' => array(
                        'a' => '1919',
                        'b' => '1920',
                        'c' => '1922',
                        'd' => '1923',
                    ),
                    'answer' => 'd'
                ),
            );
        }

return $questions;
}

