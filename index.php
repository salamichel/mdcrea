<?php
session_start();
include ("template/head.php");
include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once('classes/phpmailer.php');
require_once("scripts/functions.php");

//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);


if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST["src"]) && $_POST["src"]=="connection") {
        $user = $db
                ->where('email', $_POST["cnx_id"])
                ->where('pwd', md5($_POST["cnx_pass"]))
                ->get('comptes');

        if (count($user) == 1) {
            $_SESSION["user"] = $user[0];
            //echo "OK";
        } else {
            echo "KO";
        }
    }
}

if (isset($_GET) && !empty($_GET['page'])) {
    switch ($_GET['page']) {
        case "registrer":
            include("include/all/log/reg.php");
            break;
        case "registrer_confirm":
            include("include/all/log/reg_conf.php");
            break;
        case "registrer_finished":
            include("include/all/log/reg_ok.php");
            break;
        case "connection":
            include("include/all/log/cnt.php");
            break;
        case "lostpass":
            include("include/all/log/lpw.php");
            break;
        case "lostpass_send":
            include("include/all/log/lpw_send.php");
            break;
        case "cm1":
            include("include/all/acc/cm1.php");
            break;
        case "cm2":
            include("include/all/acc/cm2.php");
            break;
        case "inf":
            include("include/all/acc/inf.php");
            break;
        case "pts":
            include("include/all/acc/pts.php");
            break;
        case "retouch":
            include("include/ret.php");
            break;
        case "advice1":
            include("include/ret/ad/ad1.php");
            break;
        case "advice2":
            include("include/ret/ad/ad2.php");
            break;
        case "advice3":
            include("include/ret/ad/ad3.php");
            break;
        case "advice4":
            include("include/ret/ad/ad4.php");
            break;
        case "advice5":
            include("include/ret/ad/ad5.php");
            break;
        case "advice6":
            include("include/ret/ad/ad6.php");
            break;
        case "retouch_time":
            include("include/ret/tm.php");
            break;
        case "retouch_sp1":
            include("include/ret/sp/sp1.php");
            break;
        case "retouch_sp2":
            include("include/ret/sp/sp2.php");
            break;
        case "retouch_sp3":
            include("include/ret/sp/sp3.php");
            break;
        case "retouch_sp4":
            include("include/ret/sp/sp4.php");
            break;
        case "retouch_A1":
            include("include/ret/tk/A1.php");
            break;
        case "retouch_A2":
            include("include/ret/tk/A2.php");
            break;
        case "retouch_B1":
            include("include/ret/tk/B1.php");
            break;
        case "retouch_B2":
            include("include/ret/tk/B2.php");
            break;
        case "retouch_B3":
            include("include/ret/tk/B3.php");
            break;
        case "retouch_B4":
            include("include/ret/tk/B4.php");
            break;
        case "retouch_C1":
            include("include/ret/tk/C1.php");
            break;
        case "retouch_C2":
            include("include/ret/tk/C2.php");
            break;
        case "retouch_C3":
            include("include/ret/tk/C3.php");
            break;
        case "retouch_C4":
            include("include/ret/tk/C4.php");
            break;
        case "retouch_D1":
            include("include/ret/tk/D1.php");
            break;
        case "retouch_D2":
            include("include/ret/tk/D2.php");
            break;
        case "retouch_D3":
            include("include/ret/tk/D3.php");
            break;
        case "retouch_D4":
            include("include/ret/tk/D4.php");
            break;
        case "retouch_D5":
            include("include/ret/tk/D5.php");
            break;
        case "retouch_D6":
            include("include/ret/tk/D6.php");
            break;
        case "retouch_D7":
            include("include/ret/tk/D7.php");
            break;
        case "retouch_E1":
            include("include/ret/tk/E1.php");
            break;
        case "retouch_E2":
            include("include/ret/tk/E2.php");
            break;
        case "retouch_E3":
            include("include/ret/tk/E3.php");
            break;
        case "retouch_E4":
            include("include/ret/tk/E4.php");
            break;
        case "retouch_F1":
            include("include/ret/tk/F1.php");
            break;
        case "retouch_F2":
            include("include/ret/tk/F2.php");
            break;
        case "retouch_F3":
            include("include/ret/tk/F3.php");
            break;
        case "retouch_F4":
            include("include/ret/tk/F4.php");
            break;
        case "retouch_F5":
            include("include/ret/tk/F5.php");
            break;
        case "retouch_F6":
            include("include/ret/tk/F6.php");
            break;
        case "retouch_F7":
            include("include/ret/tk/F7.php");
            break;
        case "retouch_G1":
            include("include/ret/tk/G1.php");
            break;
        case "retouch_G2":
            include("include/ret/tk/G2.php");
            break;
        case "retouch_G3":
            include("include/ret/tk/G3.php");
            break;
        case "retouch_P1":
            include("include/ret/tk/P1.php");
            break;
        case "retouch_P2":
            include("include/ret/tk/P2.php");
            break;
        case "retouch_P3":
            include("include/ret/tk/P3.php");
            break;
        case "retouch_P4":
            include("include/ret/tk/P4.php");
            break;
        case "retouch_P5":
            include("include/ret/tk/P5.php");
            break;
        case "retouch_P6":
            include("include/ret/tk/P6.php");
            break;
        case "retouch_P7":
            include("include/ret/tk/P7.php");
            break;
        case "retouch_P8":
            include("include/ret/tk/P8.php");
            break;
        case "retouch_P9":
            include("include/ret/tk/P9.php");
            break;
        case "pack_professionnel":
            include("include/ret/pk/pk1.php");
            break;
        case "pack_diamond":
            include("include/ret/pk/pk2.php");
            break;
        case "beauty_box":
            include("include/ret/pk/pk3.php");
            break;
        case "b_white_1":
            include("include/ret/pk/pk4.php");
            break;
        case "b_white_2":
            include("include/ret/pk/pk5.php");
            break;
        case "b_white_3":
            include("include/ret/pk/pk6.php");
            break;
        case "restaure_lite":
            include("include/ret/pk/pk7.php");
            break;
        case "full_restaure":
            include("include/ret/pk/pk8.php");
            break;
        case "pack_paint":
            include("include/ret/pk/pk9.php");
            break;
        case "picture":
            include("include/pic.php");
            break;
        case "picture1":
            include("include/pic/pic1.php");
            break;
        case "picture2":
            include("include/pic/pic2.php");
            break;
        case "picture3":
            include("include/pic/pic3.php");
            break;
        case "picture_devis":
            include("include/pic/picDV.php");
            break;
        case "design":
            include("include/des.php");
            break;
        case "design_sv1":
            include("include/des/des_sv1.php");
            break;
        case "design_sv2":
            include("include/des/des_sv2.php");
            break;
        case "design_sv3":
            include("include/des/des_sv3.php");
            break;
        case "design_devis":
            include("include/des/desDV.php");
            break;
        case "movie":
            include("include/mov.php");
            break;
        case "movie_family":
            include("include/mov/mov_A.php");
            break;
        case "movie_event":
            include("include/mov/mov_B.php");
            break;
        case "movie_devis":
            include("include/mov/movDV.php");
            break;
        case "formation":
            include("include/for.php");
            break;
        case "formation_home":
            include("include/for/for_A.php");
            break;
        case "formation_web":
            include("include/for/for_B.php");
            break;
        case "formation_devis":
            include("include/for/forDV.php");
            break;
        case "help":
            include("include/all/inf/aid.php");
            break;
        case "covenant":
            include("include/all/inf/cov.php");
            break;
        case "condition":
            include("include/all/inf/cod.php");
            break;
        case "contact":
            include("include/all/inf/cot.php");
            break;
        case "logout":
            unset($_SESSION);
            session_destroy();
        default:
            include ("template/hd/nav/H_idx.php");
            include ("include/idx/news.php");
            include ("include/idx/info.php");
            include ("include/idx/services.php");
            if (empty($_SESSION["user"]["is_actif"])) {
                include ("include/idx/registrer.php");
            }
            include ("template/ft/F_wht.php");
            break;
    }
} else {

    include ("template/hd/nav/H_idx.php");
    include ("include/idx/news.php");
    include ("include/idx/info.php");
    include ("include/idx/services.php");
    if (empty($_SESSION["user"]["is_actif"])) {
        include ("include/idx/registrer.php");
    }
    include ("template/ft/F_wht.php");
}
?>