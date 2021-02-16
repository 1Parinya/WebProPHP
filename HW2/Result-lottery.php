    <?php
        $lucky_num = rand(0,100);
        $lottery_num = $_POST['lottery_number'];
        $money = $_POST['money'];
        $result = 0;
        if($lottery_num == $lucky_num){
            $result = 60 * $money;
            echo ("<div style='border:1px solid black;padding:15px;display:inline-block;'>");
            echo ("<p>ยินดีด้วยคุณถูกรางวัล</p>");
            echo ("<p>คุณได้เงินรางวัล $result บาท");
            echo ("<button onclick='history.back()'>กลับ</button>");
            echo ("<p></p><p>รางวัล เลขที่ออก คือ : $lucky_num</p>");
            echo ("</div>");
        }
        else {
            echo ("<div style='border:1px solid black;padding:15px;display:inline-block;'>");
            echo ("<p>เสียใจด้วยคุณไม่ถูกรางวัล</p>");
            echo ("<button onclick='history.back()'>กลับ</button>");
            echo ("<p></p><p>รางวัล เลขที่ออก คือ : $lucky_num</p>");
            echo ("</div>");
        }
    ?>