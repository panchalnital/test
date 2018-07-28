<?php

$csv=@$_GET['csv'];
$para="Since ancient times, a saree is considered to be the most graceful and elegant attire that accentuates a woman’s beauty and glamour like no other. As the craft of saree making evolved, it gave birth to many styles and the Banarasi saree is the undisputed the queen of all. Radiating class, sophistication, and elegance, the Banarasi saree is the hallmark of the Indian tradition of weaving. The highlight of Banarasi sarees is the lustrous and durable silk and the rich ethnic motifs woven with threads of gold, silver or zari. Owning a Banarasi saree is a dream for every woman irrespective of her ethnic or social background.

The saree was born in the holy city of Banaras in Uttar Pradesh. The craft was introduced by the Mughals during the 14th century. The migration of Gujarati silk weavers to Banaras in the 16th century led to the beginning of silk brocade weaving. With a rich cultural past, Banarasi sarees create an aura of mystique and sophistication around those who wear them. Weaved with gold and silver threads, the Banarasi saree was an attire fit for royals once. Today, it is one of the most sought-after bridal sarees. You cannot imagine a Bengali bride without a Banarasi saree. Admired for its fine finest artistry, this ancient craft is taking the international market by storm with foreigners showing a keen interest in the attire. An ideal Banarasi silk saree is made up of 5,600 thread wires and takes somewhere between 18 and 150 days to take shape. Despite the industrial revolution, the speciality of banarasi sarees lie in the handwoven designs. It is interesting to note that the Banarasi saree industry comprises 12 lakh people in all, a number that is huge for a state-owned industry. 

A research report states that the banarasi saree is exported to around 200 countries, and the demand is gradually on the rise in European and American countries. The Banarasi saree is available in four major designs in the Indian market shatter saree, georgette saree, pure silk saree and organza saree. These sarees are always in demand because of their exquisite weaves, traditional motifs and timeless appeal. Not just Indian, but women world over nurture a soft spot for these handwoven wonders. The world of e-commerce has made also contributed towards the global appeal of these sarees. Online ethnic shopping portals make the best of Banarasi sarees available to every woman in every corner of the world. 

The monsoon brings out the best in Benarasi sarees with its perfect amalgamation of colours. Monsoon themed sarees bring out the playfulness of rains and the basic necessity that is water. At Craftsvilla, we house the best collection of anarkali dress that are the very embodiment of elegance and grace. Now tradition and beauty are just a click away!";

