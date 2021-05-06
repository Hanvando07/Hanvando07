?php
error_reporting(0);
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";

$green = "\033[0;37m";
$nau= "\e[38;5;94m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngreen="\033[42m";
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
$banner="\r

\e[1;36m               ╔███╗ 
\033[1;32m█████████╗  ██═══██
\033[1;33m██╔═════██╗   ▄▄▄▄
\033[1;31m██╚═╗   ██║ ▄▄█████▄▄
\033[1;95m████║   ██║ ██╔════██╗
\033[1;94m████║   ██║ ██║    ██║
          ██╔═╝   ██║ ██║    ██║
          ██║     ██║ ██║    ██║
          █████████╔╝  ██████ ╔╝
          ╚════════╝     ╚════╝
                                    
\n";
@system('rm TDS.txt');
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m Tool Trao Đổi Sub Đa Luồng Token\033[1;32m 🌺 \033[0m
$trang       =•=•=•=•=•=•=•=•=•=•=•=•=•==•=•=•=•=
$cyan        ☞ Bản Quyền: Hoàng Xuân Long √
$blue        ☞ Zalo: 0327.885.236
$vang        ☞ Facebook: 
$luc        ☞ Gmail:
$trang       =•=•=•=•=•=•=•=•=•=•=•=•=•==•=•=•=•=\n";
//login
$dem = 0;
  echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Access_token Trao Đổi Sub: $do";
  $tokenacc = trim(fgets(STDIN));
//Token 
$khoToken = [];
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Số Token Cần Làm: $vang"; 
$luong=trim(fgets(STDIN));
for($a=1;$a<=$luong;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
//login https://traodoisub.com/api/?fields=share&access_token=TDS0nIxIXZ2V2ciojIyVmdlNnIsISNwAzM0RnxawfIyV2c1Jye
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
@system('clear');
 echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m Tool Trao Đổi Sub Đa Luồng Token\033[1;32m 🌺 \033[0m
$trang       =•=•=•=•=•=•=•=•=•=•=•=•=•==•=•=•=•=
$cyan        ☞ Bản Quyền: Hoàng Xuân Long √
$blue        ☞ Zalo: 0327.885.236
$vang        ☞ Facebook: 
$luc        ☞ Gmail:
$trang       =•=•=•=•=•=•=•=•=•=•=•=•=•==•=•=•=•=\n";
echo $do."[".$luc."●".$do."] ".$trang."=> " .$nau."Đăng Nhập Thành Công √\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tài Khoản Trao Đổi Sub: ".$vang."".$user."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Xu Hiện Tại Là: ".$vang."".$xuhientai."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Comment\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."1+2+3".$do."]".$luc." Random Nhiệm Vụ\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$trang."Chọn Chế Độ: $vang";
$nhiemvu = trim(fgets(STDIN));
//while (true){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$do."Min".$do.": $vang";
$delay1 = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$do."Max".$do.": $vang";
$delay2 = trim(fgets(STDIN));
//if ( is_numeric($delay1) == '' or numeric($delay2) == '' ) { echo " Lỗi Không Xác Định !!! \n"; continue; }
//else if ( ($delay0) > ($delay1) ) { echo $do." Min Phải Nhỏ Hơn Max Nhé, Vui Lòng Nhập Lại \n"; continue; }
//else { break; }}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau Bao Nhiêu Job Thì Dừng: $vang";
$xxxxx = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$xxxxx.$luc." Job Thì Dừng Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$cyan."Đổi Cấu Hình Sau: $vang";
$doinick = trim(fgets(STDIN));
 echo $trang ."----------------------------------------------------------------\n";
while(true){
  if(count($khoToken) == 0){
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Lại Số Token Cần Làm: $vang";
    $luong=trim(fgets(STDIN));
for($a=1;$a<=$luong;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
			$js=json_encode($khoToken);
			$demcki=count($khoToken);
			$k = fopen("Token.txt","a+");
fwrite($k, $js);
fclose($k);
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
  for($xz=0;$xz<count($khoToken);$xz++){
    $cookie = $khoToken[$xz];
$access_token = $cookie;
if (strpos($access_token, 'EAAAA') !== 0) {
    echo "Token Lỗi !!! \n";
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
echo $luc."Tài".$do." Khoản".$blue." Facebook: ".$vang.$tenfb."\n";
echo $luc."ID Facebook: ".$vang.$idfb."\n";

} else {
    echo $do."Cấu Hình Thất Bại Token Có Thể Bị Die\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = api($urllike);
            if (count($listlike) !== 0) { echo $trang." Hết Nhiệm Vụ Like,Đang Chuyển Nhiệm Vụ \r"; 
                break;
            }
        }
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if (count($listsub) !== 0) {echo $trang." Hết Nhiệm Vụ Follow,Đang Chuyển Nhiệm Vụ \r"; 
                break;
            }
        }}
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = api($urlcmt);
            if (count($listcmt) !== 0) { echo $trang." Hết Nhiệm Vụ Comment,Đang Chuyển Nhiệm Vụ \r"; 
                break;
            }}
    }
    //listshare
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = api($urlshare);
            if (count($listshare) !== 0) { echo $trang." Hết Nhiệm Vụ Share,Đang Chuyển Nhiệm Vụ \r"; 
                break;
            }}
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1;
                    break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1;
                    array_splice($khoToken,$xz,1);
                    break;
                }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanhlike($dem, ' Like ', $idlike, $xujob, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                    }
                   $delay = rand($delay1,$delay2);  
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    
                    hoanthanhfollow($dem, 'Follow', $idsub, $xujob, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                      
  }
                    $delay = rand($delay1,$delay2); 
                    delay($delay);
                }
            }}
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                cmt($access_token, $idcmt, $cookie, $msg);
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanhcmt($dem, ' Comment ', $idcmt, $xujob, $xu,$msg);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delaybl($delaybl);
                      
                    }
                    $delay = rand($delay1,$delay2); 
                    delay($delay);
                }
            }}
            // share
       if ($listshare !== NULL) {
                    $idshare = $listshare[$lap]["id"];
                    if ($idshare !== '') {
                        $g = share($access_token, $idshare, $cookie);
                        if ($g->{'error'}->{'code'} == 190) {
                            echo "Token die !!?!
";
                            array_splice($khoToken, $xz, 1);
                            $spam = 1;
                            break;
                        }
                        if ($g->{'error'}->{'code'} == 368) {
                            echo "\e[1;91m" . $g->{'error'}->{'message'};
                            echo "
";
                            $spam = 1;
                            break;
                        }
                        if ($g->{'error'}->{'code'} == 405) {
                            echo "\e[1;91m" . "Tài khoản bị checkpoint";
                            $spam = 1;
                            array_splice($khoToken, $xz, 1);
                            break;
                        }
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanhshare($dem, ' Share ', $idshare, $xujob, $xu);
                            if ($dem % $doinick == 0) {
                                $spam = 1;
                                break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delaybl($delaybl);
                            }
                            $delay = rand($delay1,$delay2); 
                            delay($delay);
                        }
                    }
                }
            }
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function share($access_token, $idshare, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function hoanthanhfollow($dem, $type, $id, $xujob, $xu) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
echo     "\033[1;93m[\033[1;93m$dem\033[1;93m]\033[1;91m ● \033[38;5;94m$today\033[1;91m ● \033[1;32m$maui$type\033[1;91m ● \033[1;36m$id\033[1;91m ●\033[1;97m +600\033[1;91m ● \033[1;92m$xu Xu\n";
}
function hoanthanhlike($dem, $type, $id, $xujob, $xu) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
echo     "\033[1;93m[\033[1;93m$dem\033[1;93m]\033[1;91m ● \033[38;5;94m$today\033[1;91m ● \033[1;32m$maui$type\033[1;91m ● \033[1;36m$id\033[1;91m ● \033[1;97m+200\033[1;91m ● \033[1;92m$xu Xu\n";
}

