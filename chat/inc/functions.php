<?
function getStr($source,$start,$end){
	$str = explode($start,$source);
	if($end != NULL){		
		$str = explode($end,$str[1]);
		return $str[0];
	}else
		return $str[1];
}

function pre($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function print_cp_mess($url = '',$mess = '',$time = 1,$exit = false){
	if($mess)	echo '<center>'.$mess.'</center>';
	if($url)	echo '<script>setTimeout("window.location=\''.$url.'\';",'.$time.'000);</script>';
	if($exit)	exit;	
}
function emo_array() {
	return array(
	':)' =>1,':(' =>2,';)' =>3,':D' =>4,';;)' =>5,'>:D<' =>6,':-/' =>7,':x' =>8,':">' =>9,':P' =>10,':-*' =>11,'=((' =>12,':-O' =>13,'X(' =>14,':>' =>15,':->' =>15,'B-)' =>16,':-S' =>17,'#:-S' =>18,'>:)' =>19,':((' =>20,':))' =>21,':|' =>22,'/:)' =>23,'=))' =>24,'O:-)' =>25,':-B' =>26,'=;' =>27,':-c' =>101,':)]' =>100,'~X(' =>102,':-h' =>103,':-t' =>104,'8->' =>105,'I-)' =>28,'8-|' =>29,'L-)' =>30,':-&' =>31,':-$' =>32,'[-(' =>33,':O)' =>34,'8-}' =>35,'<:-P' =>36,'(:|' =>37,'=P~' =>38,':-?' =>39,'#-o' =>40,'=D>' =>41,':-SS' =>42,'@-)' =>43,':^o' =>44,':-w' =>45,':-<' =>46,'>:P' =>47,'>):)' =>48,'X_X' =>109,':!!' =>110,'\m/' =>111,':-q' =>112,':-bd' =>113,'^#(^' =>114,':bz' =>115,':o3' =>108,':-??' =>106,'%-(' =>107,':@)' =>49,':(|)' =>51,'~:>' =>52,'@};-' =>53,'8-X' =>59,':-L' =>62,'[-O<' =>63,'$-)' =>64,':-"' =>65,'b-(' =>66,':)>-' =>67,'[-X' =>68,'\:D/' =>69,'>:/' =>70,';))' =>71,':-@' =>76,'^:)^' =>77,':-j' =>78,'(*)' =>79, 'x_x' => 109, '\m/' => 111,
	':01:' => 'whitesmile/1.gif',':02:' => 'whitesmile/2.gif',':03:' => 'whitesmile/3.gif',':04:' => 'whitesmile/4.gif',':05:' => 'whitesmile/5.gif',':06:' => 'whitesmile/8.gif',':07:' => 'whitesmile/9.gif',':08:' => 'whitesmile/11.gif',':09:' => 'whitesmile/12.gif',':010:' => 'whitesmile/13.gif',':011:' => 'whitesmile/14.gif',':012:' => 'whitesmile/15.gif',':013:' => 'whitesmile/16.gif',':014:' => 'whitesmile/17.gif',':015:' => 'whitesmile/18.gif',':016:' => 'whitesmile/19.gif',':017:' => 'whitesmile/20.gif',':018:' => 'whitesmile/22.gif',':019:' => 'whitesmile/23.gif',':020:' => 'whitesmile/24.gif',':021:' => 'whitesmile/25.gif',':022:' => 'whitesmile/26.gif',':023:' => 'whitesmile/28.gif',':024:' => 'whitesmile/29.gif',':025:' => 'whitesmile/30.gif',':026:' => 'whitesmile/32.gif',':027:' => 'whitesmile/33.gif',':028:' => 'whitesmile/34.gif',':029:' => 'whitesmile/35.gif',':030:' => 'whitesmile/36.gif',':031:' => 'whitesmile/37.gif',':032:' => 'whitesmile/39.gif',':033:' => 'whitesmile/40.gif',':034:' => 'whitesmile/41.gif',':035:' => 'whitesmile/42.gif',':036:' => 'whitesmile/43.gif',':037:' => 'whitesmile/44.gif',':038:' => 'whitesmile/45.gif',':039:' => 'whitesmile/47.gif',':040:' => 'whitesmile/48.gif',':041:' => 'whitesmile/49.gif',':042:' => 'whitesmile/51.gif',':043:' => 'whitesmile/53.gif',':044:' => 'whitesmile/54.gif',':045:' => 'whitesmile/55.gif',':046:' => 'whitesmile/56.gif',':047:' => 'whitesmile/57.gif',':048:' => 'whitesmile/58.gif',':049:' => 'whitesmile/59.gif',':050:' => 'whitesmile/60.gif',':051:' => 'whitesmile/61.gif',':052:' => 'whitesmile/62.gif',':053:' => 'whitesmile/63.gif',':054:' => 'whitesmile/64.gif',':055:' => 'whitesmile/65.gif',':056:' => 'whitesmile/66.gif',':057:' => 'whitesmile/67.gif',':058:' => 'whitesmile/68.gif',':059:' => 'whitesmile/69.gif',':060:' => 'whitesmile/70.gif',':061:' => 'whitesmile/71.gif',':062:' => 'whitesmile/72.gif',':063:' => 'whitesmile/73.gif',':064:' => 'whitesmile/74.gif',':065:' => 'whitesmile/75.gif',':066:' => 'whitesmile/76.gif',':067:' => 'whitesmile/77.gif',':068:' => 'whitesmile/78.gif',':069:' => 'whitesmile/79.gif',':070:' => 'whitesmile/80.gif',':071:' => 'whitesmile/81.gif',':072:' => 'whitesmile/82.gif',':073:' => 'whitesmile/83.gif',':074:' => 'whitesmile/84.gif',':075:' => 'whitesmile/85.gif',':076:' => 'whitesmile/86.gif',':077:' => 'whitesmile/87.gif',':078:' => 'whitesmile/88.gif',':079:' => 'whitesmile/89.gif',':080:' => 'whitesmile/90.gif',':081:' => 'whitesmile/91.gif',':082:' => 'whitesmile/92.gif',':083:' => 'whitesmile/93.gif',':084:' => 'whitesmile/94.gif',':085:' => 'whitesmile/95.gif',':086:' => 'whitesmile/96.gif',':087:' => 'whitesmile/97.gif',':088:' => 'whitesmile/98.gif',':089:' => 'whitesmile/99.gif',':090:' => 'whitesmile/100.gif',':091:' => 'whitesmile/101.gif',':092:' => 'whitesmile/102.gif',':093:' => 'whitesmile/103.gif',':094:' => 'whitesmile/104.gif',':095:' => 'whitesmile/105.gif','laluot01' => 'laluot/01.gif','laluot02' => 'laluot/02.gif','laluot03' => 'laluot/03.gif','laluot04' => 'laluot/04.gif','laluot05' => 'laluot/05.gif','laluot06' => 'laluot/06.gif','laluot07' => 'laluot/07.gif','laluot08' => 'laluot/08.gif','laluot09' => 'laluot/09.gif','laluot10' => 'laluot/10.gif','laluot11' => 'laluot/11.gif','laluot12' => 'laluot/12.gif','laluot13' => 'laluot/13.gif','laluot14' => 'laluot/14.gif','laluot15' => 'laluot/15.gif','laluot16' => 'laluot/16.gif','laluot17' => 'laluot/17.gif','laluot18' => 'laluot/18.gif','laluot19' => 'laluot/19.gif','laluot20' => 'laluot/20.gif','laluot21' => 'laluot/21.gif','laluot22' => 'laluot/22.gif','laluot23' => 'laluot/23.gif','laluot24' => 'laluot/24.gif','laluot25' => 'laluot/25.gif','laluot26' => 'laluot/26.gif','laluot27' => 'laluot/27.gif','laluot28' => 'laluot/28.gif','laluot29' => 'laluot/29.gif','laluot30' => 'laluot/30.gif','laluot31' => 'laluot/31.gif','laluot32' => 'laluot/32.gif','laluot33' => 'laluot/33.gif','laluot34' => 'laluot/34.gif','laluot35' => 'laluot/35.gif','laluot36' => 'laluot/36.gif','laluot37' => 'laluot/37.gif','laluot38' => 'laluot/38.gif','laluot39' => 'laluot/39.gif','laluot40' => 'laluot/40.gif','laluot41' => 'laluot/41.gif','laluot42' => 'laluot/42.gif','laluot43' => 'laluot/43.gif','laluot44' => 'laluot/44.gif','laluot45' => 'laluot/45.gif','laluot46' => 'laluot/46.gif','laluot47' => 'laluot/47.gif','laluot48' => 'laluot/48.gif','laluot49' => 'laluot/49.gif','laluot50' => 'laluot/50.gif','laluot51' => 'laluot/51.gif','laluot52' => 'laluot/52.gif','laluot53' => 'laluot/53.gif','laluot54' => 'laluot/54.gif','laluot55' => 'laluot/55.gif','laluot56' => 'laluot/56.gif','laluot57' => 'laluot/57.gif','laluot58' => 'laluot/58.gif','laluot59' => 'laluot/59.gif','laluot60' => 'laluot/60.gif','laluot61' => 'laluot/61.gif','laluot62' => 'laluot/62.gif','laluot63' => 'laluot/63.gif','laluot64' => 'laluot/64.gif','laluot65' => 'laluot/65.gif','laluot66' => 'laluot/66.gif','laluot67' => 'laluot/67.gif','laluot68' => 'laluot/68.gif','laluot69' => 'laluot/69.gif','laluot70' => 'laluot/70.gif','laluot71' => 'laluot/71.gif','laluot72' => 'laluot/72.gif','laluot73' => 'laluot/73.gif','laluot74' => 'laluot/74.gif','laluot75' => 'laluot/75.gif','laluot76' => 'laluot/76.gif','laluot77' => 'laluot/77.gif','laluot78' => 'laluot/78.gif','khi1' => 'khi/khi1.gif','khi2' => 'khi/khi2.gif','khi3' => 'khi/khi3.gif','khi4' => 'khi/khi4.gif','khi5' => 'khi/khi5.gif','khi6' => 'khi/khi6.gif','khi7' => 'khi/khi7.gif','khi8' => 'khi/khi8.gif','khi9' => 'khi/khi9.gif','khi10' => 'khi/khi10.gif','khi11' => 'khi/khi11.gif','khi12' => 'khi/khi12.gif','khi13' => 'khi/khi13.gif','khi14' => 'khi/khi14.gif','khi15' => 'khi/khi15.gif','khi16' => 'khi/khi16.gif','khi17' => 'khi/khi17.gif','khi18' => 'khi/khi18.gif','khi19' => 'khi/khi19.gif','khi20' => 'khi/khi20.gif','khi21' => 'khi/khi21.gif','khi22' => 'khi/khi22.gif','khi23' => 'khi/khi23.gif','khi24' => 'khi/khi24.gif','khi25' => 'khi/khi25.gif','khi26' => 'khi/khi26.gif','khi27' => 'khi/khi27.gif','khi28' => 'khi/khi28.gif','khi29' => 'khi/khi29.gif','khi30' => 'khi/khi30.gif','khi31' => 'khi/khi31.gif','khi32' => 'khi/khi32.gif','khi33' => 'khi/khi33.gif','khi34' => 'khi/khi34.gif','khi35' => 'khi/khi35.gif','khi36' => 'khi/khi36.gif','khi37' => 'khi/khi37.gif','khi38' => 'khi/khi38.gif','khi39' => 'khi/khi39.gif','khi40' => 'khi/khi40.gif','khi41' => 'khi/khi41.gif','khi42' => 'khi/khi42.gif','khi43' => 'khi/khi43.gif','khi44' => 'khi/khi44.gif','khi45' => 'khi/khi45.gif','khi46' => 'khi/khi46.gif','khi47' => 'khi/khi47.gif','khi48' => 'khi/khi48.gif','khi49' => 'khi/khi49.gif','khi50' => 'khi/khi50.gif','khi51' => 'khi/khi51.gif','khi52' => 'khi/khi52.gif','khi53' => 'khi/khi53.gif','khi54' => 'khi/khi54.gif','khi55' => 'khi/khi55.gif','khi56' => 'khi/khi56.gif','khi57' => 'khi/khi57.gif','khi58' => 'khi/khi58.gif','khi59' => 'khi/khi59.gif','khi60' => 'khi/khi60.gif','khi61' => 'khi/khi61.gif','khi62' => 'khi/khi62.gif','khi63' => 'khi/khi63.gif','khi64' => 'khi/khi64.gif','khi65' => 'khi/khi65.gif','khi66' => 'khi/khi66.gif','khi67' => 'khi/khi67.gif','khi68' => 'khi/khi68.gif','khi69' => 'khi/khi69.gif','khi70' => 'khi/khi70.gif','khi71' => 'khi/khi71.gif','khi72' => 'khi/khi72.gif','khi73' => 'khi/khi73.gif','khi74' => 'khi/khi74.gif','khi75' => 'khi/khi75.gif','khi76' => 'khi/khi76.gif','khi77' => 'khi/khi77.gif','khi78' => 'khi/khi78.gif','khi79' => 'khi/khi79.gif','khi80' => 'khi/khi80.gif','khi81' => 'khi/khi81.gif','khi82' => 'khi/khi82.gif','khi83' => 'khi/khi83.gif','khi84' => 'khi/khi84.gif','khi85' => 'khi/khi85.gif','khi86' => 'khi/khi86.gif','khi87' => 'khi/khi87.gif','khi88' => 'khi/khi88.gif','khi89' => 'khi/khi89.gif','khi90' => 'khi/khi90.gif','khi91' => 'khi/khi91.gif','khi92' => 'khi/khi92.gif','khi93' => 'khi/khi93.gif','khi94' => 'khi/khi94.gif','khi95' => 'khi/khi95.gif','khi96' => 'khi/khi96.gif','khi97' => 'khi/khi97.gif','khi98' => 'khi/khi98.gif','khi99' => 'khi/khi99.gif','khi100' => 'khi/khi100.gif','khi101' => 'khi/khi101.gif','khi102' => 'khi/khi102.gif','khi103' => 'khi/khi103.gif','khi104' => 'khi/khi104.gif','khi105' => 'khi/khi105.gif','khi106' => 'khi/khi106.gif','khi107' => 'khi/khi107.gif','khi108' => 'khi/khi108.gif','khi109' => 'khi/khi109.gif','khi110' => 'khi/khi110.gif','khi111' => 'khi/khi111.gif','khi112' => 'khi/khi112.gif','khi113' => 'khi/khi113.gif','khi114' => 'khi/khi114.gif','khi115' => 'khi/khi115.gif','khi116' => 'khi/khi116.gif','khi117' => 'khi/khi117.gif','khi118' => 'khi/khi118.gif','khi119' => 'khi/khi119.gif','khi120' => 'khi/khi120.gif','khi121' => 'khi/khi121.gif','khi122' => 'khi/khi122.gif','khi123' => 'khi/khi123.gif','khi124' => 'khi/khi124.gif','khi125' => 'khi/khi125.gif','khi126' => 'khi/khi126.gif','khi127' => 'khi/khi127.gif','khi128' => 'khi/khi128.gif','khi129' => 'khi/khi129.gif','khi130' => 'khi/khi130.gif','khi131' => 'khi/khi131.gif','khi132' => 'khi/khi132.gif','khi133' => 'khi/khi133.gif','khi134' => 'khi/khi134.gif','khi135' => 'khi/khi135.gif','khi136' => 'khi/khi136.gif','khi137' => 'khi/khi137.gif','khi138' => 'khi/khi138.gif','khi139' => 'khi/khi139.gif','khi140' => 'khi/khi140.gif','khi141' => 'khi/khi141.gif','khi142' => 'khi/khi142.gif','khi143' => 'khi/khi143.gif','khi144' => 'khi/khi144.gif','khi145' => 'khi/khi145.gif','khi146' => 'khi/khi146.gif','khi147' => 'khi/khi147.gif','khi148' => 'khi/khi148.gif','khi149' => 'khi/khi149.gif','khi150' => 'khi/khi150.gif','khi151' => 'khi/khi151.gif','khi152' => 'khi/khi152.gif','khi153' => 'khi/khi153.gif','khi154' => 'khi/khi154.gif','khi155' => 'khi/khi155.gif','khi156' => 'khi/khi156.gif','khi157' => 'khi/khi157.gif','khi158' => 'khi/khi158.gif','khi159' => 'khi/khi159.gif','khi160' => 'khi/khi160.gif','khi161' => 'khi/khi161.gif','khi162' => 'khi/khi162.gif','khi163' => 'khi/khi163.gif','khi164' => 'khi/khi164.gif','khi165' => 'khi/khi165.gif','khi166' => 'khi/khi166.gif','khi167' => 'khi/khi167.gif','khi168' => 'khi/khi168.gif','khi169' => 'khi/khi169.gif','khi170' => 'khi/khi170.gif','khi171' => 'khi/khi171.gif','khi172' => 'khi/khi172.gif','khi173' => 'khi/khi173.gif','khi174' => 'khi/khi174.gif','khi175' => 'khi/khi175.gif','khi176' => 'khi/khi176.gif','khi177' => 'khi/khi177.gif','khi178' => 'khi/khi178.gif','khi179' => 'khi/khi179.gif','khi180' => 'khi/khi180.gif','khi181' => 'khi/khi181.gif','khi182' => 'khi/khi182.gif','khi183' => 'khi/khi183.gif','khi184' => 'khi/khi184.gif','khi185' => 'khi/khi185.gif','khi186' => 'khi/khi186.gif','khi187' => 'khi/khi187.gif','khi188' => 'khi/khi188.gif','khi189' => 'khi/khi189.gif','khi190' => 'khi/khi190.gif','khi191' => 'khi/khi191.gif','khi192' => 'khi/khi192.gif','khi193' => 'khi/khi193.gif','khi194' => 'khi/khi194.gif','khi195' => 'khi/khi195.gif','khi196' => 'khi/khi196.gif','khi197' => 'khi/khi197.gif','khi198' => 'khi/khi198.gif','khi199' => 'khi/khi199.gif','khi200' => 'khi/khi200.gif','khi201' => 'khi/khi201.gif','khi202' => 'khi/khi202.gif','khi203' => 'khi/khi203.gif',':)' => 'emoticons7/1.gif',':(' => 'emoticons7/2.gif',';)' => 'emoticons7/3.gif',':D' => 'emoticons7/4.gif',';;)' => 'emoticons7/5.gif','>:D<' => 'emoticons7/6.gif',':-/' => 'emoticons7/7.gif',':x' => 'emoticons7/8.gif',':">' => 'emoticons7/9.gif',':P' => 'emoticons7/10.gif',':-*' => 'emoticons7/11.gif','=((' => 'emoticons7/12.gif',':-O' => 'emoticons7/13.gif','X(' => 'emoticons7/14.gif',':>' => 'emoticons7/15.gif',':->' => 'emoticons7/15.gif','B-)' => 'emoticons7/16.gif',':-S' => 'emoticons7/17.gif','#:-S' => 'emoticons7/18.gif','>:)' => 'emoticons7/19.gif',':((' => 'emoticons7/20.gif',':))' => 'emoticons7/21.gif',':|' => 'emoticons7/22.gif','/:)' => 'emoticons7/23.gif','=))' => 'emoticons7/24.gif','O:-)' => 'emoticons7/25.gif',':-B' => 'emoticons7/26.gif','=;' => 'emoticons7/27.gif',':-c' => 'emoticons7/101.gif',':)]' => 'emoticons7/100.gif','~X(' => 'emoticons7/102.gif',':-h' => 'emoticons7/103.gif',':-t' => 'emoticons7/104.gif','8->' => 'emoticons7/105.gif','I-)' => 'emoticons7/28.gif','8-|' => 'emoticons7/29.gif','L-)' => 'emoticons7/30.gif',':-&' => 'emoticons7/31.gif',':-$' => 'emoticons7/32.gif','[-(' => 'emoticons7/33.gif',':O)' => 'emoticons7/34.gif','8-}' => 'emoticons7/35.gif','<:-P' => 'emoticons7/36.gif','(:|' => 'emoticons7/37.gif','=P~' => 'emoticons7/38.gif',':-?' => 'emoticons7/39.gif','#-o' => 'emoticons7/40.gif','=D>' => 'emoticons7/41.gif',':-SS' => 'emoticons7/42.gif','@-)' => 'emoticons7/43.gif',':^o' => 'emoticons7/44.gif',':-w' => 'emoticons7/45.gif',':-<' => 'emoticons7/46.gif','>:P' => 'emoticons7/47.gif','>):)' => 'emoticons7/48.gif','X_X' => 'emoticons7/109.gif',':!!' => 'emoticons7/110.gif','m/' => 'emoticons7/111.gif',':-q' => 'emoticons7/112.gif',':-bd' => 'emoticons7/113.gif','^#(^' => 'emoticons7/114.gif',':bz' => 'emoticons7/115.gif',':o3' => 'emoticons7/108.gif',':-??' => 'emoticons7/106.gif','%-(' => 'emoticons7/107.gif',':@)' => 'emoticons7/49.gif','3:-O' => 'emoticons7/50.gif',':(|)' => 'emoticons7/51.gif','~:>' => 'emoticons7/52.gif','@};-' => 'emoticons7/53.gif','8-X' => 'emoticons7/59.gif',':-L' => 'emoticons7/62.gif','[-O<' => 'emoticons7/63.gif','$-)' => 'emoticons7/64.gif',':-"' => 'emoticons7/65.gif','b-(' => 'emoticons7/66.gif',':)>-' => 'emoticons7/67.gif','[-X' => 'emoticons7/68.gif',':D/' => 'emoticons7/69.gif','>:/' => 'emoticons7/70.gif',';))' => 'emoticons7/71.gif',':-@' => 'emoticons7/76.gif','^:)^' => 'emoticons7/77.gif',':-j' => 'emoticons7/78.gif','(*)' => 'emoticons7/79.gif',
		);
}

function bad_words($str) {
    $chars = array('lồn','cặc','fuck');
    foreach ($chars as $key => $arr)
        $str = preg_replace( "/(^|\b)".$arr."(\b|!|\?|\.|,|$)/i", "***", $str ); 
    return $str;
}  

function alter_smiley(&$item1) {
	$item1 = '<img src="smilies/'.$item1.'" border="0" />';
}
function fetch_emoticon($str){
	$str = htmlspecialchars_decode($str);
	foreach(emo_array() as $key => $value){
		$smileys[htmlspecialchars($key)] = $value;
	}
	array_walk ($smileys, 'alter_smiley');		
	$str =  strtr(htmlspecialchars($str), $smileys);
	return htmlspecialchars_decode($str);
}
?>