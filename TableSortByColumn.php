<?

//==================================================	
			
			function customMultiSort($array,$separator) {
        		$sortArr = array();
				foreach($array as $key=>$val){
					$sortArr[$key] = $val[$separator];
				}
 
        		array_multisort($sortArr,$array);
 
        		return $array;
    		}
					
			//==================================================	
		
		$row[0][rozmass] = "2:67:5_3:75:3_4:75:1_6:74:1_7:66:4_12:65:9_16:61:4_17:61:10_19:63:7_20:75:6_22:73:6_24:69:1_26:73:7_28:65:7_29:75:6_32:73:7_33:75:4_34:72:4_45:75:6_49:63:9_51:61:6_53:72:4_55:73:6_57:73:4_58:75:6_59:87:4_60:62:7";			
					
					
			$pieces = explode("_", $row[0][rozmass]);
			$allcen	= count($pieces);
					
			$pr = array();
					
			for ($ik1=0; $ik1<$allcen;$ik1++){
						
				list($num011, $cena011, $rn011) = explode(":", $pieces[$ik1]);
				$pr[$ik1][num011] 	= $num011;
				$pr[$ik1][cena011] 	= $cena011;
				$pr[$ik1][rn011] 	= $rn011;
						
			}
					

			$pr02 	= customMultiSort($pr,'cena011');
			$zz 	= "";

			for ($ikk = 0; $ikk<$allcen; $ikk++){
				$zz = $zz.$pr02[$ikk][num011].":".$pr02[$ikk][cena011].":".$pr02[$ikk][rn011]."_";
			}
			$zz = substr($zz,0,-1);
			$pieces = explode("_", trim($zz));
            
?>            