function hoanthanhcmt($dem, $type, $id, $xujob, $xu,$msg) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
echo     "\033[1;93m[\033[1;93m$dem\033[1;93m]\033[1;91m ● \033[38;5;94m$today\033[1;91m ●\033[1;32m$maui$type\033[1;91m● \033[1;32m$msg\033[1;91m ● \033[1;97m+600\033[1;91m ● \033[1;92m$xu Xu\n";
}
function hoanthanhshare($dem, $type, $id, $xujob, $xu) {
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date('H:i');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
echo     "\033[1;93m[\033[1;93m$dem\033[1;93m]\033[1;91m ● \033[38;5;94m$today\033[1;91m ● \033[1;32m$maui$type\033[1;91m ● \033[1;36m$id\033[1;91m ●\033[1;97m +600\033[1;91m ● \033[1;92m$xu Xu\n";    
}

function delay($delay) {
    for ($time = $delay; $time > -0; $time--) {
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
    	       echo "                                                      \r";
       echo "\e[1;31m● Vui lòng chờ ●\e[1;37m〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$time." \e[1;33mGiây ";
       usleep(130000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;36m● Vui lòng chờ ●\e[1;37m〘\e[1;33m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■\e[1;37m〙".$time."\e[1;34m Giây ";
       usleep(130000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m● Vui lòng chờ ●\e[1;37m〘\e[1;34m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■\e[1;37m〙".$time."\e[1;31m Giây ";
       usleep(130000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;33m● Vui lòng chờ ●\e[1;37m〘\e[1;35m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■\e[1;37m〙".$time."\e[1;32m Giây ";
       usleep(130000);
       echo "\r";
       echo "                                                      \r";
       echo "\e[1;34m● Vui lòng chờ ●\e[1;37m〘\e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉\e[1;37m〙".$time."\e[1;34m Giây ";
       usleep(130000);
       echo "\r";
}}
    function delaybl($delaybl) {
    for ($time = $delaybl; $time > -0; $time--) {
echo "\r"; 
    	echo "\r"; 
            echo $trang." Delay Chống Block Còn\e[1;33m (◕︵◕)ﾉ\e[1;31m●         \e[1;93m".$time." \e[1;97mGiây\r";
        usleep(200000);
        echo "                                     \r";
        echo $trang." Delay Chống Block Còn\e[1;33m (◕︵◕)ﾉ\e[1;31m● ●       \e[1;93m".$time." \e[1;97mGiây\r";
        usleep(200000);
        echo "                                     \r";
        echo $trang." Delay Chống Block Còn\e[1;33m (◕︵◕)ﾉ\e[1;31m● ● ●     \e[1;93m".$time." \e[1;97mGiây\r";
        usleep(200000);
        echo "                                     \r";
        echo $trang." Delay Chống Block Còn\e[1;33m (◕︵◕)ﾉ\e[1;31m● ● ● ●   \e[1;93m".$time." \e[1;97mGiây\r";
        usleep(200000);
        echo "                                     \r";
        echo $trang." Delay Chống Block Còn\e[1;33m (◕︵◕)ﾉ\e[1;31m● ● ● ● ● \e[1;93m".$time." \e[1;97mGiây\r";
        usleep(200000);
}
echo "\r";}
    
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
function chay($t) {
	for ($x = 0; $x <= $t; $x++) {
		echo "\033[1;91m- ";usleep(13333);
        echo "\033[1;97m- ";usleep(13333); }
        echo "\n";
        }

?>
