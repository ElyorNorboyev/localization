<?php
// $arrayName = array("O'zbekiston" => "Toshkent", "Amerika" => "Washington", "Turkiya" => "Anqara");
// print_r($arrayName); 
//   natijasi // Array ( [O'zbekiston] => Toshkent [Amerika] => Washington [Turkiya] => Anqara )
// print_r($arrayName["O'zbekiston"]);   


//  $arrayName = array(
//  "Rassiya" =>array("Maskva", "Sank Peterburg"),
//  "O'zbekiston" =>array("Toshkent", "Buxoro", "Andijon"),
// );
// echo "<pre>";
// print_r($arrayName);        
// echo "</pre>";

// Array
// (
//     [Rassiya] => Array
//         (
//             [0] => Maskva
//             [1] => Sank Peterburg
//         )

//     [O'zbekiston] => Array
//         (
//             [0] => Toshkent
//             [1] => Buxoro
//             [2] => Andijon
//         )

// )


// $array = array("Aziz", "Ahmad", "Akmal");
// foreach($array as $arr){
// echo "Mening ismim " . $arr . "<br>";
// }
// Mening ismim Aziz
// Mening ismim Ahmad
// Mening ismim Akmal


// $array = array("O'zbekiston", "Toshkent", "Samarqand");
// $number = array_push($array, "Andijon", "Surxandaryo");
// (array_push) funksiyasining vazifasi berilgan massivning oxiridan yangi massiv elementini qo'shadi
// Array ( [0] => O'zbekiston [1] => Toshkent [2] => Samarqand [3] => Andijon [4] => Surxandaryo );


// $array = array("O'zbekiston", "Toshkent", "Samarqand");
// $number =array_unshift($array, "Andijon", "Surxandaryo");
// (array_unshift) funksiyasining vazifasi berilgan massiv elementining boshidan yangi massiv elementini qo'shadi
// Array ( [0] => Andijon [1] => Surxandaryo [2] => O'zbekiston [3] => Toshkent [4] => Samarqand )


// $array = array("O'zbekiston", "Toshkent", "Samarqand");
// $number =array_shift($array);
// (array_shift) funksiyasining vazifasi berilgan massiv elementidagi boshidagi 1- elementni o'chirib tashlaydi
// // Array ( [0] => Toshkent [1] => Samarqand )


// $array = array("O'zbekiston", "Toshkent", "Samarqand");
// $number =array_pop($array);
// (array_pop) funksiyasining vazifasi berilgan massiv elementidagi oxiridagi elementni o'chirib tashlaydi
// // Array ( [0] => O'zbekiston [1] => Toshkent )
// print_r($array);


//    Massiv + Foreach

// $array = array(
//   array('ismi' => 'Elyor', 'familiyasi' => 'Norboyev', 'yoshi' => 27, 'jinsi' => 'Erkak'), 
//   array('ismi' => 'Shuxrat', 'familiyasi' => 'Begmatov', 'yoshi' => 22, 'jinsi' => 'Erkak'),
//   array('ismi' => 'Eldor', 'familiyasi' => 'Sherboyev', 'yoshi' => 19, 'jinsi' => 'Erkak'),
//   array('ismi' => "Og'abek", 'familiyasi' => 'Xolboyev', 'yoshi' => 20, 'jinsi' => 'Erkak'),
//   array('ismi' => 'Nurbek', 'familiyasi' => 'Ziyatov', 'yoshi' => 25, 'jinsi' => 'Erkak'),
// );
// echo "<pre>";
// print_r($array);
// echo "</pre>";


// Array
// (
//    [0] => Array
//        (
//           [ismi] => Elyor
//           [familiyasi] => Norboyev
//           [yoshi] => 27
//           [jinsi] => Erkak
//        )

//    [1] => Array
//        (
//           [ismi] => Shuxrat
//           [familiyasi] => Begmatov
//           [yoshi] => 22
//           [jinsi] => Erkak
//        )

//    [2] => Array
//        (
//           [ismi] => Eldor
//           [familiyasi] => Sherboyev
//           [yoshi] => 19
//           [jinsi] => Erkak
//        )

//    [3] => Array
//        (
//           [ismi] => Og'abek
//           [familiyasi] => Qobilov
//           [yoshi] => 20
//           [jinsi] => Erkak
//        )

//    [4] => Array
//         (
//             [ismi] => Nurbek
//             [familiyasi] => Ziyatov
//             [yoshi] => 25
//             [jinsi] => Erkak
//         )
// )
?>

<?php
// include "operatorlar/funksiya.php";
// $name = "Shuxrat";
// newMsg($name);
?>

