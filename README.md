# test
matching patten
<?php
$csv=@$_GET['csv'];

/* ******************************************DATA END********************************************** */
$paragraphArray = preg_split('#\R+#', $paragraph);
$jsonArray = json_decode($json);
$valueFirst100 = '';
$wordCountMax7 = 1;
$finalResultString = '';
$csv_array[] = array();
foreach ($paragraphArray as $key => $value) {
    if ($wordCountMax7 <= 7) {
        if ($key == 0) {
            $valueFirst100 = str_split($value, 100);
            $value = substr($value, 100);
        }
        $paragraphWordCountMax2 = 0;
        $matchWordsArray = array();
        foreach ($jsonArray as $keyJ => $valueJ) {
            if ($paragraphWordCountMax2 < 2 && $wordCountMax7 <= 7) {
                $pattern = '/\b ' . $keyJ . '\b/i';
                if (preg_match($pattern, $value)) {
                    unset($jsonArray->$keyJ);
                    $csv_array[$wordCountMax7]=array('Para'=>($key+1),'json'=>$keyJ);                    
                    $matchWordsArray[$keyJ] = $valueJ;
                    $paragraphWordCountMax2++;
                    $wordCountMax7++;
                }
                $replacement = ' <a href="' . $valueJ . '">' . $keyJ . '</a>';
                $pregReplaceResult = preg_replace($pattern, $replacement, $value, 1);
                $value = $pregReplaceResult;
            } else {
                break;
            }
        }

        if ($key == 0) {
            $value = $valueFirst100[0] . '' . $value;
        }
        $finalArray[] = $value;
        $finalResultString .= $value . '</br></br>';

    } else {
        break;
    }
}

if($csv=="yes") {
    // Download csv
    $header = array("Para", "KeyWord");
    $fp = fopen("php://output", "w");
    fputcsv($fp, $header);
    foreach ($csv_array as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    header("Content-Type: text/csv");
    header('Content-disposition: attachment;filename=keyword.csv');
}else{
    print_r($finalResultString); // Output as     
}