$json='{
	"sarees":"http://www.craftsvilla.com/womens-clothing/sarees/",
	"saree":"http://www.craftsvilla.com/womens-clothing/sarees/",
	"designer saree":"http://www.craftsvilla.com/womens-clothing/sarees/designer-sarees/",
	"lehengas":"http://www.craftsvilla.com/womens-clothing/lehangas/",
	"banarasi saree":"http://www.craftsvilla.com/womens-clothing/sarees/banarasi-sarees/",
	"saree online shopping":"http://www.craftsvilla.com/womens-clothing/sarees/",
	"anarkali dress":"http://www.craftsvilla.com/womens-clothing/anarkalis/",
	"cotton sarees":"http://www.craftsvilla.com/sarees/cotton-sarees/",
	"pure silk sarees":"http://www.craftsvilla.com/womens-clothing/sarees/kanchivaram-sarees/",
	"Designer suits":"http://www.craftsvilla.com/salwar-suits/Designer-suits/",
	"silk sarees":"http://www.craftsvilla.com/sarees/silk-sarees/",
	"silks sarees":"http://www.craftsvilla.com/womens-clothing/sarees/silk-sarees/",
	"saris":"http://www.craftsvilla.com/womens-clothing/sarees/",
	"frame":"http://www.craftsvilla.com/home-decor/photo-frames/",
	"lehenga sarees":"http://www.craftsvilla.com/womens-clothing/sarees/wedding-sarees/",
	"silk saree":"http://www.craftsvilla.com/womens-clothing/sarees/silk-sarees/",
	"shirts for men":"http://www.craftsvilla.com/mens-fashion/mens-shirts/",
	"dress material":"http://www.craftsvilla.com/clothing/dress-material.html",
	"bridal lehenga":"http://www.craftsvilla.com/womens-clothing/lehangas/",
	"sari":"http://www.craftsvilla.com/womens-clothing/sarees/designer-sarees/",
	"party wear dresses":"http://www.craftsvilla.com/womens-clothing/gowns/",
	"salwar suits":"http://www.craftsvilla.com/womens-clothing/salwar-suits/",
	"gown":"http://www.craftsvilla.com/womens-clothing/gowns/",
	"punjabi suit":"http://www.craftsvilla.com/cvfeeds/punjabi-suits",
	"furniture online":"http://www.craftsvilla.com/home-furnishing/furniture/",
	"lehenga saree":"http://www.craftsvilla.com/womens-clothing/sarees/wedding-sarees/",
	"salwar suit":"http://www.craftsvilla.com/womens-clothing/salwar-suits/",
	"dresses material":"http://www.craftsvilla.com/clothing/dress-material.html",
	"dresses materials":"http://www.craftsvilla.com/clothing/dress-material.html",
	"georgette sarees":"http://www.craftsvilla.com/sarees/georgette-sarees/",
	"home decoratives":"http://www.craftsvilla.com/home-decor/decoratives/",
	"blouses neck design":"http://www.craftsvilla.com/womens-clothing/blouses/",
	"blouses patterns":"http://www.craftsvilla.com/womens-clothing/blouses/",
	"blouses pattern":"http://www.craftsvilla.com/womens-clothing/blouses/",
	"home decorations":"http://www.craftsvilla.com/home-decor/",
	"shirt for men":"http://www.craftsvilla.com/mens-fashion/mens-shirts/",
	"anarkalis":"http://www.craftsvilla.com/womens-clothing/anarkalis/",
	"jewelry online":"http://www.craftsvilla.com/jewellery/",
	"home decors":"http://www.craftsvilla.com/home-decor/",
	"designer dress":"http://www.craftsvilla.com/womens-clothing/",
	"saree designing":"http://www.craftsvilla.com/womens-clothing/sarees/designer-sarees/",
	"homedecor":"http://www.craftsvilla.com/home-decor/",
	"shopping sites":"http://www.craftsvilla.com/",
	"dress materials":"http://www.craftsvilla.com/clothing/dress-material.html",
	"designer dresses":"http://www.craftsvilla.com/womens-clothing/",
	"palazzo pants":"http://www.craftsvilla.com/womens-clothing/palazzos/",
	"shopping online":"http://www.craftsvilla.com/womens-clothing/sarees/",
	"punjabi suits":"http://www.craftsvilla.com/cvfeeds/punjabi-suits",
	"ethnic wear":"http://www.craftsvilla.com/"
}';

$paraArray=preg_split("#\R+#", $para);
$jsonArray=json_decode($json);

//echo "<pre>";
//print_r($paraArray);
//print_r($jsonArray);

$frist100='';
$wordCountMax7=1;
$results='';
$csv_array[]=array();

foreach ($paraArray as $key => $value) {
	# code...
	if($wordCountMax7<=7){
		if($key==0){
			$frist100=str_split($value,100);
			$value=substr($value, 100);
			//echo "<pre>";
		//print_r($value);
		}
		$paraWordCountMax2=0;
		$matchWordsArray=array();
		foreach ($jsonArray as $keyJ => $valueJ) {
			# code...
			if ($paraWordCountMax2 < 2 && $wordCountMax7<=7) {

				# code...
				$pattern='/\b'.$keyJ.'\b/i';
				if (preg_match($pattern, $value)) {
					# code...
					unset($jsonArray->$keyJ);
					$csv_array[$wordCountMax7]=array('para'=>($key+1),'json'=>$keyJ);
					$matchWordsArray[$keyJ]=$valueJ;
					$paraWordCountMax2++;
					$wordCountMax7++;



				}
				$replacement='<a href="'.$valueJ.'">'.$keyJ.'</a>';
				$pregReplaceReult=preg_replace($pattern, $replacement, $value,1);
				$value=$pregReplaceReult;
			}else{
				break;
			}
		}
		if($key==0){
			$value=$frist100[0].''.$value;
		}
		$frist100array[]=$value;
		$results.=$value.'</br></br>';
		
	}else{

	}

}
print_r($results);

?>