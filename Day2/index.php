<?php
$age = 26;
// $age = $age + 5;
echo ++$age;
echo "<br>";
echo $age++;
echo "<br>";
echo $age++;
echo "<br>";
echo ++$age;
echo "<br>";
echo $age++;
echo "<br>";
echo $age--;
echo "<br>";
echo $age--;
echo "<br>";
echo $age++;
echo "<br>";
echo $age++;
echo "<br>";
echo "<br>";

for ($i = 0; $i < 20; $i += 2) {
    echo " I am $i years old<br>";
}

echo "<br>";
$book = array("Physics", "Chemistry", "Math", "Biology");
array_push($book, "English", "Bangla", "History");
echo count($book);
// echo "<pre>";
var_dump($book);
echo "<br>";
print_r($book[1]);
echo "<br>";
echo "<br>";


for ($i = 0; $i < count($book); $i++) {
    echo " $book[$i] <br>";
}
echo "<br>";
foreach ($book as $key => $value) {
    echo $key . ":" . $value . "<br>";
    # code...
}
echo "<br>";
$books = array("Group" => "Science", "Year"=> "2020", "Course"=> "HSC");
$books ["SSC"] = "2019";
echo count($books);
echo "<br>";
foreach ($books as $key => $value) {
    echo $key . ":" . $value. "<br>";
    # code...
}