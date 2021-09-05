<?php
// PHP faylni ochish fopen() funksiyasi orqali amalga oshiriladi. Quyida sintaksisni ko'rishingiz mumkin:

// fopen(fayl nomi, rejim)

// Parametr ta'rifi

// fayl nomi: ochiladigan fayl nomini bildiradi. Bu talab qilinadigan parametr.

// rejim: fayl qaysi rejimda ochilishi kerakligini bildiradi. Bu talab qilinadigan parametr.

// r = Faqat o'qish uchun -> Fayl ko'rastkichi fayl boshidan boshlanadi
// w = Faqat yozish uchun -> Fayl ichidagilarni o'chiradi yoki yo'q bo'lsa yangi fayl hosil qiladi.Fayl ko'rsatkichlari fayl boshidan boshlanadi
// a = Faqat yozish uchun -> Fayldagi ma'lumotlar saqlanadi.Fayl ko'rsatkichlari faylning oxiridan boshlanadi.Agar fayl mavjud bo'lmasa, yangi fayl hosil qiladi.
// x = Yozish uchun yangi fayl yaratadi.Agar fayl allaqachon mavjud bo'lsa, False qaytaradi
// r+ = O'qish/yozish uchun ->Fayl ko'rsatkichi fayl boshidan boshlanadi
// w+ = O'qish/yozish uchun -> Fayl ichidagilarni o'chiradi yoki yo'q bo'lsa yangi fayl hosil qiladi.Fayl ko'rsatkichlari fayl boshidan boshlanadi
// a+ = O'qish/yozish uchun -> Fayldagi ma'lumotlar saqlanadi.Fayl ko'rsatkichlari faylning oxiridan boshlanadi.Agar fayl mavjud bo'lmasa, yangi fayl hosil qiladi.
// x+ = O'qishyozish uchun yangi fayl yaratadi.Agar fayl allaqachon mavjud bo'lsa, False qaytaradi
// $fayl = fopen("input.txt","r");


// Faylni yopish
// PHP faylni yopish uchun fclose() funksiyasidan foydalanamiz.
// $fayl = fopen("input.txt", "r");
// echo fgets($fayl);
// fclose($fayl);


// Faylni oxirini tekshirish
// Har qanday faylni (EOF=end of any file) oxirigacha o'qish uchun PHP feof() funksiyasini taqdim etadi.
// feof() funksiyasidan foydalanib fayldagi barcha ma'lumotlarni siklga qo'yib, oxirigacha o'qish mumkin.
// Sintaksis:
// feof($fayl);


// Fayllarni qatorma-qator o'qish
// PHPda fayllarni qatorma-qator o'qish uchun fgets() funksiyasi mavjud. Faylda bitta qatorni o'qish uchun fgets () funktsiyasi ishlatiladi. Bu funksiya faylni linebyline(qatorma-qator) o'qiydi, bu satrlarni o'qib bo'lgach, fayl ko'rsatgichi avtomatik tarzda faylning keyingi satriga o'tadi.
// Sintaksisi
// fgets($fayl);
?>

<?php
// $fayl=fopen("input.txt", "r");
// while(!feof($fayl)){
//     echo fgets($fayl);
//     echo "<br>";
// }
// fclose($fayl);

// Faylni belgima-belgi o'qish
// Fayllarni belgima-belgi o'qish uchun PHPda fgetc() funksiyasi mavjud. Faylda bitta belgini o'qish uchun fgetc() funksiyasi ishlatiladi. Bu funksiya character-by-charatcer(belgi bilan) faylni o'qiydi, bu belgini o'qib bo'lgandan so'ng, fayl ko'rsatgichi avtomatik ravishda faylning keyingi belgilariga o'tadi. Ya'ni qatorma-qator belgilarni bitta satrda o'qiydi.
// Sintaksisi:
// fgetc($fayl);

// $fayl=fopen("input.txt", "r");
// while(!feof($fayl)){
//     echo fgetc($fayl);
//     echo "<br>";
// }
// fclose($fayl);
?>

<?php
// Faylga ma'lumot kiritish
// Faylga ma'lumot yozish uchun fwrite() funksiyasi mavjud:
// Sintaksisi:
// fwrite($fayl,$malumot);

// $fayl = fopen('input.txt', 'w');
// fwrite($fayl,"Web Deweloper");
// echo "Faylga ma'lumot yozildi => ";
// fclose($fayl);


// Faylga ma'lumot qo'shish

// $fayl=fopen("input.txt" , "a+");
// fwrite($fayl,"Yangi ma'lumot.");
// rewind($fayl); //rewind() funskiyasi ma'lumotni faylni boshiga o'tkazadi
// echo fread($fayl, filesize("input.txt"));
// fclose($fayl);

// $fayl = fopen('input.txt', 'a+');
// $text = "\n Salom Elyor\n";
// echo fwrite($fayl, $text);
// fclose($fayl);

// $fayl = '/katalog/input.txt';
// if(file_exists($fayl)){ // faylni tekshirish uchun ishlatiladi
//     echo "Fayl $fayl mavjud";
// }else{
//     echo "Fayl $fayl mavjud emas!";
// }
?>