<?php
// (array) funksiyalari
// (array_values) funksiyasi massivning qiymatini chiqaradi
// (array_keys) funksiyasi massivning elementni tartibini indexsi bilan  chiqaradi
// (array_unique, array_change_key_case) funksiyasi massivning ham index qiymatini ham massivning o'zini qiymatini chiqaradi
// (array_flip) funksiyasi massivning qiymatini index ga index sini qiymatga almashtiradi
// (array_key_first) funksiyasi massivning 1-index si qiymatini bildiradi
// (array_key_last) funksiyasi massivning oxirgi-index si qiymatini bildiradi
// (array_rand) funksiyasi massivning qiymatlarini random shaklida qaytaradi
// (array_slice(variable, index)) funksiyasi o'zgaruchga kiritilgan indexsidan boshlab tartiblaydi
// count funksiyasi massivning elementlar sonini sanaydi



// $state["O'zbekiston"] = "December 7, 1787";
// $state["Toshkent"] = "December 12, 1787";
// $state["Andijon"] = "December 18, 1787";

// print_r(array_values($state));
// (array_values) funksiyasi massivning qiymatini chiqaradi

// print_r(array_keys($state)); // Array ( [0] => O'zbekiston [1] => Toshkent [2] => Andijon )
// (array_keys) funksiyasi massivning elementni tartibini indexsi bilan  chiqaradi

// print_r(array_unique($state));
// (array_unique) funksiyasi massivning ham index qiymatini ham massivning o'zini qiymatini chiqaradi
//Array ( [O'zbekiston] => December 7, 1787 [Toshkent] => December 12, 1787 [Andijon] => December 18, 1787 )

// print_r(array_key_first($state));
// (array_key_first) funksiyasi massivning oxirgi-index sini qiymatini bildiradi
// O'zbekiston

// print_r(array_key_last($state));
// (array_key_first) funksiyasi massivning oxirgi-index si qiymatini bildiradi
// Andijon

// (array_flip) funksiyasi massivning qiymatini index ga index sini qiymatga almashtiradi
// Array ( [December 7, 1787] => O'zbekiston [December 12, 1787] => Toshkent [December 18, 1787] => Andijon )

// print_r(array_rand($state));
// (array_rand) funksiyasi massivning qiymatlarini random shaklida qaytaradi

// print_r(array_slice($state, 2));
// (array_slice(variable, index)) funksiyasi o'zgaruchga kiritilgan indexsidan boshlab tartiblaydi
// Array ( [Andijon] => December 18, 1787 )


// $simpsons = [
//     ['name' => 'Homer Simpson', 'gender' => 'Male'],
//     ['name' => 'Marge Simpson', 'gender' => 'Female'],
//     ['name' => 'Bart Simpson', 'gender' => 'Male']
//    ];
//    $names = array_column($simpsons, 'name');
//    print_r($names);
//    Array([0] => Homer Simpson [1] => Marge Simpson [2] => Bart Simpson )

// $garden = array("cabbage", "peppers", "turnips", "carrots");
// echo count($garden); // count funksiyasi massivning elementlar sonini sanaydi(4)


// $grades = array(42, 98, 100, 100, 43, 12);
// sort($grades);
// print_r($grades);
// massiv elementi qiymatlarini sortirovka qiladi
// Array ( [0] => 12 [1] => 42 [2] => 43 [3] => 98 [4] => 100 [5] => 100 )


// $states = array("Ohio", "Florida", "Massachusetts", "Montana");
// rsort($states);
// print_r($states);
// Array ( [0] => Ohio [1] => Montana [2] => Massachusetts [3] => Florida )


// $states = array("Delaware", "Pennsylvania", "New Jersey");
// arsort($states);
// print_r($states);
// Array ( [1] => Pennsylvania [2] => New Jersey [0] => Delaware )


// $class1 = array("John" => 100, "James" => 85);
// $class2 = array("Micky" => 78, "John" => 45);
// $classScores = array_merge_recursive($class1, $class2);
// print_r($classScores);
// Array ( [John] => Array ( [0] => 100 [1] => 45 ) [James] => 85 [Micky] => 78 )

// Array (
//     [John] => Array (
//     [0] => 100
//     [1] => 45
//     )
//     [James] => 85
//     [Micky] => 78
//    )







?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<table border="1" width ="500" height="200">
<tbody>
  
  <th>Ismi</th>
  <th>Familiyasi</th>
  <th>Yoshi</th>
  <th>Jinsi</th> 

</tbody>
    <?php foreach($array as $arr){?>
   <tr>
      <td><?php echo $arr['ismi']; ?></td>
      <td><?php echo $arr['familiyasi']; ?></td>
      <td><?php echo $arr['yoshi']; ?></td>
      <td><?php echo $arr['jinsi']; ?></td>
    </tr>
      <?php } ?>
</table>  
   <img src="./jadval.PNG" alt="tablitsa"> 
</body>
</html> -->
